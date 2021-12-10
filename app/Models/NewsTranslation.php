<?php

namespace App\Models;

use App\Models\Traits\JsonFields;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;

class NewsTranslation extends Model
{
    use JsonFields, Searchable;

    protected $table = 'news_translations';

    // temporary add news_id & locale for content transfer
    protected $fillable = [
        'news_id',
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
        return $this->belongsTo(News::class, 'news_id')->published();
    }
}
