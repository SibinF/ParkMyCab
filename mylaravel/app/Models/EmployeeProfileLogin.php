<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeProfileLogin
 */
class EmployeeProfileLogin extends Model
{
    protected $table = 'employee_profile_logins';

    public $timestamps = false;

    protected $fillable = [
        'employee_profile_id',
        'login_id'
    ];

    protected $guarded = [];

        
}