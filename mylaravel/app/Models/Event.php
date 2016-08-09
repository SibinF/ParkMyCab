<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 */
class Event extends Model
{
    protected $table = 'events';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'function_call'
    ];

    protected $guarded = [];

        
}