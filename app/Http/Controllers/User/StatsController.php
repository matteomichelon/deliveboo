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

        /* $month_array = [
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
        ]; */

        $month_array = [];

        $month_order_array = [];

        foreach ($array as $value) {
            $date = $value->date;
            $year_date = '';
            $month_date = '';
            
            if ('2021' == date('Y', strtotime($date))) {
                $month_date = date('F', strtotime($date));
                array_push($month_array, $month_date);
            }
        }
                
        /* Array suddiviso per anni */
        foreach ($array as $value) {
            $date = $value->date;
            $year_date = '';
            
            if ($date) {
                $year_date = date('Y', strtotime($date));
                array_push($year_array, $year_date);
            }
        }

        usort($year_array, fn ($a, $b) => strtotime($a) - strtotime($b));

        /* Funzioni riferite ad anno */
        $year_unique = array_count_values($year_array);

        $year_order_array = array_values($year_unique);

        $year_array = array_unique($year_array);

        $year_array = array_values($year_array);

        /* Funzioni riferite ai mesi del 2021 */
        $month_unique = array_count_values($month_array);

        $month_order_array = array_values($month_unique);

        $month_array = array_unique($month_array);

        $month_array = array_values($month_array);

        /* Conversione in json_encode */
        $year_array = json_encode($year_array, JSON_NUMERIC_CHECK);
        $year_order_array = json_encode($year_order_array, JSON_NUMERIC_CHECK);
        $month_array = json_encode($month_array, JSON_NUMERIC_CHECK);
        $month_order_array = json_encode($month_order_array, JSON_NUMERIC_CHECK);
       
        /* Data */
        $data = [
            'year' => $year_array,
            'year_order' => $year_order_array,
            'month' => $month_array,
            'month_order' => $month_order_array
        ];

        return view('admin.stats', $data);
    }
}
