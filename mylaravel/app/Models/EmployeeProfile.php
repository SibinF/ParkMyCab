<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeProfile
 */
class EmployeeProfile extends Model
{
    protected $table = 'employee_profiles';

    public $timestamps = true;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'mobile_number',
        'date_of_join',
        'job_description',
        'created',
        'modified'
    ];

    protected $guarded = [];

        
}