<?php

namespace App\Models\Traits;

trait Publish
{
    public function scopePublished($query)
    {
        return $query->where('published', true);
    }
}
