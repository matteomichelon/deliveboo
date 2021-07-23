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

        $year_array = [];


        $year_order_array = [];
        $month_array = [
            'gennaio',
            'febbraio',
            'marzo',
            'aprile',
            'maggio',
            'giugno',
            'luglio',
            'agosto',
            'settembre',
            'ottobre',
            'novembre',
            'dicembre'
        ];
        $month_order_array = [];

        /* foreach ($array as $value) {
            dump($value->date);
        } */
                
        /* Array suddiviso per anni e mesi */
        foreach ($array as $value) {
            $date = $value->date;
            $year_date = '';
            $month_date = '';
            $id_order =  $value->order_id;            
            
            if ($date) {
                $year_date = date('Y', strtotime($date));
                //$month_date = date('F', strtotime($date));
                array_push($year_array,$year_date);
                //array_push($data_array, $year_date, $month_date);
            }
        }

        usort($year_array, fn($a, $b) => strtotime($a) - strtotime($b));

        /* TODO: contare ordini per anno */
        $year_unique = array_count_values($year_array);

        $year_order_array = array_values($year_unique);

        dump($year_order_array);

        $year_array = array_unique($year_array);
       

        dd($year_array);

        

        
        //dd($order_array);
       
        /* Data */
        $data = [
            'orders' => $order_array,
        ];

        return view('admin.stats', compact('data'));
    }

    public function sortByYear($array){

        dump($array);

    }
}
