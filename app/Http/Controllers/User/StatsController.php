<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\User;

class StatsController extends Controller
{

    public function index($id)
    {   
        return view('admin.stats', ['id' => $id]);
    }

}
