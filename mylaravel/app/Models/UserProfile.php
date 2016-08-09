<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserProfile
 */
class UserProfile extends Model
{
    protected $table = 'user_profiles';

    public $timestamps = true;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'mobile_number',
        'profile_image',
        'user_varification_id',
        'created',
        'modified'
    ];

    protected $guarded = [];

        
}