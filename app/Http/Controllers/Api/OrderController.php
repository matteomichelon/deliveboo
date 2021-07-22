<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Order;

class OrderController extends Controller
{
    // Metodo per accedere a gli ordini
    public function index() {
        $orders = Order::all();
        
        $result = [];

        foreach($orders as $order) {

            $result[] = [
                'id' => $order->id,
                'code' => $order->code,
                'price' => $order->price,
                'date' => $order->date,
                'address' => $order->address,
                'name' => $order->name,
                'surname' => $order->surname,
                'email' => $order->email,
                'notes' => $order->notes,
                'telephone_number' => $order->telephone_number
            ]; 
        }
        
        $response = [
            'orders' => $result,
            'success' => true
        ];

        return response()->json($response);
    }
}
