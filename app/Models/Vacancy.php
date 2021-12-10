<?php

namespace App\Models;

use App\Models\Traits\Columns;
use App\Models\Traits\Lang;
use App\Models\Traits\Log;
use App\Models\Traits\Publish;
use App\Models\Traits\Slug;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use Log, Publish, Slug, Columns, Translatable, Lang;

    public $translatedAttributes = [
        'responsibility',
        'requirement',
        'conditions',
        'name'
    ];
    protected $table = 'vacancies';
    protected $translationModel = VacancyTranslation::class;

    protected $guarded = ['id', 'updated_at'];

    protected $casts = [
        'published' => 'boolean',
    ];

    public function validatorRules($data)
    {
        return [
            'responsibility' => 'string',
            'requirement' => 'string',
            'conditions' => 'string',
            'published' => 'boolean',
            'name' => 'required|string|max:255'
        ];
    }
}
