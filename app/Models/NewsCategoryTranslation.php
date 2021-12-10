<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsCategoryTranslation extends Model
{
    protected $table = 'news_category_translations';

    protected $fillable = [
        'name',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];
}
