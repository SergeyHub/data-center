<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
    @foreach ($pages as $page)
        <url>
            <loc>{{ $page['url'] }}</loc>
            <lastmod>{{ $page['date'] }}</lastmod>
            <xhtml:link
                rel="alternate"
                hreflang="{{ $page['locale'] }}"
                href="{{ $page['url']  }}"
            />
            @if ($page['hasTranslation'])
                <xhtml:link
                    rel="alternate"
                    hreflang="{{ $page['alternateLocale'] }}"
                    href="{{ $page['alternateUrl']  }}"
                />
            @endif
        </url>
    @endforeach
</urlset>
