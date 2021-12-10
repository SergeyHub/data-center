<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
    @foreach ($knowledgeBases as $knowledgeBase)
        <url>
            <loc>{{ $knowledgeBase['url'] }}</loc>
            <lastmod>{{ $knowledgeBase['date'] }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.8</priority>
            <xhtml:link
                rel="alternate"
                hreflang="{{ $knowledgeBase['locale'] }}"
                href="{{ $knowledgeBase['url']  }}"
            />
            @if ($knowledgeBase['hasTranslation'])
                <xhtml:link
                    rel="alternate"
                    hreflang="{{ $knowledgeBase['alternateLocale'] }}"
                    href="{{ $knowledgeBase['alternateUrl']  }}"
                />
            @endif
        </url>
    @endforeach
</urlset>
