<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SpaceProfile
 */
class SpaceProfile extends Model
{
    protected $table = 'space_profiles';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'space_feature_id',
        'space_type_id',
        'address_id',
        'qr_code_id',
        'working_hour_id',
        'working_day_id',
        'review_id',
        'image_one',
        'image_two',
        'image_three',
        'image_four',
        'image_five',
        'created',
        'modified'
    ];

    protected $guarded = [];

        
}