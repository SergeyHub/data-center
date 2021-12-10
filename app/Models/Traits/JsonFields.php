<?php

namespace App\Models\Traits;

trait JsonFields
{
//    add fields => array to model->casts to use this trait
//
//    protected $casts = [
//        'fields' => 'array'
//    ];

    public function getAttribute($key)
    {
        $return = parent::getAttribute($key);
        if ($return === null) {
            $return = $this->getValueFromFields($key);
        }
        return $return;
    }

    public function getValueFromFields($key)
    {
        $return = null;

        if (preg_match('|fields\[(\w+)]|', $key, $m)) {
            $key = $m[1];
        }

        if (isset($this->fields[$key])) {
            $return = $this->fields[$key];
        }

        return $return;
    }

    public function destroyCast($field): void
    {
        unset($this->casts[$field]);
    }

    public static function getTableName()
    {
        return (new self())->getTable();
    }

    protected function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }
}
