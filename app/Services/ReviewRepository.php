<?php

namespace App\Services;

use App\Models\Review;
use Illuminate\Database\Eloquent\Collection;

class ReviewRepository
{
    /**
     * @return Collection
     */
    public function getReviews(): Collection
    {
        return Review::where(['locale' => app()->getLocale()])->orderBy('created_at')->published()->get();
    }
}
