<?php

namespace App\Models\Traits;

trait Nested
{
    public function parent()
    {
        return $this->belongsTo(static::class);
    }

    public function childrens()
    {
        return $this->hasMany(static::class, 'parent_id', 'id')->orderBy('sort');
    }
}
