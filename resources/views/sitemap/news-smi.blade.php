<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
    @foreach ($news as $item)
        <url>
            <loc>{{ $item['url'] }}</loc>
            <lastmod>{{ $item['date'] }}</lastmod>
            <changefreq>monthly {{ $item['hasTranslation'] }}</changefreq>
            <priority>0.8</priority>
            <xhtml:link
                rel="alternate"
                hreflang="{{ $item['locale'] }}"
                href="{{ $item['url']  }}"
            />
            @if ($item['hasTranslation'])
                <xhtml:link
                    rel="alternate"
                    hreflang="{{ $item['alternateLocale'] }}"
                    href="{{ $item['alternateUrl']  }}"
                />
            @endif
        </url>
    @endforeach
</urlset>
