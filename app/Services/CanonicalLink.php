<?php

namespace App\Services;

class CanonicalLink
{
    /**
     * @var string|null
     */
    private $query;
    /**
     * @var string
     */
    private $url;
    /**
     * @var array|false|int|string|null
     */
    private $current_route;

    public function __construct()
    {
        $this->url = \Request::url();
        $this->query = \Request::getQueryString();
        if (\Request::route()){
            $this->current_route = \Request::route()->getName();
        } else {
            $this->current_route = "";
        }
    }

    public function isPaginate(): bool
    {
        if($this->current_route == 'services' || $this->current_route == 'services.item') { return true; }

        return strpos($this->query, 'page') !== false;
    }

    public function getUrl()
    {
        return $this->url;
    }
}
