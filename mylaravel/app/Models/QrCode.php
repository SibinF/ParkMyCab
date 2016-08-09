<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QrCode
 */
class QrCode extends Model
{
    protected $table = 'qr_codes';

    public $timestamps = false;

    protected $fillable = [
        'code_content',
        'code_url',
        'location_id',
        'file_name'
    ];

    protected $guarded = [];

        
}