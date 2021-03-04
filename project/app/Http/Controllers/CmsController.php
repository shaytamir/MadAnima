<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class CmsController extends MainController
{
    public function dashboard(){

        return view('cms.dashboard',self::$data);
    }
    public function orders(){

        self::$data['orders'] = Order::getOrders();

        // dd(self::$data);

        return view('cms.orders.orders',self::$data);
    }


}
