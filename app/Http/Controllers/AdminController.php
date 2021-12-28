<?php

namespace App\Http\Controllers;

use App\Carrier;
use App\Currency;
use App\Product;
use App\Setting;
use App\Stripe;
use App\Role;
use App\User;
use App\Order;
use App\Ordered_Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    function dashboard()
    {
        $orders = Order::all('id');

        $data = [
            'orders' => $orders,
        ];

        return view('admin.dashboard', $data);
    }
    function users()
    {
        $users = User::orderBy('id', 'DESC')->paginate(env('PAGINATION_ADMIN'));
        $roles = Role::all();

        $data = [
            'users' => $users,
            'roles' => $roles,
        ];

        return view('admin.other.users', $data);
    }
    function information()
    {
        return view('admin.other.information');
    }
    function products()
    {
        $products = Product::orderBy('id', 'DESC')->paginate(env('PAGINATION_ADMIN'));
        $currencies = Currency::all();
        $default_currency_code = Currency::where('id', (int) env('DEFAULT_CURRENCY_ID'))->pluck('code')->first();

        $data = [
            'products' => $products,
            'currencies' => $currencies,
            'default_currency_code' => $default_currency_code,
        ];

        return view('admin.shop.products', $data);
    }
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

        $ordered_products = Ordered_Product::whereIn('order_id', $order_ids)->get();
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
    function settings_get()
    {
        $currencies = Currency::all();

        $default_currency_code = Currency::where('id', (int) env('DEFAULT_CURRENCY_ID'))->pluck('code')->first();

        $data = [
            'currencies' => $currencies,
            'default_currency_code' => $default_currency_code,
        ];

        return view('admin.other.settings', $data);
    }
    function settings_post(Request $request)
    {
        // General
        $request->validate([
            'shop_name' => 'required',
            'app_url' => 'required',
            'title_seperator' => 'required',
            'theme_name' => 'required',
            'app_env' => 'required',
        ]);
        if($request->shop_name != env('SHOP_NAME'))
        {
            env_update('SHOP_NAME', $request->shop_name);
        }
        if($request->app_url != env('APP_URL'))
        {
            env_update('APP_URL', $request->app_url);
        }
        if($request->title_seperator != env('TITLE_SEPERATOR'))
        {
            env_update('TITLE_SEPERATOR', $request->title_seperator);
        }
        if($request->theme_name != env('THEME_NAME'))
        {
            env_update('THEME_NAME', $request->theme_name);
        }
        if($request->app_env != env('APP_ENV'))
        {
            env_update('APP_ENV', $request->app_env);
        }
        // Product
        $request->validate([
            'default_currency_id' => 'required|integer',
            'shipping_price' => 'required|numeric',
            'tax_rate' => 'required|numeric',
        ]);
        if($request->default_currency_id != env('DEFAULT_CURRENCY_ID'))
        {
            env_update('DEFAULT_CURRENCY_ID', $request->default_currency_id);
        }
        if($request->shipping_price != env('SHIPPING_PRICE'))
        {
            env_update('SHIPPING_PRICE', $request->shipping_price);
        }
        if($request->tax_rate != env('TAX_RATE'))
        {
            env_update('TAX_RATE', $request->tax_rate);
        }
        // Shop
        $request->validate([
            'address' => 'required',
            'code' => 'required',
            'vat' => 'required',
            'phone' => 'required',
            'swift' => 'required',
        ]);
        if($request->address != env('ADDRESS'))
        {
            env_update('ADDRESS', $request->address);
        }
        if($request->code != env('CODE'))
        {
            env_update('CODE', $request->code);
        }
        if($request->vat != env('VAT'))
        {
            env_update('VAT', $request->vat);
        }
        if($request->phone != env('PHONE'))
        {
            env_update('PHONE', $request->phone);
        }
        if($request->mail_driver != env('MAIL_DRIVER'))
        {
            env_update('MAIL_DRIVER', $request->mail_driver);
        }
        // Mail
        $request->validate([
            'mail_driver' => 'required',
            'mail_host' => 'required',
            'mail_port' => 'required',
            'mail_username' => 'required',
            'mail_password' => 'required',
            'mail_encryption' => 'required',
            'mail_from_address' => 'required',
        ]);
        if($request->mail_host != env('MAIL_HOST'))
        {
            env_update('MAIL_HOST', $request->mail_host);
        }
        if($request->mail_port != env('MAIL_PORT'))
        {
            env_update('MAIL_PORT', $request->mail_port);
        }
        if($request->mail_username != env('MAIL_USERNAME'))
        {
            env_update('MAIL_USERNAME', $request->mail_username);
        }
        if($request->mail_password != env('MAIL_PASSWORD'))
        {
            env_update('MAIL_PASSWORD', $request->mail_password);
        }
        if($request->mail_encryption != env('MAIL_ENCRYPTION'))
        {
            env_update('MAIL_ENCRYPTION', $request->mail_encryption);
        }
        if($request->mail_from_address != env('MAIL_ENCRYPTION'))
        {
            env_update('MAIL_FROM_ADDRESS', $request->mail_from_address);
        }
        // Images
        if(isset($request->favicon))
        {
            $request->validate([
                'favicon' => 'required|image|max:2048',
            ]);
            // image
            $new_image_name = md5(uniqid(rand(), true)) . '.' . $request->favicon->extension();
            $request->favicon->move(public_path('/storage/img/global/'), $new_image_name);
            env_update('FAVICON', $new_image_name);
        }
        if(isset($request->logo))
        {
            $request->validate([
                'logo' => 'required|image|max:2048',
            ]);
            // image
            $new_image_name = md5(uniqid(rand(), true)) . '.' . $request->logo->extension();
            $request->logo->move(public_path('/storage/img/global/'), $new_image_name);
            env_update('LOGO', $new_image_name);
        }

        Artisan::call('cache:clear');

        return back();
    }
    function user_delete(Request $request)
    {
        User::findOrFail($request->id)->delete();
        return back();
    }
    function user_edit(Request $request)
    {
        $user = User::findOrFail($request->id);

        $request->validate([
            'name' => 'required',
            'role' => 'required|integer',
        ]);

        $user->name = $request->name;

        if($request->email != $user->email)
        {
            $request->validate([
                'email' => 'required|email|unique:users',
            ]);
            $user->email = $request->email;
        }

        if($request->role == 0)
        {
            $user->role = NULL;
        }
        else
        {
            Role::findOrFail($request->role);
            $user->role = $request->role;
        }

        if(!empty($request->password) && !empty($request->password_confirmation))
        {
            if($request->password == $request->password_confirmation)
            {
                $user->password = Hash::make($request->password);
            }
            else
            {
                return back()->withErrors('The passwords do not match.');
            }
        }

        $user->save();

        return back();
    }
    function user_create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'role' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;

        if($request->role == 0)
        {
            $user->role = NULL;
        }
        else
        {
            Role::findOrFail($request->role);
            $user->role = $request->role;
        }

        if($request->password == $request->password_confirmation)
        {
            $user->password = Hash::make($request->password);
        }
        else
        {
            return back()->withErrors('The passwords do not match.');
        }

        $user->save();

        return back();
    }
}
