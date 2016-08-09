<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Coupon
 */
class Coupon extends Model
{
    protected $table = 'coupons';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'image',
        'decription',
        'code',
        'valid_from',
        'expiration',
        'is_active',
        'created',
        'modified'
    ];

    protected $guarded = [];

        
}