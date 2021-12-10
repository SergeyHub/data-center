<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventTypeValue extends Model
{
    protected $table = 'event_type_values';
    protected $fillable = ['type_ru', 'type_en'];
    public $timestamps = false;

    /**
     * @param $data
     * @return string[]
     */
    public function validatorRules($data): array
    {
        return [
            'type_ru' => 'required|string|max:150',
            'type_en' => 'required|string|max:150'
        ];
    }
}
