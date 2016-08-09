<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VehicleType
 */
class VehicleType extends Model
{
    protected $table = 'vehicle_types';

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    protected $guarded = [];

        
}