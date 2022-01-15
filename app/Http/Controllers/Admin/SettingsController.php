<?php

namespace App\Http\Controllers\Admin;

use App\Currency;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;

class SettingsController extends Controller
{
    function get()
    {
        $currencies = Currency::all();

        $default_currency_code = Currency::where('id', (int) env('DEFAULT_CURRENCY_ID'))->pluck('code')->first();

        $data = [
            'currencies' => $currencies,
            'default_currency_code' => $default_currency_code,
        ];

        return view('admin.shop.settings', $data);
    }
    function post(Request $request)
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
        Cache::flush();

        return back();
    }
}
