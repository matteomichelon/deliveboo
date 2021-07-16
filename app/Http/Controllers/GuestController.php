<?php

namespace App\Http\Controllers;

use App\Order;
use Braintree\Gateway;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /* Function generate ClientToken */
    public function cart()
    {
        $gateway = new Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
        ]);
        
        $clientToken  = $gateway->clientToken()->generate();

        return view('cart', compact('clientToken'));
    }

    /* Function Checkout */
    public function checkout(Request $request)
    {
        $gateway = new Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
        ]);

        $order = Order::where('id', 1)->first();
        dump($order);

        $guest_email = $request->email;
        $nonce = $request->payment_method_nonce;

        $result = $gateway->transaction()->sale([
                            'amount' => '10.00',
                            'paymentMethodNonce' => $nonce,
                            'options' => [
                                       'submitForSettlement' => true
                                         ]
              ]);
        dd($result);
        if ($result->success) {
            return view('success');
        } else {
            return back()->withErrors('Qualcosa è andato storto');
        }

        //return response()->json($status);
    }
}
