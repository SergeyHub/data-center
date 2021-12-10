<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait Slug
{
    public function setSlugAttribute($value)
    {
        if ($value != '/') {
            if (Str::slug($value)) {
                $value = Str::slug($value);
            } elseif (isset($this->translatedAttributes) && in_array('name', $this->translatedAttributes, true)) {
                if (!empty($this->translate('ru'))) {
                    $value = Str::slug($this->translate('ru')->attributes['name']);
                } else {
                    $value = Str::slug($this->translate('en')->attributes['name']);
                }
            } else {
                $value = Str::slug($this->attributes['name']);
            }
        }

        $where = [['id', '!=', $this->id]];

        if (array_key_exists('parent_id', $this->attributes)) {
            $where = array_merge($where, [['parent_id', '=', $this->parent_id]]);
        }

        while (self::where(array_merge($where, [['slug', '=', $value]]))->count()) {
            if (!preg_match('~^(.+-)(\d+)$~', $value)) {
                $value = $value . '-1';
            } else {
                $value = preg_replace_callback('~^(.+-)(\d+)$~', function ($data) {
                    return $data[1] . ($data[2] + 1);
                }, $value);
            }
        }

        $this->attributes['slug'] = $value;
    }
}
