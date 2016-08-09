<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tax
 */
class Tax extends Model
{
    protected $table = 'taxes';

    public $timestamps = true;

    protected $fillable = [
        'tax_value',
        'created',
        'modified'
    ];

    protected $guarded = [];

        
}