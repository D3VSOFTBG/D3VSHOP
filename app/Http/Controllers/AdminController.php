<?php

namespace App\Http\Controllers;

use App\Currency;
use App\Product;
use App\Setting;
use App\Stripe;
use App\Role;
use App\User;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Artisan;


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
        $users = User::orderBy('id', 'DESC')->get();
        $roles = Role::all();

        $data = [
            'users' => $users,
            'roles' => $roles,
        ];

        return view('admin.users', $data);
    }
    function information()
    {
        return view('admin.information');
    }
    function shop_products()
    {
        $products = Product::orderBy('id', 'DESC')->get();

        $data = [
            'products' => $products,
        ];

        return view('admin.shop.products', $data);
    }
    function shop_orders()
    {
        $orders = Order::orderBy('id', 'DESC')->get();
        $currencies = Currency::all();

        $data = [
            'orders' => $orders,
            'currencies' => $currencies,
        ];

        return view('admin.shop.orders', $data);
    }
    function payments_stripe_get()
    {
        $stripe = Stripe::where('id', 1)->get();

        $data = [
            'stripe' => $stripe,
        ];

        return view('admin.payments.stripe', $data);
    }
    function payments_stripe_post(Request $request)
    {
        $request->validate([
            'environment' => 'required',
            'test_webhook_secret' => 'required',
            'test_publishable_key' => 'required',
            'test_secret_key' => 'required',
            'live_webhook_secret' => 'required',
            'live_publishable_key' => 'required',
            'live_secret_key' => 'required',
        ]);

        function environment($request)
        {
            if($request->environment == 'live')
            {
                return 1;
            }
            else
            {
                return 0;
            }
        }

        $update_details = [
            'environment' => environment($request),
            'test_webhook_secret' => $request->test_webhook_secret,
            'test_publishable_key' => $request->test_publishable_key,
            'test_secret_key' => $request->test_secret_key,
            'live_webhook_secret' => $request->live_webhook_secret,
            'live_publishable_key' => $request->live_publishable_key,
            'live_secret_key' => $request->live_secret_key,
        ];

        DB::table('stripe')->where('id', 1)->update($update_details);

        return back();
    }
    function product_create(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
            'name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer'
        ]);

        $products = new Product();
        $products->slug = strtolower(trim(preg_replace('/\s+/', '-', $request->name))) . time();

        // image
        $new_image_name = time() . '.' . $request->image->extension();
        $request->image->move(public_path('/storage/img/products/'), $new_image_name);
        $products->image = $new_image_name;

        $products->name = $request->name;
        $products->price = $request->price;
        $products->quantity = $request->quantity;
        $products->save();

        return back();
    }
    function product_edit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer'
        ]);

        $products = Product::find($request->id);

        if($products->name != $request->name)
        {
            $products->slug = strtolower(trim(preg_replace('/\s+/', '-', $request->name))) . time();
        }

        if(!empty($request->image))
        {
            $request->validate([
                'image' => 'required|image|max:2048',
            ]);

            // image
            $new_image_name = time() . '.' . $request->image->extension();
            $request->image->move(public_path('/storage/img/products/'), $new_image_name);
            $products->image = $new_image_name;
        }

        $products->name = $request->name;
        $products->price = $request->price;
        $products->quantity = $request->quantity;
        $products->save();

        return back();
    }
    function product_delete(Request $request)
    {
        Product::find($request->id)->delete();
        return back();
    }
    function settings_get()
    {
        $settings = Setting::all();

        $currencies = Currency::all();

        $data = [
            'settings' => $settings,
            'currencies' => $currencies,
        ];

        return view('admin.settings', $data);
    }
    function settings_post(Request $request)
    {
        $request->validate([
            'shop_name' => 'required',
            'title_seperator' => 'required',
            'default_currency_id' => 'required|integer',
            'theme_name' => 'required',
        ]);

        if($request->shop_name != env('SHOP_NAME'))
        {
            env_update('SHOP_NAME', $request->shop_name);
        }
        if($request->title_seperator != env('TITLE_SEPERATOR'))
        {
            env_update('TITLE_SEPERATOR', $request->title_seperator);
        }
        if($request->default_currency_id != env('DEFAULT_CURRENCY_ID'))
        {
            env_update('DEFAULT_CURRENCY_ID', $request->default_currency_id);
        }
        if($request->theme_name != env('THEME_NAME'))
        {
            env_update('THEME_NAME', $request->theme_name);
        }

        Artisan::call('cache:clear');

        return redirect(request()->url());

        // DB::update(
        //     "UPDATE settings SET value = CASE WHEN id = 1 THEN ? WHEN id = 2 THEN ? WHEN id = 3 THEN ? WHEN id = 4 THEN ? END WHERE ID IN (1, 2, 3, 4)",
        //     [$request->shop_name, $request->title_seperator, $request->default_currency_id, $request->theme_name]
        // );

        // Delete all cache
        //Cache::flush();
    }
    function user_delete(Request $request)
    {
        User::find($request->id)->delete();
        return back();
    }
    function user_edit(Request $request)
    {
        $users = User::find($request->id);

        $request->validate([
            'name' => 'required',
            'role' => 'required',
        ]);

        $users->name = $request->name;

        if($request->email != $users->email)
        {
            $request->validate([
                'email' => 'required|email|unique:users',
            ]);
            $users->email = $request->email;
        }

        if($request->role == 'NULL')
        {
            $users->role = NULL;
        }
        else
        {
            $users->role = $request->role;
        }

        if(!empty($request->password) && !empty($request->password_confirmation))
        {
            if($request->password == $request->password_confirmation)
            {
                $users->password = Hash::make($request->password);
            }
            else
            {
                return back()->withErrors('The passwords do not match.');
            }
        }

        $users->save();

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

        $users = new User();

        $users->name = $request->name;
        $users->email = $request->email;

        if($request->role == 'NULL')
        {
            $users->role = NULL;
        }
        else
        {
            $users->role = $request->role;
        }

        if($request->password == $request->password_confirmation)
        {
            $users->password = Hash::make($request->password);
        }
        else
        {
            return back()->withErrors('The passwords do not match.');
        }

        $users->save();

        return back();
    }
}
