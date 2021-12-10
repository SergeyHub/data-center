<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Mail\FormSended;
use Illuminate\Support\Facades\Mail;
use \App\Models\Traits\JsonFields;

class Form extends Model
{
    use JsonFields;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $casts = [
        'fields' => 'array'
    ];

    protected $fieldNames = [
        'name' => 'Имя',
        'phone' => 'Телефон',
        'email' => 'Email',
        'message' => 'Сообщение',
        'agreement' => 'Согласие на обработку персональных данных',
    ];

    public function typeName()
    {
        if ($this->type === 'contacts_page') {
            return 'Форма на странице контактов';
        }

        if ($this->type === 'demo-access') {
            return 'Получить демо-доступ на главной';
        }

        return $this->type;
    }

    public function fieldName($field)
    {
        return $this->fieldNames[$field] ?? $field;
    }
}
