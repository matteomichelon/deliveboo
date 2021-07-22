<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\User;

class StatsController extends Controller
{

    public function index()
    {   
        $user = User::findOrFail($id);

        /* Join Sql per gli ricavare Utenti/Ordini */
        $order_schema = DB::table('order_product')
                    ->join('products', 'product_id', '=', 'products.id')
                    ->join('orders', 'order_id', '=', 'orders.id')
                    ->join('users', 'user_id', '=', 'users.id')
                    ->get();


        $array = collect($order_schema)->where('id', $id)->all();

        $data = [
        'user' => $user,
        'orders' => $array
        ];

       return view('admin.stats', compact('data'));
    }

}
