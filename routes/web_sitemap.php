<?php

use App\Http\Controllers\SitemapController;

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/robots.txt', [SitemapController::class, 'robots']);
Route::prefix('sitemap')->group(function () {
    Route::get('/base', [SitemapController::class, 'base'])->name('sitemap.base');
    Route::get('/services', [SitemapController::class, 'services'])->name('sitemap.services');
    Route::get('/news', [SitemapController::class, 'news'])->name('sitemap.news');
    Route::get('/habr-news', [SitemapController::class, 'habrNews'])->name('sitemap.habr-news');
    Route::get('/smi-news', [SitemapController::class, 'smiNews'])->name('sitemap.smi-news');
    Route::get('/events', [SitemapController::class, 'events'])->name('sitemap.events');
    Route::get('/knowledge-bases', [SitemapController::class, 'knowledgeBases'])->name('sitemap.knowledge-bases');
});
