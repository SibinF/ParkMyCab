<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GcmEvent
 */
class GcmEvent extends Model
{
    protected $table = 'gcm_events';

    public $timestamps = true;

    protected $fillable = [
        'subject',
        'content',
        'image',
        'url',
        'event_id',
        'created',
        'modified'
    ];

    protected $guarded = [];

        
}