<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AddressesSpaceProfile
 */
class AddressesSpaceProfile extends Model
{
    protected $table = 'addresses_space_profiles';

    public $timestamps = false;

    protected $fillable = [
        'space_profile_id',
        'address_id'
    ];

    protected $guarded = [];

        
}