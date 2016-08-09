<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Geofence
 */
class Geofence extends Model
{
    protected $table = 'geofences';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'lat',
        'long',
        'radius'
    ];

    protected $guarded = [];

        
}