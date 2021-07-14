<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    
    public function index() {

        $categories = Category::all();

        $result = [];
        foreach($categories as $category) {
            $result[] = [
                'id' => $category->id,
                'category' => $category->category
            ];
        }

        $response = [
            'categories' => $result,
            'success' => true
        ];

        return response()->json($response);
    }

   
}
