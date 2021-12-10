<?php

namespace App\Models;

use App\Models\Traits\Lang;
use Astrotomic\Translatable\Contracts\Translatable as ContractsTranslatable;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class DocumentCategory extends Model implements ContractsTranslatable
{
    use Translatable, Lang;

    public $translatedAttributes = [
        'name'
    ];
    protected $table = 'document_categories';
    protected $translationModel = DocumentCategoryTranslation::class;

    protected $fillable = [
        'code'
    ];
}
