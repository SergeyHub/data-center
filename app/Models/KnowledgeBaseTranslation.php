<?php

namespace App\Models;

use App\Models\Traits\JsonFields;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class KnowledgeBaseTranslation extends Model
{
    use JsonFields, Searchable;

    protected $table = 'knowledge_base_translations';

    // temporary add knowledge_base_id & locale for content transfer
    protected $fillable = [
        'knowledge_base_id',
        'locale',
        'name',
        'description',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'content',
        'fields'
    ];

    protected $casts = [
        'fields' => 'array'
    ];

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'content' => json_encode($this->fields, JSON_UNESCAPED_UNICODE)
        ];
    }
}
