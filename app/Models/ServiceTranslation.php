<?php

namespace App\Models;

use App\Models\Traits\JsonFields;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;

class ServiceTranslation extends Model
{
    use JsonFields, Searchable;
    protected $table = 'service_translations';

    protected $fillable = [
        'name',
        'description',
        'fields',
        'locale',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];

    protected $casts = [
        'fields' => 'array',
    ];

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'content' => json_encode($this->fields, JSON_UNESCAPED_UNICODE)
        ];
    }

    /**
     * @return BelongsTo
     */
    public function model(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
