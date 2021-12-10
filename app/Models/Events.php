<?php

namespace App\Models;

use App\Models\Traits\Columns;
use App\Models\Traits\Lang;
use App\Models\Traits\Log;
use App\Models\Traits\Publish;
use App\Models\Traits\Slug;
use Astrotomic\Translatable\Contracts\Translatable as ContractsTranslatable;
use Astrotomic\Translatable\Translatable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;

/**
 * @property int status
 */
class Events extends Model implements ContractsTranslatable
{
    use Log, Publish, Slug, Columns, Translatable, Lang;

    public const STATUS_OFFLINE = 0;
    public const STATUS_ONLINE = 1;

    //public $translationModel = EventsTranslation::class;

    // temporary remove created_at for content transfer
    protected $guarded = ['id', 'updated_at'];

    protected $casts = [
        'time_start' => 'datetime',
        'time_end' => 'datetime'
    ];

    public $translatedAttributes = [
        'name',
        'description',
        'fields',
        'location',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];


    public function validatorRules($data)
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:512',
            'location' => 'required|string|max:512',
            'published' => 'boolean'
        ];
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        switch ($this->status) {
            case self::STATUS_ONLINE:
                return 'online';
            case self::STATUS_OFFLINE:
                return 'offline';
        }

        return '';
    }

    /**
     * @param $value
     */
    public function setTimeStartAttribute($value)
    {
        $this->attributes['time_start'] = Carbon::createFromFormat('d.m.Y H:i', $value);
    }

    /**
     * @param $value
     */
    public function setTimeEndAttribute($value)
    {
        $this->attributes['time_end'] = Carbon::createFromFormat('d.m.Y H:i', $value);
    }

    public function getBreadcrumbs()
    {
        return [
            [
                'name' => __('content.Главная'),
                'url' => '/'
            ],
            [
                'name' => __('content.О нас'),
                'url' => '/about/'
            ],
            [
                'name' => __('content.Наши мероприятия'),
                'url' => '/about/events/'
            ],
            [
                'name' => $this->name,
                'url' => ''
            ]
        ];
    }
}
