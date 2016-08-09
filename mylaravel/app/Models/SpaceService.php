<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpaceService
 */
class SpaceService extends Model
{
    protected $table = 'space_services';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'image_one',
        'image_two',
        'service_charge_id'
    ];

    protected $guarded = [];

        
}