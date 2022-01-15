<?php

namespace App\Http\Controllers\Admin;

use App\Currency;
use App\Http\Controllers\Controller;
use App\OrderedProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    function orders()
    {
        $orders = DB::table('orders')->select('orders.*', DB::raw('(SELECT IF(coalesce(sum(ordered_products.price), "") = "", "0", sum(ordered_products.price)) FROM ordered_products ordered_products WHERE ordered_products.order_id = orders.id) as total'))->paginate(env('PAGINATION_ADMIN'));

        $order_ids = array();

        foreach($orders as $order)
        {
            array_push($order_ids, $order->id);
        }

        $ordered_products = OrderedProduct::whereIn('order_id', $order_ids)->get();
        $currencies = Currency::all();

        $data = [
            'orders' => $orders,
            'ordered_products' => $ordered_products,
            'currencies' => $currencies,
        ];

        return view('admin.shop.orders', $data);
    }
}
