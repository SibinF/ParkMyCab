<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpacePrice
 */
class SpacePrice extends Model
{
    protected $table = 'space_prices';

    public $timestamps = false;

    protected $fillable = [
        'per_hour',
        'first_two_hour',
        'per_week',
        'per_month'
    ];

    protected $guarded = [];

        
}