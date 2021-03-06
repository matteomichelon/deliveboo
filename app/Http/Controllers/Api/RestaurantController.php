<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;


class RestaurantController extends Controller
{
    // Metodo per accedere a tutti i ristoranti
    public function index() {
        $restaurants = User::all();
        
        $result = [];

        foreach($restaurants as $restaurant) {

            // Se il ristorante ha prodotti, mostro l'immagine del primo prodotto
            if(count($restaurant->products)) {
                $first_product = $restaurant->products->first();
                $cover = $first_product->cover;
                $path_load_image = $first_product->path_load_image;
            } else {
                // Se non ha prodotti, mostro immagine di default
                $cover = 'img/defaultproduct.jpg';                
            }            

            $result[] = [
                'id' => $restaurant->id,
                'name' => $restaurant->restaurant_name,
                'slug' => $restaurant->slug,
                'address' => $restaurant->restaurant_address,
                'email' => $restaurant->email,
                'cover' => $cover,
                'path_load_image' => isset($path_load_image) ? $path_load_image : null
            ]; 
        }
        
        $response = [
            'restaurants' => $result,
            'success' => true
        ];

        return response()->json($response);
    }

    // Metodo per accedere ai piatti di un singolo ristorante
    public function show($id) {
        $restaurant = User::findOrFail($id);


        $products = $restaurant->products;

        $result = [];
        
        foreach($products as $product) {
            $result[] = [
                'name' => $product->name,
                'price' => $product->price,
                'description' => $product->description,
                'cover' => $product->cover
            ];
        }

        $response = [
            'restaurant_id' => $id,
            'products' => $result,
            'success' => true
        ];

        return response()->json($response);
    }

    
}
