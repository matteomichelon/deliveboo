<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Braintree\Gateway;

class CartController extends Controller
{
    public function cart()
    {
        $gateway = new Gateway([
              'environment' => config('services.braintree.environment'),
              'merchantId' => config('services.braintree.merchantId'),
              'publicKey' => config('services.braintree.publicKey'),
              'privateKey' => config('services.braintree.privateKey')
          ]);

          $token = $gateway->clientToken()->generate();
          
          return view('guest.cart', compact('token'));          
    }
}
