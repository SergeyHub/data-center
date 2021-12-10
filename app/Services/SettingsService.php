<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class SettingsService
{
    /**
     * @var array
     */
    private $settings;

    public function __construct()
    {
        $this->settings = DB::table('settings')->get()->pluck('value', 'name')->toArray();
    }

    public function __get(string $key)
    {
        return $this->settings[$key];
    }

    public function __set($key, $value)
    {
    }
}
