<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StatsController extends Controller
{
    public function joinTables()
    {
        /* Join Sql per gli ricavare Utenti/Ordini */
        $order_schema = DB::table('order_product')
                    ->join('products', 'product_id', '=', 'products.id')
                    ->join('orders', 'order_id', '=', 'orders.id')
                    ->join('users', 'user_id', '=', 'users.id')
                    ->get();
                    dd($order_schema);
    }

    public function orders($id)
    {   
       $user = Auth::user();
       
       $data = [
        'user' => $user
       ];

        return view('admin.stats', $data);
    }

}
