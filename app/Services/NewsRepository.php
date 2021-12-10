<?php

namespace App\Services;

use App\Models\News;
use App\Models\NewsCategory;
use App\Models\NewsHabr;
use App\Models\NewsSmi;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class NewsRepository
{
    public const COUNT_NEWS_PAGE = 6;

    public function all()
    {
        return News::with('translation')->published()->lang()
            ->orderBy('created_at', 'desc')->get();
    }

    /**
     * @return mixed
     */
    public function getAllNews()
    {
        return News::with('translation')->published()->lang()
            ->orderBy('created_at', 'desc')->paginate(self::COUNT_NEWS_PAGE);
    }

    public function getNewsCategories(): Collection
    {
        return NewsCategory::withCount('news')->with('translation')->lang()->get();
    }

    /**
     * @param NewsCategory $category
     * @return LengthAwarePaginator
     */
    public function getNewsByCategory(NewsCategory $category): LengthAwarePaginator
    {
        return $category->news()->lang()
            ->paginate(self::COUNT_NEWS_PAGE);
    }

    /**
     * @param int $count
     * @return mixed
     */
    public function getLastNews(int $count = 4): Collection
    {
        return News::published()->with('translations')->lang()->orderBy('created_at', 'desc')->take($count)->get();
    }

    /**
     * @return mixed
     */
    public function getAllHabrNews(): Collection
    {
        return NewsHabr::published()
            ->with('translation')
            ->lang()
            ->orderBy('created_at', 'desc')
            ->get();
    }

    /**
     * @return Collection
     */
    public function getAllSmiNews(): Collection
    {
        $newsSmi = NewsSmi::published()
            ->with('translation')
            ->lang()
            ->orderBy('created_at', 'desc')
            ->get();
        $newsHabr = NewsHabr::published()
            ->with('translation')
            ->lang()
            ->orderBy('created_at', 'desc')
            ->get();
        $newsSmi->merge($newsHabr);
        $newsSmi = $newsSmi->sortByDesc('created_at', 'desc');

        return $newsSmi;
    }

    /**
     * @return LengthAwarePaginator
     */
    public function getHabrNews(): LengthAwarePaginator
    {
        return NewsHabr::published()
            ->with('translation')
            ->lang()
            ->orderBy('created_at', 'desc')
            ->paginate(self::COUNT_NEWS_PAGE);
    }

    /**
     * @return LengthAwarePaginator
     */
    public function getSmiNews(): LengthAwarePaginator
    {
        $newsSmi = NewsSmi::published()
            ->with('translation')
            ->lang()
            ->orderBy('created_at', 'desc')
            ->get();
        $newsHabr = NewsHabr::published()
            ->with('translation')
            ->lang()
            ->orderBy('created_at', 'desc')
            ->get();

        $newsSmi = $newsSmi->merge($newsHabr);

        $newsSmi = $newsSmi->sortByDesc('created_at');

        return $newsSmi->paginate(self::COUNT_NEWS_PAGE);
    }

    public function getSmiNewsByCategory($category, $limit = 3)
    {
        return NewsSmi::published()
            ->with('translation')
            ->lang()
            ->where('category', $category)
            ->orderBy('created_at', 'desc')
            ->limit($limit)
            ->get();
    }
    public function getNewsImg($newsimg)
    {
        if (is_array($newsimg)) {
            $newsimg = json_encode($newsimg);
        }
        preg_match_all('/\"\/[\/A-Za-z0-9-_]+\.(jpg|png|svg)/', $newsimg, $matches, PREG_SET_ORDER);
        $image = $matches[0][0];
        $image = str_replace('"', '', $image);
        return $image;
    }
}
