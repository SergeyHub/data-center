<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as Resizer;
use Illuminate\Support\Str;

class Image extends Model
{
    protected $guarded = ['created_at', 'updated_at'];

    public static function storeImage($image, $ext, $alt = '', $width = null, $height = null, $parentId = null)
    {
        $name = Str::random(36) . '.' . $ext;
        $path = "images/{$name}";

        if ($ext == 'svg') {
            $size = "";
        } elseif ($parentId !== null && ($width || $height)) {
            $size = "{$width}x{$height}";
        } else {
            $im = imagecreatefromstring($image);
            $originalWidth = imagesx($im);
            $originalHeight = imagesy($im);
            $size = "{$originalWidth}x{$originalHeight}";
        }

        Storage::disk('public')->put($path, $image);

        $url = str_replace(env('APP_URL'), '', Storage::disk('public')->url($path));
        $path = str_replace(Storage::disk('public')->path(''), '', Storage::disk('public')->path($path));

        $imageModel = new self([
            'url' => $url,
            'path' => $path,
            'size' => $size,
            'alt' => $alt,
            'parent_id' => $parentId
        ]);

        if ($imageModel->save()) {
            if ($width || $height) {
                return $imageModel->size($width, $height)->getAttributes();
            }

            return $imageModel->getAttributes();
        } else {
            return null;
        }
    }

    public static function default()
    {
        return new self([
            'url' => '/images/default.png'
        ]);
    }

    public function size($width = null, $height = null)
    {
        $size = "{$width}x{$height}";
        if ($this->size === $size) {
            return $this;
        }

        $variant = $this->variants()->where('size', $size)->first();
        if ($variant) {
            return $variant;
        }

        $path = Storage::disk('public')->path('');
        $file = str_replace($path, '', $this->path);

        if (!Storage::disk('public')->exists($file)) {
            return self::default();
        }

        $image = Storage::disk('public')->get($file);
        $image = $this->resize($image, $width, $height);

        self::storeImage($image, pathinfo($file, PATHINFO_EXTENSION), '', $width, $height, $this->id);

        return $this->variants()->where('size', $size)->first();
    }

    public function variants()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    public function resize($image, $width = null, $height = null)
    {
        $quality = 90;
        if ($width < 150 || $height < 150) {
            $quality = 100;
        }

        if ($width && $height) {
            return Resizer::make($image)->fit($width, $height)->encode(null, $quality);
        }

        return Resizer::make($image)->resize($width, $height, function ($constraint) use ($quality) {
            $constraint->aspectRatio(null, $quality);
        })->encode();
    }
}
