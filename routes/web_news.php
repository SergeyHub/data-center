<?php

if ($resource = \App\Models\Page::where('behavior', 'news')->first()) {
    Route::get($resource->url, [
        'resource' => $resource,
        'uses' => 'NewsController@index'
    ])->name('news');

    Route::get($resource->url . '/{slug}', [
        'resource' => $resource,
        'uses' => 'NewsController@showCategory'
    ])->name('news.category')
        ->where('slug', '[A-Za-z0-9-]+');

    Route::get($resource->url . '/{category}/{slug}', [
        'resource' => $resource,
        'uses' => 'NewsController@show'
    ])->name('news.item');
}

if ($resource = \App\Models\Page::where('behavior', 'news-habr')->first()) {
    Route::get($resource->url, [
        'resource' => $resource,
        'uses' => 'NewsController@habrNews'
    ])->name('news.habr');

    Route::get($resource->url . '/{slug}', [
        'resource' => $resource,
        'uses' => 'NewsController@habrNewsShow'
    ])->name('news.habr.item');
}

if ($resource = \App\Models\Page::where('behavior', 'news-smi')->first()) {
    Route::get($resource->url, [
        'resource' => $resource,
        'uses' => 'NewsController@habrSmi'
    ])->name('news.smi');

    Route::get($resource->url . '/{slug}', [
        'resource' => $resource,
        'uses' => 'NewsController@habrSmiShow'
    ])->name('news.smi.item');
}
