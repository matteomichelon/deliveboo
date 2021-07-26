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
        
        $user = Auth::user();
        
        $orders = $user->orders;
 
        $data =  [
            'orders' => $orders
        ];

        return view('admin.orders', $data);
    }

}
