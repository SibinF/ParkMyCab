<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserProfileVehicleDescription
 */
class UserProfileVehicleDescription extends Model
{
    protected $table = 'user_profile_vehicle_descriptions';

    public $timestamps = false;

    protected $fillable = [
        'user_profile_id',
        'vehicle_description_id'
    ];

    protected $guarded = [];

        
}