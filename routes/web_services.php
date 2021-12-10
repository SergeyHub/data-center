<?php

use App\Models\Page;

if ($resource = Page::where('behavior', 'services')->first()) {
    Route::get($resource->url, [
        'resource' => $resource,
        'uses' => 'ServiceController@show'
    ])->name('services');

    Route::get($resource->url . '/{slug}', [
        'resource' => $resource,
        'uses' => 'ServiceController@showCategory'
    ])->name('services.category')
        ->where('slug', '[A-Za-z0-9-]+');

    Route::get($resource->url . '/{category}/{slug}', [
        'resource' => $resource,
        'uses' => 'ServiceController@showService'
    ])->name('services.item')
        ->where('category', '[A-Za-z0-9-]+')
        ->where('slug', '[A-Za-z0-9-]+');
}
