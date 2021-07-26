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
                    ->select('users.id', 'orders.code', 'orders.name', 'orders.surname', 'orders.date', 'orders.price')
                    ->join('products', 'product_id', '=', 'products.id')
                    ->join('orders', 'order_id', '=', 'orders.id')
                    ->join('users', 'user_id', '=', 'users.id')
                    ->orderByDesc('date')
                    ->get();

        $orders = collect($order_schema)->where('id', $id)->all();


        /*   $array_order=[];

          foreach ($orders as $order) { */
        /* if (property_exists($order, 'code')) {
            array_push($array_order, $order);
            dump($order->code);
        } */
        /*    if (in_array($order->code, $array_order)) {

               array_push( $order);
           }
        }
*/
 
        $data =  [
            'orders' => $orders
        ];

        return view('admin.orders', $data);
    }

}
