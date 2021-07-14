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
            $result[] = [
                'restaurant_id' => $restaurant->id,
                'restaurant_name' => $restaurant->restaurant_name,
                'restaurant_address' => $restaurant->restaurant_address,
                'restaurant_email' => $restaurant->email
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
            'products' => $result,
            'success' => true
        ];

        return response()->json($response);
    }
}
