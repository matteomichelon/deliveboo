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
        /* Generating Token */
        $gateway = new Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
        ]);

        /* TODO: create order */
        $order = Order::where('id', 1)->first();
        /* Variables */
        $guest_name = $request->name;
        $guest_surname = $request->surname;
        $guest_address = $request->address;
        $guest_telephone_number = $request->telephone_number;
        $guest_email = $request->email;
        $nonce = $request->payment_method_nonce;

        /* Creating a Transaction */
        $result = $gateway->transaction()->sale([
                            'amount' => '150',
                            'paymentMethodNonce' => $nonce,
                            'options' => [
                                       'submitForSettlement' => true
                                         ]
              ]);
        /* Message Result */
        if ($result->success) {
            return view('success');
        } else {
            return redirect()->back()->with('message', 'Il pagamento non è andato a buon fine, per favore riprovare');
        }
    }
}
