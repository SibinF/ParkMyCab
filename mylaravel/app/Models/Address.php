<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Address
 */
class Address extends Model
{
    protected $table = 'addresses';

    public $timestamps = false;

    protected $fillable = [
        'house_no',
        'street',
        'area',
        'locality',
        'location_id',
        'country_id',
        'state_id',
        'city_id'
    ];

    protected $guarded = [];

        
}