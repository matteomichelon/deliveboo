<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Charts;
use App\Order;

/* use Carbon\Carbon; */

class ChartJsController extends Controller
{

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        /* Join Sql per gli ricavare Utenti/Ordini */
        $order_schema = DB::table('order_product')
                    ->join('products', 'product_id', '=', 'products.id')
                    ->join('orders', 'order_id', '=', 'orders.id')
                    ->join('users', 'user_id', '=', 'users.id')
                    ->get();


        /* Funzioni per visualizzare ordini gestiti per anno */
        /* Anni su cui visualizzare le statistiche */
        $year = ['2015','2016','2017','2018','2019','2020','2021'];

        /* Ordini per anno */
        $order = [];
        foreach ($year as $value) {
            $order[] = Order::where(DB::raw("DATE_FORMAT(date, '%Y')"), $value)
                                ->count();
        }

        /* Conversione in json_encode */
        $year = json_encode($year, JSON_NUMERIC_CHECK);
        $order = json_encode($order, JSON_NUMERIC_CHECK);

        /* Data */
        $data = [
            'year' => $year,
            'order' => $order
        ];
        
        return view('admin.chart', $data);

    }

   
    /* public function index()
    {
        $year = ['2015','2016','2017','2018','2019','2020'];

        $user = [];
        foreach ($year as $key => $value) {
            $user[] = User::where(\DB::raw("DATE_FORMAT(created_at, '%Y')"),$value)->count();
        }

    	return view('chartjs')->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK));
    } */
}
