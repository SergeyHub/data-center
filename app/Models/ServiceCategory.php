<?php

namespace App\Models;

use App\Models\Traits\Lang;
use \App\Models\Traits\Log;
use \App\Models\Traits\Url;
use \App\Models\Traits\Columns;
use Astrotomic\Translatable\Contracts\Translatable as ContractsTranslatable;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static where(string $string, string $slug)
 */
class ServiceCategory extends \Illuminate\Database\Eloquent\Model implements ContractsTranslatable
{
    use Log, Url, Columns, Translatable, Lang;

    public $translatedAttributes = [
        'name',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];

    protected $translationModel = ServiceCategoryTranslation::class;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function validatorRules($data)
    {
        return [
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
        ];
    }

    /**
     * @return HasMany
     */
    public function services()
    {
        return $this->hasMany(Service::class, 'category_id')->with('translation')->lang();
    }
}
