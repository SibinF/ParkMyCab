<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MailGroup
 */
class MailGroup extends Model
{
    protected $table = 'mail_groups';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'email'
    ];

    protected $guarded = [];

        
}