<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactSpaceManagerProfile
 */
class ContactSpaceManagerProfile extends Model
{
    protected $table = 'contact_space_manager_profiles';

    public $timestamps = false;

    protected $fillable = [
        'contact_id',
        'space_manager_profile_id'
    ];

    protected $guarded = [];

        
}