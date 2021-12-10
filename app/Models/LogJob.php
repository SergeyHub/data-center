<?php

namespace App\Models;

use App\Models\Traits\JsonFields;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string type
 * @property array data
 * @property string class
 */
class LogJob extends Model
{
    use JsonFields;

    protected $casts = [
        'data' => 'array',
    ];
}
