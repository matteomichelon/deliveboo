<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\User;


class OrderController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;

        /* Join Sql per gli ricavare Utenti/Ordini */
        $order_schema = DB::table('order_product')
                    ->join('products', 'product_id', '=', 'products.id')                    
                    ->join('users', 'user_id', '=', 'users.id')
                    ->join('orders', 'order_id', '=', 'orders.id')
                    ->get();


        $orders = collect($order_schema)->where('id', $id)->all();
      

        $data =  [
            'orders' => $orders
        ];

        return view('admin.orders', $data);

    }
}
