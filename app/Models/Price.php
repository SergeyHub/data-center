<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'prices';
    protected $fillable = ['name', 'title', 'value'];
    public $timestamps = false;

    /**
     * @param $data
     * @return string[]
     */
    public function validatorRules($data): array
    {
        return [
            'name' => 'required|string|max:50',
            'title' => 'required|string|max:150',
            'value' => 'required|numeric'
        ];
    }
}
