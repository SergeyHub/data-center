<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static where(array $array)
 */
class ServiceInterest extends Model
{
    public $timestamps = false;
    protected $table = 'services_interest';


    /**
     * @return BelongsTo
     */
    public function services(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'parent_service_id', 'id');
    }
}
