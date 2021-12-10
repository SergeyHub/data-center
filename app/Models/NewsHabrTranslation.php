<?php

namespace App\Models;

use App\Models\Traits\JsonFields;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;

class NewsHabrTranslation extends Model
{
    use JsonFields, Searchable;

    protected $table = 'news_habr_translations';

    // temporary add news_habr_id & locale for content transfer
    protected $fillable = [
        'news_habr_id',
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
        return $this->belongsTo(NewsHabr::class, 'news_habr_id')->published();
    }
}
