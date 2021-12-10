<?php

namespace App\Models;

use App\Models\Traits\Lang;
use \App\Models\Traits\Log;
use \App\Models\Traits\Publish;
use \App\Models\Traits\Slug;
use \App\Models\Traits\Columns;
use Astrotomic\Translatable\Contracts\Translatable as ContractsTranslatable;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static take(int $int)
 * @method static where(string $string, string $slug)
 * @method static published()
 */
class News extends Model implements ContractsTranslatable
{
    use Log, Publish, Slug, Columns, Translatable, Lang;

    public $translatedAttributes = [
        'name',
        'description',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'content',
        'fields'
    ];

    protected $translationModel = NewsTranslation::class;

    // temporary remove created_at for content transfer
    protected $guarded = ['id', 'updated_at'];

    protected $casts = [
        'published' => 'boolean',
    ];

    public function validatorRules($data): array
    {
        return [
            'name' => 'required|string|max:255',
            'published' => 'boolean'
        ];
    }

    public function url()
    {
        $resource = Page::where('behavior', 'news')->first();

        return $resource->url . '/' . $this->slug;
    }

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(NewsCategory::class, 'category_id', 'id');
    }

    public function getBreadcrumbs(): array
    {
        return [
            [
                'name' => __('content.Главная'),
                'url' => '/'
            ],
            [
                'name' => __('content.Новости'),
                'url' => route('news')
            ],
            [
                'name' => $this->name,
                'url' => ''
            ]
        ];
    }
}
