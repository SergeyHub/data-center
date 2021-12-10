<?php

namespace App\Models;

use App\Models\Traits\JsonFields;
use Illuminate\Database\Eloquent\Model;

class DocumentTranslation extends Model
{
    use JsonFields;

    protected $table = 'document_translations';

    protected $fillable = [
        'document_id',
        'document_category_id',
        'locale',
        'name',
        'description'
    ];
}
