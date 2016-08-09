<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpaceOwnerProfile
 */
class SpaceOwnerProfile extends Model
{
    protected $table = 'space_owner_profiles';

    public $timestamps = true;

    protected $fillable = [
        'first_name',
        'last_name',
        'mobile_no',
        'email',
        'ownership',
        'created',
        'modified'
    ];

    protected $guarded = [];

        
}