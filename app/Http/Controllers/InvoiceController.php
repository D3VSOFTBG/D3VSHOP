<?php

namespace App\Http\Controllers;

use App\Currency;
use App\Order;
use App\Ordered_Product;
use Illuminate\Http\Request;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;

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

        $ordered_products = Ordered_Product::where('id', $id)->get();

        // $items = array();

        // foreach($ordered_products as $op)
        // {
        //     array_push($items, (new InvoiceItem())->title($op->name)->pricePerUnit(71.96)->quantity(2));
        // }

        (new InvoiceItem())->title($op->name)->pricePerUnit(71.96)->quantity(2);

        $invoice = Invoice::make("Invoice $id")
            //->series('BIG')
            //->sequence(667)
            //->serialNumberFormat('{SEQUENCE}/{SERIES}')
            ->currencySymbol($currency->symbol)
            ->currencyCode($currency->symbol)
            ->buyer($customer)
            ->discountByPercent(0)
            ->taxRate(0)
            ->shipping(1)
            ->addItems($items)
            ->logo(public_path('vendor/invoices/sample-logo.png'))
            ->filename('invoice_' . $id);

        return $invoice->download();
    }
}
