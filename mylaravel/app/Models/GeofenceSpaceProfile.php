<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GeofenceSpaceProfile
 */
class GeofenceSpaceProfile extends Model
{
    protected $table = 'geofence_space_profiles';

    public $timestamps = false;

    protected $fillable = [
        'space_profile_id',
        'geofence_id'
    ];

    protected $guarded = [];

        
}