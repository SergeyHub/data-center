<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::post('nestable/save', 'NestableController@save')->name('nestable.save');
    Route::get('log', 'LogController@index')->name('log.index');
    Route::get('form', 'FormController@index')->name('form.index');
    Route::get('settings', 'SettingsController@index')->name('settings.index');
    Route::post('settings', 'SettingsController@index');
    Route::post('upload/image', 'UploadController@image');
    Route::get('reviews', 'ReviewController@index')->name('reviews.index');
    Route::post('reviews/publish', 'ReviewController@publish')->name('reviews.publish');

    Route::resource('user', 'UserController');
    Route::resource('service', 'ServiceController');
    Route::delete('/service/{model_id}/translation/{id}', 'BaseController@translationDestroy')
        ->name('service.translation.delete');

    Route::resource('page', 'PageController');
    Route::delete('/page/{model_id}/translation/{id}', 'BaseController@translationDestroy')
        ->name('page.translation.delete');
    Route::prefix('page')->group(function () {
        Route::get('copy/{id}', 'PageController@copy')->name("page.copy");
        Route::get('child/{id}', 'PageController@child')->name("page.child");
    });




//    Route::resource('vacancy', 'BaseController');







    Route::post('upload/file', 'UploadController@file');
});
