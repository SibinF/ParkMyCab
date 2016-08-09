<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 */
class City extends Model
{
    protected $table = 'cities';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'state_id'
    ];

    protected $guarded = [];

        
}