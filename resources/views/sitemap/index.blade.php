<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <sitemap>
        <loc>{{ route('sitemap.base') }}</loc>
        <lastmod>{{ \Carbon\Carbon::yesterday() }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{ route('sitemap.services') }}</loc>
        <lastmod>{{ \Carbon\Carbon::yesterday() }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{ route('sitemap.news') }}</loc>
        <lastmod>{{ \Carbon\Carbon::yesterday() }}</lastmod>
    </sitemap>
    @if (app()->getLocale() === 'ru')
        <sitemap>
            <loc>{{ route('sitemap.habr-news') }}</loc>
            <lastmod>{{ \Carbon\Carbon::yesterday() }}</lastmod>
        </sitemap>
    @endif
    <sitemap>
        <loc>{{ route('sitemap.events') }}</loc>
        <lastmod>{{ \Carbon\Carbon::yesterday() }}</lastmod>
    </sitemap>
    @if (app()->getLocale() === 'ru')
        <sitemap>
            <loc>{{ route('sitemap.knowledge-bases') }}</loc>
            <lastmod>{{ \Carbon\Carbon::yesterday() }}</lastmod>
        </sitemap>
    @endif
</sitemapindex>
