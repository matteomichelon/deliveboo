<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'code',
        'price',
        'status',
        'date',
        'address',
        'name',
        'surname',
        'email',
        'notes',
        'telephone_number'
    ];

    
}
