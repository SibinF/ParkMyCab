<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpaceType
 */
class SpaceType extends Model
{
    protected $table = 'space_types';

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    protected $guarded = [];

        
}