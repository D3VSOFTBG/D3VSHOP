<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;

class InvoiceController extends Controller
{
    function download($id)
    {
        $order = Order::where('id', $id)->first();
        $customer = new Buyer([
            'name'          => $order->customer,
            'custom_fields' => [
                'email' => $order->email,
            ],
        ]);

        $item = (new InvoiceItem())->title('D3V1')->pricePerUnit(5);

        $invoice = Invoice::make("Invoice $id")
            //->series('BIG')
            //->sequence(667)
            //->serialNumberFormat('{SEQUENCE}/{SERIES}')
            ->buyer($customer)
            ->discountByPercent(0)
            ->taxRate(0)
            ->shipping(1)
            ->addItem($item)
            ->logo(public_path('vendor/invoices/sample-logo.png'))
            ->filename('invoice_' . $id);

        return $invoice->download();
    }
}
