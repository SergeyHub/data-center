<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::resource('news', 'BaseController');
    Route::delete('/news/{model_id}/translation/{id}', 'BaseController@translationDestroy')
        ->name('news.translation.delete');
    Route::resource('news-habr', 'BaseController');
    Route::delete('/news-habr/{model_id}/translation/{id}', 'BaseController@translationDestroy')
        ->name('news-habr.translation.delete');
    Route::resource('news-category', 'BaseController');
    Route::delete('/news-category/{model_id}/translation/{id}', 'BaseController@translationDestroy')
        ->name('news-category.translation.delete');
    Route::resource('news-smi', 'BaseController');
    Route::delete('/news-smi/{model_id}/translation/{id}', 'BaseController@translationDestroy')
        ->name('news-smi.translation.delete');
    Route::resource('service-category', 'BaseController');
    Route::delete('/service-category/{model_id}/translation/{id}', 'BaseController@translationDestroy')
        ->name('service-category.translation.delete');
    Route::resource('event-type-value', 'BaseController');
    Route::resource('events', 'BaseController');
    Route::delete('/events/{model_id}/translation/{id}', 'BaseController@translationDestroy')
        ->name('events.translation.delete');
    Route::resource('knowledge-base', 'BaseController');
    Route::delete('/knowledge-base/{model_id}/translation/{id}', 'BaseController@translationDestroy')
        ->name('knowledge-base.translation.delete');
    Route::resource('price', 'BaseController');

    Route::resource('document', 'BaseController');
    Route::delete('/document/{model_id}/translation/{id}', 'BaseController@translationDestroy')
        ->name('document.translation.delete');

    Route::resource('video', 'BaseController');
    Route::delete('/video/{model_id}/translation/{id}', 'BaseController@translationDestroy')
        ->name('video.translation.delete');

    Route::resource('certificate', 'BaseController');
    Route::delete('/certificate/{model_id}/translation/{id}', 'BaseController@translationDestroy')
        ->name('certificate.translation.delete');

    Route::resource('vacancy', 'BaseController');
    Route::delete('/vacancy/{model_id}/translation/{id}', 'BaseController@translationDestroy')
        ->name('vacancy.translation.delete');
    Route::get('jobs', [\App\Http\Controllers\Admin\JobsController::class, 'index'])->name('jobs.index');
    Route::get('log-jobs', [\App\Http\Controllers\Admin\JobsController::class, 'log'])->name('log-job.index');
});
