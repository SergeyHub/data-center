<?php

namespace App\Models;

class Settings extends \Illuminate\Database\Eloquent\Model
{
    use \App\Models\Traits\Log;

    protected $settings;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public $timestamps = false;

    public function getAttribute($key)
    {
        $return = parent::getAttribute($key);
        if ($return === null) {
            if (!$this->settings) {
                $this->settings = self::all()->mapWithKeys(function ($model) {
                    return [$model->name => $model->value];
                });
            }
            if (isset($this->settings[$key])) {
                $return = $this->settings[$key];
            }
        }
        return $return;
    }
}
