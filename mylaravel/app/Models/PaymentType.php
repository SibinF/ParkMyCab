<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PaymentType
 */
class PaymentType extends Model
{
    protected $table = 'payment_types';

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    protected $guarded = [];

        
}