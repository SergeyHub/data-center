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
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Certificate extends Model implements ContractsTranslatable
{
    use Log, Publish, Slug, Columns, Translatable, Lang;

    public $translatedAttributes = [
        'name',
        'file_path',
        'image_id'
    ];
    protected $table = 'certificates';
    protected $translationModel = CertificateTranslation::class;

    protected $guarded = ['id', 'updated_at'];

    protected $casts = [
        'published' => 'boolean',
    ];

    /**
     * Validation rules
     *
     * @param $data
     *
     * @return string[]
     */
    public function validatorRules($data): array
    {
        return [
            'name' => 'required|string|max:255',
            'published' => 'boolean',
            'class' => 'string|max:255|nullable'
        ];
    }

    /**
     * Return related image instance
     *
     * @return BelongsTo Image class instance
     */
    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }
}
