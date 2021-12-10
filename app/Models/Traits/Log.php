<?php

namespace App\Models\Traits;

trait Log
{
    public static function bootLog()
    {
        static::saving(function ($model) {
            \App\Models\Log::model($model, 'update');
        });

        static::created(function ($model) {
            \App\Models\Log::model($model, 'create');
        });

        static::deleted(function ($model) {
            \App\Models\Log::model($model, 'delete');
        });
    }
}
