<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LoginUserProfile
 */
class LoginUserProfile extends Model
{
    protected $table = 'login_user_profiles';

    public $timestamps = false;

    protected $fillable = [
        'user_profile_id',
        'login_id'
    ];

    protected $guarded = [];

        
}