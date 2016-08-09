<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MailEvent
 */
class MailEvent extends Model
{
    protected $table = 'mail_events';

    public $timestamps = false;

    protected $fillable = [
        'to_mail_group',
        'cc_mail_group',
        'template_name',
        'layout_name',
        'content',
        'subject',
        'event_id'
    ];

    protected $guarded = [];

        
}