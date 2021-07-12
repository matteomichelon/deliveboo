<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'sku',
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
