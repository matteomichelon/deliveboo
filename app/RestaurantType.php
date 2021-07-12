<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestaurantType extends Model
{
    protected $table = 'restaurant_types';

    protected $fillable = [
        'restaurant_type'
    ];
    
}
