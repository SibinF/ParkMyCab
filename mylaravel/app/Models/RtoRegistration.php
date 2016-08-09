<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RtoRegistration
 */
class RtoRegistration extends Model
{
    protected $table = 'rto_registrations';

    public $timestamps = false;

    protected $fillable = [
        'state',
        'district',
        'serial_no',
        'number'
    ];

    protected $guarded = [];

        
}