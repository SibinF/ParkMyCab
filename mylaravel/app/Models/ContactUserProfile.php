<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactUserProfile
 */
class ContactUserProfile extends Model
{
    protected $table = 'contact_user_profiles';

    public $timestamps = false;

    protected $fillable = [
        'contact_id',
        'user_profile_id'
    ];

    protected $guarded = [];

        
}