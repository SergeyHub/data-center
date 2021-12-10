<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait Lang
{
    /**
     * @param $query
     * @return mixed
     */
    public function scopeLang($query): Builder
    {
        return $query->whereHas('translations', function (Builder $query) {
            $query->where('locale', app()->getLocale());
        });
    }
}
