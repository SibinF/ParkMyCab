<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LoginsSpaceManagerProfile
 */
class LoginsSpaceManagerProfile extends Model
{
    protected $table = 'logins_space_manager_profiles';

    public $timestamps = false;

    protected $fillable = [
        'login_id',
        'space_manager_profile_id'
    ];

    protected $guarded = [];

        
}