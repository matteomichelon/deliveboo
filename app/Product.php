<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    // Trait for Soft Deleting Products without affecting orders
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'price',
        'visibility',
        'cover',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    // Tabella ponte con la aggiunta di una terza colonna pivot 
    // che rappresenta la quantità di prodotti per ogni ordine.
    public function orders() {
        return $this->belongsToMany('App\Order')->withPivot('quantity');
    }
}
