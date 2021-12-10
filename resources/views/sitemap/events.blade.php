<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
@inject('langHelper', 'App\Services\LangHelper')
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
    @foreach ($events as $event)
        <url>
            <loc>{{ $event['url'] }}</loc>
            <lastmod>{{ $event['date'] }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.8</priority>
            <xhtml:link
                rel="alternate"
                hreflang="{{ $event['locale'] }}"
                href="{{ $event['url']  }}"
            />
            @if ($event['hasTranslation'])
                <xhtml:link
                    rel="alternate"
                    hreflang="{{ $event['alternateLocale'] }}"
                    href="{{ $event['alternateUrl']  }}"
                />
            @endif
        </url>
    @endforeach
</urlset>
