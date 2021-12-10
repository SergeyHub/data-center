<?php

namespace App\Services;

class ViewHelper
{
    /**
     * @param array $content
     * @return string
     */
    public function getBackground(array $content): string
    {
        if (isset($content['background']) && $content['background'] === 'grey') {
            return 'bg-grey';
        }

        return '';
    }

    public function getRowsCount(array $content): string {
        if(isset($content['row']) && \is_numeric($content['row'])) {
            if((int)$content['row'] === 2) {
                return ' two-side';
            } else if((int)$content['row'] === 3) {
                return ' three-side';
            } else if((int)$content['row'] === 4) {
                return ' four-side';
            } else {
                return '';
            }
        }

        return '';
    }

    public function setHrefToBlank($content) {
        $params = 'target="_blank"';

        preg_match_all('/<a[^>]+href=([\'"])(?<href>.+?)\1[^>]*>.*<\/a>/i', $content, $allLinks);
        $allLinks = $allLinks[0];
        $newLinks = [];
        foreach($allLinks as $links) {
            $a = str_replace("<a ", "<a ${params} ", $links);
            $b = str_replace("</a>", "</a>", $a);
            $newLinks[] = $b;
        }

        return str_replace($allLinks, $newLinks, $content);
    }
}
