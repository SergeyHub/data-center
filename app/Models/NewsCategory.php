<?php

namespace App\Models;

use App\Models\Traits\Lang;
use \App\Models\Traits\Log;
use \App\Models\Traits\Url;
use \App\Models\Traits\Columns;
use Astrotomic\Translatable\Contracts\Translatable as ContractsTranslatable;
use Astrotomic\Translatable\Translatable;
use \Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, string $slug)
 */
class NewsCategory extends Model implements ContractsTranslatable
{
    use Log, Url, Columns, Translatable, Lang;

    public $translatedAttributes = [
        'name',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];

    protected $translationModel = NewsCategoryTranslation::class;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function validatorRules($data)
    {
        return [
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
        ];
    }

    public function news()
    {
        return $this->hasMany(News::class, 'category_id')->with('translations');
    }
}
