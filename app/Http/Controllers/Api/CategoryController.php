<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    
    // Metodo per accedere a tutte le categorie
    public function index() {

        $categories = Category::all();

        $result = [];
        foreach($categories as $category) {
            $result[] = [
                'id' => $category->id,
                'name' => $category->category,
                'cover' => $category->cover
            ];
        }

        $response = [
            'categories' => $result,
            'success' => true
        ];

        return response()->json($response);
    }

    // Metodo per accedere ai ristoranti per ogni categoria
    public function show($id) {
        $category = Category::findOrFail($id);

        $restaurants = $category->users;                 

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
            
            // $products = $restaurant->products;
            // dump($restaurant->restaurant_name);

            // Per ricavare le categorie per ogni ristorante.
            $categories = [];
            foreach($restaurant->categories as $category) {                 
                $categories[] = [
                    'id' => $category->id,
                    'name' => $category->category
                ];
            }

            $result[] = [
                'id' => $restaurant->id,
                'name' => $restaurant->restaurant_name,
                'slug' => $restaurant->slug,
                'address' => $restaurant->restaurant_address,
                'email' => $restaurant->email,
                'categories' => $categories,
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
       
}
