<?php

namespace App\Models;

use App\Models\Traits\Columns;
use App\Models\Traits\Lang;
use App\Models\Traits\Log;
use App\Models\Traits\Publish;
use App\Models\Traits\Slug;
use Astrotomic\Translatable\Contracts\Translatable as ContractsTranslatable;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static take(int $int)
 * @method static where(string $string, string $slug)
 * @method static published()
 */
class Video extends Model implements ContractsTranslatable
{
    use Log, Publish, Slug, Columns, Translatable, Lang;

    public $translatedAttributes = [
        'name'
    ];
    protected $table = 'videos';
    protected $translationModel = VideoTranslation::class;

    protected $guarded = ['id', 'updated_at'];

    protected $casts = [
        'published' => 'boolean',
    ];

    public function validatorRules($data)
    {
        return [
            'name' => 'required|string|max:255',
            'published' => 'boolean'
        ];
    }
}
