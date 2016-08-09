<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Aookie
 */
class Aookie extends Model
{
    protected $table = 'cookies';

    public $timestamps = true;

    protected $fillable = [
        'email',
        'created',
        'valid_till',
        'content',
        'user_profile_id'
    ];

    protected $guarded = [];

        
}