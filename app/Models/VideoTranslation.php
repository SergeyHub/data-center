<?php

namespace App\Models;

use App\Models\Traits\JsonFields;
use Illuminate\Database\Eloquent\Model;

class VideoTranslation extends Model
{
    use JsonFields;

    protected $table = 'video_translations';

    protected $fillable = [
        'name',
        'video_id',
        'locale'
    ];

    protected $casts = [
        'fields' => 'array',
    ];
}
