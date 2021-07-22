<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\User;

class StatsController extends Controller
{

    public function index($id)
    {   

        $user = User::findOrFail($id);

        /* Join Sql per gli ricavare Utenti/Ordini */
        $order_schema = DB::table('order_product')
                    ->join('products', 'product_id', '=', 'products.id')
                    ->join('orders', 'order_id', '=', 'orders.id')
                    ->join('users', 'user_id', '=', 'users.id')
                    ->get();


        $orders_array = collect($order_schema)->where('id', $id)->all();  


        $orders = [];
        foreach($orders_array as $order) {
            $orders[] = [
                'order_id' => $order->id,
                'price' => $order->price,
                'date' => $order->date
            ];
        }
        
        $response = [
            'user' => $user,
            'orders' => $orders,
            'success' => true
        ];

        return response()->json($response);
    }

}