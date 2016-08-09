<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VehicleDescription
 */
class VehicleDescription extends Model
{
    protected $table = 'vehicle_descriptions';

    public $timestamps = false;

    protected $fillable = [
        'engine_no',
        'rc_book_image',
        'vehicle_image_1',
        'vehicle_image_2',
        'color',
        'vehicle_type_id',
        'vehicle_model_id',
        'rto_registration_id'
    ];

    protected $guarded = [];

        
}