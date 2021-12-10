<?php

namespace App\Models;

use App\Models\Traits\Columns;
use App\Models\Traits\Lang;
use App\Models\Traits\Log;
use App\Models\Traits\Nested;
use App\Models\Traits\Publish;
use App\Models\Traits\Sort;
use App\Models\Traits\Url;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class KnowledgeBase extends Model
{
    use Log, Publish, Nested, Sort, Url, Columns, Translatable, Lang;

    public $translatedAttributes = [
        'name',
        'name_in_menu',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'content',
        'fields'
    ];

    protected $translationModel = KnowledgeBaseTranslation::class;

    // temporary remove created_at for content transfer
    protected $guarded = ['id', 'updated_at'];

    protected $casts = [
        'published' => 'boolean'
    ];

    public function validatorRules($data)
    {
        return [
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'fields' => 'array',
            'parent_id' => 'nullable|integer|exists:pages,id'
        ];
    }

    public function getCleanUrlAttribute()
    {
        return ltrim($this->url, '/');
    }

    public function getParents()
    {
        $parents = [$this->id];
        $page = $this;

        while ($page->parent_id !== null) {
            $parents[] = $page->parent_id;
            $page = self::find($page->parent_id);
        }

        return $parents;
    }

    public function getBreadcrumbs(): array
    {
        return [
            [
                'name' => __('content.Главная'),
                'url' => '/'
            ],
            [
                'name' => $this->name,
                'url' => ''
            ]
        ];
    }
}
