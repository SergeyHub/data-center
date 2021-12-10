<?php

namespace App\Models;

use App\Models\Traits\JsonFields;
use Illuminate\Database\Eloquent\Model;

class PageTranslation extends Model
{
    use JsonFields;

    protected $fillable = [
        'name',
        'name_in_menu',
        'name_in_title',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'content',
        'fields'
    ];

    protected $casts = [
        'fields' => 'array',
    ];
}
