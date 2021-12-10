<?php

namespace App\Services;

use Illuminate\Http\Request;

class LangHelper
{
    /**
     * @var Request
     */
    private $request;
    /**
     * @var string
     */
    private $subdomain;

    /**
     * @var string
     */
    private $url;

    /**
     * @var false|string[]
     */
    private $urlArray;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->url = $request->url();
        $this->parseUrl();
    }

    protected function parseUrl(): void
    {
        $this->urlArray = explode('.', parse_url($this->url, PHP_URL_HOST));

        if ($this->urlArray[0] === 'www') {
            $this->subdomain = $this->urlArray[1];
        } else {
            $this->subdomain = $this->urlArray[0];
        }
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
        $this->parseUrl();
    }

    public function getRuRoute()
    {
        if ($this->subdomain === 'ru') {
            return '#';
        }

        if ($this->urlArray[0] === 'www') {
            return str_replace('www.', 'ru.', $this->url);
        }

        return str_replace('//', '//ru.', $this->url);
    }

    public function getEnRoute()
    {
        if ($this->subdomain === 'ru') {
            if ($this->urlArray[0] === 'www') {
                return str_replace('www.ru.', '', $this->url);
            }

            return str_replace('//ru.', '//www.', $this->url);
        }

        return '#';
    }
}
