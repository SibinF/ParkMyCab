<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CheckinCheckout
 */
class CheckinCheckout extends Model
{
    protected $table = 'checkin_checkouts';

    public $timestamps = true;

    protected $fillable = [
        'check_In',
        'check_out',
        'checkin_time',
        'checkout_time',
        'time_spend',
        'device_id',
        'space_manager_profile_id',
        'space_profile_id',
        'user_profile_id',
        'is_verified',
        'created',
        'modified'
    ];

    protected $guarded = [];

        
}