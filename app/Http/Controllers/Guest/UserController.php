<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function show($slug){
        $user =  User::where('slug', '=', $slug)->first();

        if(!$user) {
            abort('404');
        }

        // Only display products that are visible
        $restaurant_products = $user->products->where('visibility', '=', 1);       

        $data = [
            'restaurant_products' => $restaurant_products,
            'restaurant' => $user
        ];     

        return view('guest.show', $data);
    }
}
