<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VehicleMade
 */
class VehicleMade extends Model
{
    protected $table = 'vehicle_mades';

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    protected $guarded = [];

        
}