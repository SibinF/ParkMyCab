<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpaceManagerProfile
 */
class SpaceManagerProfile extends Model
{
    protected $table = 'space_manager_profiles';

    public $timestamps = true;

    protected $fillable = [
        'first_name',
        'last_name',
        'profile_image',
        'qualification',
        'date_of_join',
        'date_of_birth',
        'created',
        'modified'
    ];

    protected $guarded = [];

        
}