<?php

namespace App\Models;

use App\Models\Traits\Publish;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string company
 * @property string email
 * @property string content
 * @property string locale
 * @property false|mixed published
 * @property mixed estimate
 */
class Review extends Model
{
    use Publish;

    // temporary remove created_at for content transfer
    protected $guarded = ['id', 'updated_at'];

    public static function validatorRules($data): array
    {
        return [
            'company' => 'required|string|max:255',
            'published' => 'boolean',
            'email' => 'required|email',
            'content' => 'string'
        ];
    }

    /**
     * @return string
     */
    public function getCaptionPublish(): string
    {
        if ($this->published) {
            return 'Опубликован';
        }

        return 'Не опубликован';
    }
}
