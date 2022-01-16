<?php

namespace App\Http\Controllers\Admin;

use App\Currency;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    function products()
    {
        $products = Product::orderBy('id', 'DESC')->paginate(setting('PAGINATION_ADMIN'));
        $currencies = Currency::all();
        $default_currency_code = Currency::where('id', (int) setting('DEFAULT_CURRENCY_ID'))->pluck('code')->first();

        $data = [
            'products' => $products,
            'currencies' => $currencies,
            'default_currency_code' => $default_currency_code,
        ];

        return view('admin.shop.products', $data);
    }
    function create(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
            'name' => 'required',
            'price' => 'required|numeric',
            'discount_by_percent' => 'required|integer|min:0|max:100',
            'quantity' => 'required|integer',
            'serial_number' => 'required',
            'sku' => 'required',
        ]);

        $product = new Product();
        $product->slug = uniqid() . '-' . strtolower(trim(preg_replace('/\s+/', '-', $request->name)));

        // image
        $new_image_name = md5(uniqid(rand(), true)) . '.' . $request->image->extension();
        $request->image->move(storage_path('/app/public/img/products/'), $new_image_name);
        $product->image = $new_image_name;

        $product->name = $request->name;
        $product->price = $request->price;
        $product->discount_by_percent = $request->discount_by_percent;
        $product->quantity = $request->quantity;
        $product->serial_number = $request->serial_number;
        $product->sku = $request->sku;
        $product->brand = $request->brand;
        $product->save();

        return back();
    }
    function edit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'discount_by_percent' => 'required|integer|min:0|max:100',
            'quantity' => 'required|integer',
            'serial_number' => 'required',
            'sku' => 'required',
        ]);

        $product = Product::findOrFail($request->id);

        if($product->name != $request->name)
        {
            $product->slug = uniqid() . '-' . strtolower(trim(preg_replace('/\s+/', '-', $request->name)));
        }

        if(isset($request->image))
        {
            $request->validate([
                'image' => 'required|image|max:2048',
            ]);
            // image
            $new_image_name = md5(uniqid(rand(), true)) . '.' . $request->image->extension();
            $request->image->move(storage_path('/app/public/img/products/'), $new_image_name);
            $product->image = $new_image_name;
        }

        $product->name = $request->name;
        $product->price = $request->price;
        $product->discount_by_percent = $request->discount_by_percent;
        $product->quantity = $request->quantity;
        $product->serial_number = $request->serial_number;
        $product->sku = $request->sku;
        $product->brand = $request->brand;
        $product->save();

        return back();
    }
    function delete(Request $request)
    {
        Product::findOrFail($request->id)->delete();
        return back();
    }
}
