<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Braintree\Gateway;
use App\Order;
use App\Product;

class PaymentController extends Controller
{

    public function getProductsQuantities(Request $request) {
        $form_data = $request->all();
        
        $product_quantities = $form_data['quantity'];

        $products = [];
        foreach($product_quantities as $product_id=>$quantity) {
            if($quantity) {
                $product = Product::findOrFail($product_id);

                $products[] = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => $quantity
                ];
            }
        }

        $data = [
            'products' => $products,
            'token' => $this->cart()
        ];

        return view('guest.cart', $data);
    }

    public function cart()
      {

          $gateway = new Gateway([
              'environment' => config('services.braintree.environment'),
              'merchantId' => config('services.braintree.merchantId'),
              'publicKey' => config('services.braintree.publicKey'),
              'privateKey' => config('services.braintree.privateKey')
          ]);

          $token = $gateway->clientToken()->generate();

          //return view('guest.cart', compact('token'));
          return $token;

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
            return view('guest.success');
        } else {
            return redirect()->back()->with('message', 'Il pagamento non è andato a buon fine, per favore riprovare');
        }
    }
}
