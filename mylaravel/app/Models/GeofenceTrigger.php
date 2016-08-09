<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GeofenceTrigger
 */
class GeofenceTrigger extends Model
{
    protected $table = 'geofence_triggers';

    public $timestamps = false;

    protected $fillable = [
        'entry_time',
        'exit_time',
        'expiration_timer',
        'booking_id'
    ];

    protected $guarded = [];

        
}