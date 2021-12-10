<?php

namespace App\Models;

use App\Models\Traits\JsonFields;
use Illuminate\Database\Eloquent\Model;

class DocumentCategoryTranslation extends Model
{
    use JsonFields;

    protected $table = 'document_category_translations';

    protected $fillable = [
        'document_category_id',
        'locale',
        'name'
    ];
}
