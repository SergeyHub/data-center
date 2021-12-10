<?php

namespace App\Models;

use App\Models\Traits\Columns;
use App\Models\Traits\Lang;
use App\Models\Traits\Log;
use App\Models\Traits\Nested;
use App\Models\Traits\Publish;
use App\Models\Traits\Sort;
use App\Models\Traits\Url;
use Astrotomic\Translatable\Contracts\Translatable as ContractsTranslatable;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, string $string1)
 * @property mixed parent_id
 */
class Page extends Model implements ContractsTranslatable
{
    use Log, Publish, Nested, Sort, Url, Columns, Translatable, Lang;

    public $translatedAttributes = [
        'name',
        'name_in_menu',
        'name_in_title',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'content',
        'fields'
    ];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $casts = [
        'published' => 'boolean'
    ];

    public function validatorRules($data)
    {
        return [
            'name' => 'required|string|max:255',
            'published' => 'boolean',
            'slug' => 'nullable|string|max:255',
            'fields' => 'array',
            'parent_id' => 'nullable|integer|exists:pages,id'
        ];
    }

    public function scopeInMenu($query)
    {
        return $query->where('in_menu', true);
    }

    public function getHeaderImageAttribute()
    {
        return Image::find($this->header_image_id) ?: Image::default();
    }

    public function getMenu()
    {
        $pages = $this->published()->inMenu()->orderBy('sort')->where('parent_id', null)->get();
        foreach ($pages as $item) {
            if ($item->behavior === 'services') {
                $item->children = ServiceCategory::all();
            } else {
                $item->children = $this->where('parent_id', $item->id)->orderBy('sort')->get();
            }
        }

        return $pages;
    }

    public function getBreadcrumbs()
    {
        $breadcrumbs = [];
        $page = $this;
        do {
            if ($page->published && !empty($page->url)) {
                if (isset($page->name_in_menu) && !empty($page->name_in_menu)) {
                    $breadcrumbs[] = [
                        'name' => $page->name_in_menu,
                        'url' => $page->url
                    ];
                } elseif (isset($page->name) && !empty($page->name)) {
                    $breadcrumbs[] = [
                        'name' => $page->name,
                        'url' => $page->url
                    ];
                }
            }
            $page = self::find($page->parent_id);
        } while (isset($page) && $page->parent_id !== null);

        $breadcrumbs[] = [
            'name' => __('content.Главная'),
            'url' => '/'
        ];

        $breadcrumbs[0]['url'] = '';

        return array_reverse($breadcrumbs);
    }
}
