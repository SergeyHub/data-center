<?php

namespace App\Models\Traits;

use App\Models\Redirect;

trait Url
{
    use Slug;

    public static function bootUrl()
    {
        static::saving(function ($model) {
            $model->updateUrl();
        });

        static::saved(function ($model) {
            $model->updateChildrensUrl();
        });
    }

    public function updateChildrensUrl()
    {
        if (array_diff(['url', 'slug', 'parent_id'], $this->columns())) {
            return;
        }

        if (count($this->childrens)) {
            foreach ($this->childrens as $children) {
                if ($children->url != $children->fullUrl()) {
                    $children->save();
                }
            }
        }
    }

    public function updateUrl()
    {
        $tableIsUrlable = array_diff(['url', 'slug'], $this->columns());

        if ($tableIsUrlable) {
            return;
        }

        $newUrl = $this->fullUrl();
        if ($newUrl != $this->url) {
            $this->saveRedirect();
        }

        $this->url = $newUrl;
    }

    public function saveRedirect()
    {
        if ($this->id && $this->url) {
            Redirect::firstOrCreate([
                'from' => $this->url,
                'model' => static::class,
                'model_id' => $this->id
            ]);
        }
    }

    public function fullUrl()
    {
        $url = '/' . trim($this->slug, '/');
        $parent = $this->parent;
        while ($parent) {
            $slug = trim($parent->slug, '/');
            if (!empty($slug)) {
                $url = '/' . $slug . $url;
            }
            $parent = $parent->parent;
        }

        return $url;
    }
}
