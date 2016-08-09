<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SmsEvent
 */
class SmsEvent extends Model
{
    protected $table = 'sms_events';

    public $timestamps = false;

    protected $fillable = [
        'to_number_list',
        'content',
        'event_id',
        'subject'
    ];

    protected $guarded = [];

        
}