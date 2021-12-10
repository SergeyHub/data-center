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
class NewsHabr extends Model implements ContractsTranslatable
{
    use Log, Publish, Slug, Columns, Translatable, Lang;

    protected $table = 'news_habr';

    public $translatedAttributes = [
        'name',
        'description',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'content',
        'fields'
    ];

    protected $translationModel = NewsHabrTranslation::class;

    // temporary remove created_at for content transfer
    protected $guarded = ['id', 'updated_at'];

    protected $casts = [
        'published' => 'boolean',
    ];

    public function validatorRules($data)
    {
        return [
            'name' => 'required|string|max:255',
            'published' => 'boolean'
        ];
    }

    public function url()
    {
        $resource = Page::where('behavior', 'news-habr')->first();

        return $resource->url . '/' . $this->slug;
    }

    public function getBreadcrumbs(): array
    {
        return [
            [
                'name' => __('content.Главная'),
                'url' => '/'
            ],
            [
                'name' => __('content.Публикации'),
                'url' => route('news.habr')
            ],
            [
                'name' => $this->name,
                'url' => ''
            ]
        ];
    }
}
