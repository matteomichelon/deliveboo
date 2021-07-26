<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Braintree\Gateway;
use Illuminate\Support\Facades\Mail;
use App\Order;
use App\Product;
use Carbon\Carbon;
use App\Mail\NewOrderAdminNotification;
use App\Mail\NewOrderGuestNotification;

class PaymentController extends Controller
{
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

        $form_data = $request->input('formData');
        $restaurantId = $request->input('restaurantId');
        $productIds = $request->input('productIds');

        /* Create new order */
        $order = new Order;
        $order->fill($form_data);
        $order->code = $form_data['_token'];
        
        $order->price = $this->calculatePrice($productIds);
        $order->date = Carbon::now()->setTimezone('Europe/Rome')->toDateTimeString();
        
        $order->save();

        // Sync dei prodotti e delle quantità
        $products_array = [];
        foreach ($productIds as $product_id=>$quantity) {
            $products_array[$product_id] = [
                'quantity' => $quantity
            ];
        }
        $order->products()->sync($products_array);

        return $order->id;
    }

    public function payment(Request $request)
    {
        $gateway = new Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
        ]);

        $orderId = $request->input('orderId');
        $orderNonce = $request->input('nonce');
        $order = Order::findOrFail($orderId);

        /* Creating a Transaction */
        $result = $gateway->transaction()->sale([
            'amount' => $order->price,
            'paymentMethodNonce' => $orderNonce,
            'options' => [
                'submitForSettlement' => true
            ]
            ]);

        /* Message Result */
        if ($result->success) {
            $order->status = 1;

            $order->update();

            // --------------------|
            // Send new admin Mail.|
            // --------------------|
            Mail::to('test@email.com')->send(new NewOrderAdminNotification($order));

            // // --------------------|
            // // Send new guest Mail.|
            // // --------------------|
            Mail::to($order->email)->send(new NewOrderGuestNotification($order));
 
            // Se va a buon fine, salviamo l'ordine con status true
            return true;
        } else {
            return false;
        }
    }

    protected function calculatePrice($product_quantities)
    {
        $total = 0;
        foreach ($product_quantities as $product_id=>$quantity) {
            $unit_price = Product::findOrFail($product_id)->price;
            $total_price = $unit_price * $quantity;
            $total += $total_price;
        }

        return $total;
    }
}
