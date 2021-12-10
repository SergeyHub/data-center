<?php

if ($resource = \App\Models\Page::where('behavior', 'events')->first()) {
    Route::get($resource->url, [
        'resource' => $resource,
        'uses' => 'EventsController@index'
    ])->name('events');

    Route::get($resource->url . '/data', 'EventsController@getEvents');

    Route::get($resource->url . '/{slug}', [
        'resource' => $resource,
        'uses' => 'EventsController@show'
    ])->name('events.item');
}
