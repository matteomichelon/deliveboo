<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Braintree\Gateway;
use App\Order;
use App\Product;
use Carbon\Carbon;

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

        $form_data= $request->all();

        /* Create new order */
        $order = new Order;
        $order->fill($form_data);

        $order->code = $form_data['_token'];
        $order->price = $this->calculatePrice($form_data['quantity']);
        $order->date = Carbon::now()->setTimezone('Europe/Rome')->toDateTimeString();    
        $order->save();            

        $nonce = $request->payment_method_nonce;

        /* Creating a Transaction */
        $result = $gateway->transaction()->sale([
                            'amount' => $order->price,
                            'paymentMethodNonce' => $nonce,
                            'options' => [
                                       'submitForSettlement' => true
                                         ]
              ]);
        /* Message Result */
        if ($result->success) {
            // Se va a buon fine, salviamo l'ordine con status true            
            $order->status = 1;
            $order->update();

            return view('guest.success');
        } else {
            // return redirect()->back()->with('message', 'Il pagamento non è andato a buon fine, per favore riprovare');
            return $this->getProductsQuantities($request)->with('message', 'Il pagamento non è andato a buon fine, per favore riprovare');
        }
    }


    protected function calculatePrice($product_quantities) {
        $total = 0;
        foreach($product_quantities as $product_id=>$quantity) {
            $unit_price = Product::findOrFail($product_id)->price;
            $total_price = $unit_price * $quantity;
            $total += $total_price;
        } 

        return $total;
    }
}
