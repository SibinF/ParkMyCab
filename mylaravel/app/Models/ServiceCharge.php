<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ServiceCharge
 */
class ServiceCharge extends Model
{
    protected $table = 'service_charges';

    public $timestamps = false;

    protected $fillable = [
        'amount'
    ];

    protected $guarded = [];

        
}