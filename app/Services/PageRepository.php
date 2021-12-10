<?php

namespace App\Services;

use App\Models\Page;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceInterest;
use Illuminate\Database\Eloquent\Builder;
use \Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class PageRepository
{
    /**
     * @var Page[]|Collection
     */
    private $pages;

    /**
     * @var ServiceCategory[]|Collection
     */
    private $categories;

    /**
     * @var Service[]|Collection
     */
    private $services;

    public function __construct()
    {
        $this->pages = Page::with(['translation'])->published()->lang()->orderBy('sort')->get();
        $this->services = Service::with(['translation', 'category'])
            ->lang()->get();
        $this->categories = ServiceCategory::with(['services', 'translation'])->lang()->get();
    }

    /**
     * @return Page[]|Collection
     */
    public function getPages(): Collection
    {
        return $this->pages;
    }

    /**
     * @param string $behavior
     * @return Model|null
     */
    public function getPageByBehavior(string $behavior): ?Model
    {
        return $this->pages->sortBy('parent_id')->firstWhere('behavior', $behavior);
    }

    /**
     * @return ServiceCategory[]|Collection
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    /**
     * @return Service[]|Collection
     */
    public function getServices(): Collection
    {
        return $this->services;
    }

    /**
     * @return Collection
     */
    public function getMenu(): Collection
    {
        $baseMenu = $this->pages->filter(function ($item) {
            return $item->in_menu && $item->parent_id === null;
        });

        $baseMenu->map(function ($item) {
            if ($item->behavior === 'services') {
                $item->children = $this->categories;
            } else {
                $item->children = $this->pages->filter(function ($child) use ($item) {
                    return $item->id === $child->parent_id;
                });
            }
        });

        return $baseMenu;
    }

    public function getChildrenById(int $id)
    {
        return $this->pages->filter(function (Page $page) use ($id) {
            return $page->parent_id === $id;
        });
    }

    /**
     * @return Collection
     */
    public function servicesPopular(): Collection
    {
        return $this->services->filter(function (Service $service) {
            return $service->popular;
        });
    }

    /**
     * @param Service $service
     * @return mixed
     */
    public function servicesInterest(Service $service): \Illuminate\Support\Collection
    {
        return ServiceInterest::where(['parent_service_id' => $service->id])->with('services')->get()->pluck('services');
    }
    public function allservices(): \Illuminate\Support\Collection
    {
        //return News::with('translation')->published()->lang()->orderBy('created_at', 'desc')->paginate(self::COUNT_NEWS_PAGE);
        return ServiceCategory::all();
    }
}
