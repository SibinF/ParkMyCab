<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactsSpaceOwnerProfile
 */
class ContactsSpaceOwnerProfile extends Model
{
    protected $table = 'contacts_space_owner_profiles';

    public $timestamps = false;

    protected $fillable = [
        'contacts_id',
        'space_owner_profiles_id'
    ];

    protected $guarded = [];

        
}