<?php

namespace App\Models;

use App\Models\Traits\Lang;
use \App\Models\Traits\Log;
use \App\Models\Traits\Url;
use \App\Models\Traits\Columns;
use Astrotomic\Translatable\Contracts\Translatable as ContractsTranslatable;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static where(string $string, string $slug)
 * @property int id
 * @property string name
 */
class Service extends Model implements ContractsTranslatable
{
    use Log, Url, Columns, Translatable, Lang;

    public $translatedAttributes = [
        'name',
        'description',
        'fields',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];

    protected $casts = [
        'popular' => 'boolean'
    ];

    protected $translationModel = ServiceTranslation::class;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function validatorRules($data)
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'string',
            'slug' => 'nullable|string|max:255',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }

    /**
     * @return array
     */
    public function getBreadcrumbs(): array
    {
        return [
            [
                'name' => __('content.Главная'),
                'url' => '/'
            ],
            [
                'name' => __('content.Услуги'),
                'url' => route('services')
            ],
            [
                'name' => $this->name,
                'url' => ''
            ]
        ];
    }
}
