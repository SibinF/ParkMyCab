<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpacePriceTotalSpace
 */
class SpacePriceTotalSpace extends Model
{
    protected $table = 'space_price_total_spaces';

    public $timestamps = false;

    protected $fillable = [
        'space_price_id',
        'total_space_id'
    ];

    protected $guarded = [];

        
}