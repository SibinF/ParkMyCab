<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WorkingDay
 */
class WorkingDay extends Model
{
    protected $table = 'working_days';

    public $timestamps = false;

    protected $fillable = [
        'sunday',
        'monday',
        'tuesday',
        'wednesday',
        'thursday',
        'friday',
        'saturday'
    ];

    protected $guarded = [];

        
}