<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Location
 */
class Location extends Model
{
    protected $table = 'locations';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'postal_code',
        'citiy_id'
    ];

    protected $guarded = [];

        
}