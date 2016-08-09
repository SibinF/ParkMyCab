<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserVarification
 */
class UserVarification extends Model
{
    protected $table = 'user_varifications';

    public $timestamps = true;

    protected $fillable = [
        'licence_no',
        'issued_date',
        'expiration_date',
        'is_verified',
        'verified_by',
        'licence_image',
        'created',
        'modified'
    ];

    protected $guarded = [];

        
}