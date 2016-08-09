<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpaceProfileSpaceService
 */
class SpaceProfileSpaceService extends Model
{
    protected $table = 'space_profile_space_services';

    public $timestamps = false;

    protected $fillable = [
        'space_profile_id',
        'space_service_id'
    ];

    protected $guarded = [];

        
}