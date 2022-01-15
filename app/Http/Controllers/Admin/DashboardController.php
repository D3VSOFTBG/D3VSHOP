<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard()
    {
        $orders = Order::all('id');

        $data = [
            'orders' => $orders,
        ];

        return view('admin.dashboard', $data);
    }
}
