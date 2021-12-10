<?php

namespace App\Models;

use App\Models\Traits\JsonFields;
use Illuminate\Database\Eloquent\Model;

class CertificateTranslation extends Model
{
    use JsonFields;

    protected $table = 'certificate_translations';

    protected $fillable = [
        'name',
        'certificate_id',
        'locale',
        'file_path',
        'image_id'
    ];

    protected $casts = [
        'fields' => 'array',
    ];
}
