<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Payment
 */
class Payment extends Model
{
    protected $table = 'payments';

    public $timestamps = true;

    protected $fillable = [
        'reference_no',
        'booking_id',
        'user_profile_id',
        'space_profile_id',
        'sub_total',
        'taxes_id',
        'grand_total',
        'payment_type_id',
        'payment_status_id',
        'created',
        'modified'
    ];

    protected $guarded = [];

        
}