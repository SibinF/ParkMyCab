<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TotalSpace
 */
class TotalSpace extends Model
{
    protected $table = 'total_spaces';

    public $timestamps = false;

    protected $fillable = [
        'vehicle_type_id',
        'no_of_space',
        'available_now',
        'pre_booked'
    ];

    protected $guarded = [];

        
}