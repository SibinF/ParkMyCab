<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpaceProfileTotalSpace
 */
class SpaceProfileTotalSpace extends Model
{
    protected $table = 'space_profile_total_spaces';

    public $timestamps = false;

    protected $fillable = [
        'space_profile_id',
        'total_space_id'
    ];

    protected $guarded = [];

        
}