<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;

class InvoiceController extends Controller
{
    function download()
    {
        $customer = new Buyer([
            'name'          => 'D3VSOFT',
            'custom_fields' => [
                'email' => 'admin@d3vsoft.com',
            ],
        ]);

        $item = (new InvoiceItem())->title('D3V1')->pricePerUnit(5);

        $invoice = Invoice::make()
            ->buyer($customer)
            ->discountByPercent(10)
            ->taxRate(0)
            ->shipping(1)
            ->addItem($item);

        return $invoice->download();
    }
}
