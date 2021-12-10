<?php

namespace App\Models;

use App\Models\Traits\JsonFields;
use Illuminate\Database\Eloquent\Model;

class VacancyTranslation extends Model
{
    use JsonFields;

    protected $table = 'vacancy_translations';

    protected $fillable = [
        'responsibility',
        'requirement',
        'conditions',
        'vacancy_id',
        'locale',
        'name'
    ];

    protected $casts = [
        'fields' => 'array'
    ];
}
