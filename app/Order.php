<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'address',
        'name',
        'surname',
        'email',
        'notes',
        'telephone_number'
    ];

    // Tabella ponte con la aggiunta di una terza colonna pivot 
    // che rappresenta la quantità di prodotti per ogni ordine.
    public function products() {
        return $this->belongsToMany('App\Product')->withPivot('quantity');
    }
}
