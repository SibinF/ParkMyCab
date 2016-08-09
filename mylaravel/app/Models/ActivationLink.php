<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ActivationLink
 */
class ActivationLink extends Model
{
    protected $table = 'activation_links';

    public $timestamps = true;

    protected $fillable = [
        'email',
        'key',
        'created_date',
        'valid_upto',
        'is_verified',
        'user_profile_id',
        'login_id',
        'profile_reset_type_id',
        'created',
        'modified'
    ];

    protected $guarded = [];

        
}