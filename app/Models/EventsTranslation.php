<?php

namespace App\Models;

use App\Models\Traits\JsonFields;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;

class EventsTranslation extends Model
{
    use JsonFields, Searchable;

    protected $table = 'events_translations';

    // temporary add events_id & locale for content transfer
    protected $fillable = [
        'events_id',
        'locale',
        'name',
        'description',
        'location',
        'time',
        'fields',
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
        return $this->belongsTo(Events::class, 'event_id')->published();
    }
}
