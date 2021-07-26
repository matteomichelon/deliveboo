<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Order;

class StatsController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $orders = $user->orders;

        

        $year_array = [];

        $year_order_array = [];

        $month_array = [];

        $month_order_array = [];

        /* Array Mesi */
        foreach ($orders as $value) {
            $date = $value->date;
            $year_date = '';
            $month_date = '';
            
            if ('2021' == date('Y', strtotime($date))) {
                $month_date = date('n', strtotime($date));
                array_push($month_array, $month_date);
                $quantity = $orders->where();              
            }
            if ($date) {
                $year_date = date('Y', strtotime($date));
                array_push($year_array, $year_date);
            }
        }        

        /* Mesi in cui sono presenti ordini */
        $zero_array = [];

        for ($i=1; $i < 13; $i++) {
            $zero_array[] = 0;
        }

        $array_month=[];
        $array_month_order=[];

        foreach ($zero_array as $key=>$value) {

            /* Calcolo mesi in cui sono presenti ordini */
            if (in_array($key+1, $month_array)) {
                $array_month[] = $key + 1;

            } else {
                $array_month[] = 0;
            }

            /* Calcolo quantità per mese */

        };

        //dd($array_month);



        /* Funzione per ordinare in ordine crescente anni e mesi */
        usort($year_array, fn ($a, $b) => strtotime($a) - strtotime($b));

        /* Funzioni riferite ad anno */
        $year_unique = array_count_values($year_array);

        $year_order_array = array_values($year_unique);

        $year_array = array_unique($year_array);

        $year_array = array_values($year_array);

        /* Funzioni riferite ai mesi del 2021 */
        /* $month_unique = array_count_values($month_array);

        $month_order_array = array_values($month_unique); */

        //dd($month_order_array);

      /*   $month_array = array_unique($month_array);

        usort($month_array, fn ($a, $b) => strtotime($a) - strtotime($b));

        $month_array = array_values($month_array); */

        

        /* Conversione in json_encode */
        $year_array = json_encode($year_array, JSON_NUMERIC_CHECK);
        $year_order_array = json_encode($year_order_array, JSON_NUMERIC_CHECK);
        //$month_array = json_encode($month_array, JSON_NUMERIC_CHECK);
        $array_month = json_encode($array_month, JSON_NUMERIC_CHECK);

        //dd($array_month);
       
        /* Data */
        $data = [
            'year' => $year_array,
            'year_order' => $year_order_array,
            //'month' => $month_array,
            'month_order' => $array_month
        ];

        //dd($data);

        return view('admin.stats', $data);
    }
}
