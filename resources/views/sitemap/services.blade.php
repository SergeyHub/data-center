<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
    @foreach ($services as $service)
        <url>
            <loc>{{ $service['url'] }}</loc>
            <lastmod>{{ $service['date'] }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.8</priority>
            <xhtml:link
                rel="alternate"
                hreflang="{{ $service['locale'] }}"
                href="{{ $service['url']  }}"
            />
            @if ($service['hasTranslation'])
                <xhtml:link
                    rel="alternate"
                    hreflang="{{ $service['alternateLocale'] }}"
                    href="{{ $service['alternateUrl']  }}"
                />
            @endif
        </url>
    @endforeach
    @foreach ($categories as $category)
        <url>
            <loc>{{ $category['url'] }}</loc>
            <lastmod>{{ $category['date'] }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.8</priority>
            <xhtml:link
                rel="alternate"
                hreflang="{{ $category['locale'] }}"
                href="{{ $category['url']  }}"
            />
            @if ($category['hasTranslation'])
                <xhtml:link
                    rel="alternate"
                    hreflang="{{ $category['alternateLocale'] }}"
                    href="{{ $category['alternateUrl']  }}"
                />
            @endif
        </url>
    @endforeach
</urlset>
