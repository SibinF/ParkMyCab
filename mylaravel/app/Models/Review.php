<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Review
 */
class Review extends Model
{
    protected $table = 'reviews';

    public $timestamps = false;

    protected $fillable = [
        'subject',
        'description',
        'rating'
    ];

    protected $guarded = [];

        
}