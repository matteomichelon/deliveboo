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

        $restaurant_products = $user->products;

        $data = [
            'restaurant_products' => $restaurant_products,
            'restaurant' => $user
        ];

        return view('guest.show', $data);
    }
}
