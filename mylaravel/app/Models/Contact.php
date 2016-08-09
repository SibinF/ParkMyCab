<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 */
class Contact extends Model
{
    protected $table = 'contacts';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'primary_number',
        'secondary_number',
        'office_number',
        'land_line',
        'email',
        'designation',
        'created',
        'modified'
    ];

    protected $guarded = [];

        
}