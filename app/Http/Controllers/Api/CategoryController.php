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

            // Per ricavare le categorie per ogni ristorante
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
                'categories' => $categories
            ];            
        }

        $response = [
            'restaurants' => $result,
            'success' => true
        ];

        return response()->json($response);
    }
       
}
