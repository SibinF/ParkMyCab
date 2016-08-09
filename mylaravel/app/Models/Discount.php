<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Discount
 */
class Discount extends Model
{
    protected $table = 'discounts';

    public $timestamps = false;

    protected $fillable = [
        'reference_no',
        'amount',
        'coupon_id'
    ];

    protected $guarded = [];

        
}