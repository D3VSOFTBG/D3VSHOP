<?php

namespace App\Http\Controllers;

use App\Currency;
use App\Order;
use App\Ordered_Product;
use Illuminate\Http\Request;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use Illuminate\Support\Facades\Log;

class InvoiceController extends Controller
{
    function download($id)
    {
        $order = Order::where('id', $id)->first();
        $currency = Currency::where('id', $order->currency_id)->first();

        $customer = new Buyer([
            'name'          => $order->customer,
            'custom_fields' => [
                'email' => $order->email,
            ],
        ]);

        $ordered_products = Ordered_Product::where('order_id', $id)->get();

        //Log::info($order);

        $items = array();

        foreach($ordered_products as $op)
        {
            array_push($items, (new InvoiceItem())->title($op->name)->pricePerUnit($op->price)->quantity($op->quantity)->discountByPercent($op->discount));
        }

        // $items = [
        //     (new InvoiceItem())->title("$ordered_products")->pricePerUnit(71.96)->quantity(2),
        // ];

        $invoice = Invoice::make("Invoice $id")
            ->series($order->series)
            ->sequence($order->sku)
            //->serialNumberFormat('{SEQUENCE}/{SERIES}')
            ->currencySymbol($currency->symbol)
            ->currencyCode($currency->symbol)
            ->buyer($customer)
            ->taxRate($order->tax_rate)
            ->shipping($order->shipping_price)
            ->addItems($items)
            ->logo(public_path(env('LOGO')))
            ->filename('invoice_' . $id);

        return $invoice->download();
    }
}
