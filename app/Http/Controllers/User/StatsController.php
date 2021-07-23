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
        date_default_timezone_set('UTC');
        $id = Auth::user()->id;

        /* Join Sql per gli ricavare Utenti/Ordini */
        $order_schema = DB::table('order_product')
                    ->join('products', 'product_id', '=', 'products.id')
                    ->join('orders', 'order_id', '=', 'orders.id')
                    ->join('users', 'user_id', '=', 'users.id')
                    ->get();


        $array = collect($order_schema)->where('id', $id)->all();

        /* foreach ($array as $value) {
            dump($value->date);
        } */
                
        /* Array suddiviso per anni e mesi */
        $data_array = [];

        foreach ($array as $value) {
            $date = $value->date;
            $year_date = '';
            $month_date = '';
            $id_order =  $value->order_id;
            
            
            if ($date) {
                $year_date = date('Y', strtotime($date));
                $month_date = date('F', strtotime($date));

                array_push($data_array,$year_date,$month_date);
            }
        }

        $order_array = array_count_values($data_array);
       /*  dd($order_array);*/
       
        /* Data */
        $data = [
            'orders' => $order_array,
        ];

        return view('admin.stats', compact('data'));
    }
}
