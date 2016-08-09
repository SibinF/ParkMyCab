<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Booking
 */
class Booking extends Model
{
    protected $table = 'bookings';

    public $timestamps = true;

    protected $fillable = [
        'reference_no',
        'booking_date',
        'booking_from',
        'booking_upto',
        'extended_for',
        'total_time_spend',
        'single_day',
        'multiple_day',
        'booking_from_date',
        'Booking_upto_date',
        'total_amount',
        'discount',
        'grand_total',
        'user_profile_id',
        'space_profile_id',
        'created',
        'modified',
        'checkin_checkout_id',
        'discount_id'
    ];

    protected $guarded = [];

        
}