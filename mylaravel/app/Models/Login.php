<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Authenticatable
{
    protected $table = 'logins';

    public $timestamps = true;

    protected $fillable = [
        'email',
        
        'is_active',
        'last_login',
       
        'created_at',
        'updated_at', 'password', 'remember_token'
    ];

  

        
}