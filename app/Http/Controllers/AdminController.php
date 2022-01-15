<?php

namespace App\Http\Controllers;

use App\Carrier;
use App\Currency;
use App\Info;
use App\Product;
use App\Setting;
use App\Stripe;
use App\Role;
use App\User;
use App\Order;
use App\OrderedProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{



    function carriers()
    {
        $carriers = Carrier::orderBy('id', 'DESC')->paginate(env('PAGINATION_ADMIN'));

        $data = [
            'carriers' => $carriers,
        ];

        return view('admin.shop.carriers', $data);
    }
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
    function payments_stripe_get()
    {
        $data = [];

        return view('admin.payments.stripe', $data);
    }
    function payments_stripe_post(Request $request)
    {
        $request->validate([
            'stripe_environment' => 'required',
            'stripe_test_webhook_secret' => 'required',
            'stripe_test_publishable_key' => 'required',
            'stripe_test_secret_key' => 'required',
            'stripe_live_webhook_secret' => 'required',
            'stripe_live_publishable_key' => 'required',
            'stripe_live_secret_key' => 'required',
        ]);

        if($request->stripe_environment != env('STRIPE_ENVIRONMENT'))
        {
            env_update('STRIPE_ENVIRONMENT', $request->stripe_environment);
        }
        if($request->stripe_test_webhook_secret != env('STRIPE_TEST_WEBHOOK_SECRET'))
        {
            env_update('STRIPE_TEST_WEBHOOK_SECRET', $request->stripe_test_webhook_secret);
        }
        if($request->stripe_test_publishable_key != env('STRIPE_TEST_PUBLISHABLE_KEY'))
        {
            env_update('STRIPE_TEST_PUBLISHABLE_KEY', $request->stripe_test_publishable_key);
        }
        if($request->stripe_test_secret_key != env('STRIPE_TEST_SECRET_KEY'))
        {
            env_update('STRIPE_TEST_SECRET_KEY', $request->stripe_test_secret_key);
        }
        if($request->stripe_live_webhook_secret != env('STRIPE_LIVE_WEBHOOK_SECRET'))
        {
            env_update('STRIPE_LIVE_WEBHOOK_SECRET', $request->stripe_live_webhook_secret);
        }
        if($request->stripe_live_publishable_key != env('STRIPE_LIVE_PUBLISHABLE_KEY'))
        {
            env_update('STRIPE_LIVE_PUBLISHABLE_KEY', $request->stripe_live_publishable_key);
        }
        if($request->stripe_live_secret_key != env('STRIPE_LIVE_SECRET_KEY'))
        {
            env_update('STRIPE_LIVE_SECRET_KEY', $request->stripe_live_secret_key);
        }

        Artisan::call('cache:clear');

        return back();
    }
    function product_create(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
            'name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'serial_number' => 'required',
            'sku' => 'required',
        ]);

        $product = new Product();
        $product->slug = uniqid() . '-' . strtolower(trim(preg_replace('/\s+/', '-', $request->name)));

        // image
        $new_image_name = md5(uniqid(rand(), true)) . '.' . $request->image->extension();
        $request->image->move(public_path('/storage/img/products/'), $new_image_name);
        $product->image = $new_image_name;

        $product->name = $request->name;
        $product->price = $request->price;

        if(isset($request->discount))
        {
            $request->validate([
                'discount' => 'integer|min:0|max:100',
            ]);
            $product->discount = $request->discount;
        }

        $product->quantity = $request->quantity;
        $product->serial_number = $request->serial_number;
        $product->sku = $request->sku;
        $product->brand = $request->brand;
        $product->save();

        return back();
    }
    function product_edit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
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
            $request->image->move(public_path('/storage/img/products/'), $new_image_name);
            $product->image = $new_image_name;
        }

        $product->name = $request->name;
        $product->price = $request->price;

        if(isset($request->discount))
        {
            $request->validate([
                'discount' => 'integer|min:0|max:100',
            ]);
            $product->discount = $request->discount;
        }

        $product->quantity = $request->quantity;
        $product->serial_number = $request->serial_number;
        $product->sku = $request->sku;
        $product->brand = $request->brand;
        $product->save();

        return back();
    }
    function product_delete(Request $request)
    {
        Product::findOrFail($request->id)->delete();
        return back();
    }
    function carrier_create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'logo' => 'required|image|max:2048',
            'description' => 'required',
            'status' => 'required|integer',
            'free_shipping' => 'required|integer',
        ]);

        $carrier = new Carrier();

        $carrier->name = $request->name;

        // logo
        $new_logo_name = md5(uniqid(rand(), true)) . '.' . $request->logo->extension();
        $request->logo->move(public_path('/storage/img/carriers/'), $new_logo_name);
        $carrier->logo = $new_logo_name;

        $carrier->description = $request->description;

        if($request->status == 1)
        {
            $carrier->status = $request->status;
        }
        else
        {
            $carrier->status = 0;
        }
        if($request->free_shipping == 1)
        {
            $carrier->free_shipping = $request->free_shipping;
        }
        else
        {
            $carrier->free_shipping = 0;
        }

        $carrier->save();

        return back();
    }
    function carrier_edit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required|integer',
            'free_shipping' => 'required|integer',
        ]);

        $carrier = Carrier::findOrFail($request->id);

        $carrier->name = $request->name;

        if(isset($request->logo))
        {
            $request->validate([
                'logo' => 'required|image|max:2048',
            ]);
            // logo
            $new_logo_name = md5(uniqid(rand(), true)) . '.' . $request->logo->extension();
            $request->logo->move(public_path('/storage/img/carriers/'), $new_logo_name);
            $carrier->logo = $new_logo_name;
        }

        $carrier->description = $request->description;

        if($request->status == 1)
        {
            $carrier->status = $request->status;
        }
        else
        {
            $carrier->status = 0;
        }
        if($request->free_shipping == 1)
        {
            $carrier->free_shipping = $request->free_shipping;
        }
        else
        {
            $carrier->free_shipping = 0;
        }

        $carrier->save();

        return back();
    }
    function carrier_delete(Request $request)
    {
        Carrier::findOrFail($request->id)->delete();
        return back();
    }
    function about_get()
    {
        $info = Info::where('id', 1)->pluck('text')->first();

        $data = [
            'info' => $info,
        ];

        return view('admin.info.about', $data);
    }
    function privacy_policy_get()
    {
        $info = Info::where('id', 2)->pluck('text')->first();

        $data = [
            'info' => $info,
        ];

        return view('admin.info.privacy-policy', $data);
    }
    function about_post(Request $request)
    {
        $info = Info::findOrFail(1);
        $info->text = $request->text;
        $info->save();

        Cache::flush();

        return back();
    }
    function privacy_policy_post(Request $request)
    {
        $info = Info::findOrFail(2);
        $info->text = $request->text;
        $info->save();

        Cache::flush();

        return back();
    }
}
