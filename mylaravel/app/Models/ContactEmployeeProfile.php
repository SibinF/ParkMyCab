<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactEmployeeProfile
 */
class ContactEmployeeProfile extends Model
{
    protected $table = 'contact_employee_profiles';

    public $timestamps = false;

    protected $fillable = [
        'contact_id',
        'employee_profile_id'
    ];

    protected $guarded = [];

        
}