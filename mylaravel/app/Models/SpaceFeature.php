<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpaceFeature
 */
class SpaceFeature extends Model
{
    protected $table = 'space_features';

    public $timestamps = false;

    protected $fillable = [
        'access_description',
        'space_description',
        'total_area',
        'access_method_id'
    ];

    protected $guarded = [];

        
}