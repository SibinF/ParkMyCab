<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AccessMethod
 */
class AccessMethod extends Model
{
    protected $table = 'access_methods';

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    protected $guarded = [];

        
}