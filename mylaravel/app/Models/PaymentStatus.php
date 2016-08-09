<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PaymentStatus
 */
class PaymentStatus extends Model
{
    protected $table = 'payment_statuses';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description'
    ];

    protected $guarded = [];

        
}