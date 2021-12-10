<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Redirect extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function getRedirect($fromUrl)
    {
        $target = false;
        if (is_array($fromUrl)) {
            $query = self::query();
            foreach ($fromUrl as $k => $v) {
                $query->where('from', 'ilike', "%{$k}={$v}%");
            }
            $to = $query->first();
        } else {
            $to = self::where('from', $fromUrl)->first();
        }

        if (!$to) {
            return false;
        }

        /** @var $to Model */
        if ($to->model && $to->model_id) {
            /** @var $to Model */
            $model = $to->model::where(['id' => $to->model_id])->first();
            if ($model) {
                $target = [$model->url, $to->type];
            }
        }

        if (!$target && $to->to) {
            $target = [$to->to, $to->type];
        }

        return $target;
    }
}
