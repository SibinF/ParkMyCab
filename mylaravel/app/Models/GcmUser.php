<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GcmUser
 */
class GcmUser extends Model
{
    protected $table = 'gcm_users';

    public $timestamps = true;

    protected $fillable = [
        'gcm_register_id',
        'name',
        'email',
        'device_id',
        'created',
        'modified'
    ];

    protected $guarded = [];

        
}