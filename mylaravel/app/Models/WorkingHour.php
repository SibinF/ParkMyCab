<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WorkingHour
 */
class WorkingHour extends Model
{
    protected $table = 'working_hours';

    public $timestamps = false;

    protected $fillable = [
        'from',
        'upto'
    ];

    protected $guarded = [];

        
}