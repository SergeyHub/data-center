<?php

use App\Models\Page;

if ($resource = Page::where('behavior', 'knowledge-base')->first()) {
    Route::get($resource->url, [
        'resource' => $resource,
        'uses' => 'KnowledgeBaseController@index'
    ])->name('knowledge-base');

    Route::get($resource->url . '/{clean_url?}', [
        'resource' => $resource,
        'uses' => 'KnowledgeBaseController@show'
    ])->where('clean_url', '[A-Za-z0-9\/-]+')->name('knowledge-base.item');
}
