<?php

namespace App\Models;

use App\Models\Traits\Columns;
use App\Models\Traits\Lang;
use App\Models\Traits\Log;
use App\Models\Traits\Publish;
use App\Models\Traits\Slug;
use Astrotomic\Translatable\Contracts\Translatable as ContractsTranslatable;
use Astrotomic\Translatable\Translatable;
use File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Document extends Model implements ContractsTranslatable
{
    use Log, Publish, Slug, Columns, Translatable, Lang;

    public $translatedAttributes = [
        'name',
        'description'
    ];
    protected $table = 'documents';
    protected $translationModel = DocumentTranslation::class;

    protected $guarded = ['id', 'updated_at'];

    protected $casts = [
        'published' => 'boolean',
    ];

    /**
     * Validation rules
     *
     * @param $data
     *
     * @return string[]
     */
    public function validatorRules($data): array
    {
        return [
            'name' => 'required|string|max:255',
            'published' => 'boolean'
        ];
    }

    /**
     * Return URL of file
     *
     * @return string
     */
    public function getUrl(): string
    {
        return Storage::url(ltrim($this->file_path, '/'));
    }

    /**
     * Return human-readable file size
     *
     * @return string
     */
    public function getFileSize(): string
    {
        return $this->bytesToHuman(Storage::size('/public' . $this->file_path));
    }

    /**
     * Convert bytes to human-readable file size
     *
     * @param $bytes
     *
     * @return string
     */
    private function bytesToHuman($bytes): string
    {
        $units = ['B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB'];

        for ($i = 0; $bytes > 1024; $i++) {
            $bytes /= 1024;
        }

        return round($bytes, 1) . ' ' . $units[$i];
    }

    /**
     * Return file extension
     *
     * @return string
     */
    public function getFileExtension(): string
    {
        return File::extension($this->file_path);
    }

    /**
     * Return related image instance
     *
     * @return BelongsTo Image class instance
     */
    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }
}
