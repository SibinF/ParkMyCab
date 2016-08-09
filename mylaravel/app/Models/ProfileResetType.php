<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProfileResetType
 */
class ProfileResetType extends Model
{
    protected $table = 'profile_reset_types';

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    protected $guarded = [];

        
}