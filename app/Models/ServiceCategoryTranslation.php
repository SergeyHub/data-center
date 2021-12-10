<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategoryTranslation extends Model
{
    protected $table = 'service_category_translations';
    
    protected $fillable = [
        'name',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];
}
