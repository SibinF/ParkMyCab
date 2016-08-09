<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VehicleModel
 */
class VehicleModel extends Model
{
    protected $table = 'vehicle_models';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'vehicle_made_id'
    ];

    protected $guarded = [];

        
}