<?php

namespace App\Http\Controllers\Admin;

use App\Carrier;
use App\Currency;
use App\Http\Controllers\Controller;
use App\OrderedProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarriersController extends Controller
{
    function carriers()
    {
        $carriers = Carrier::orderBy('id', 'DESC')->paginate(env('PAGINATION_ADMIN'));

        $data = [
            'carriers' => $carriers,
        ];

        return view('admin.shop.carriers', $data);
    }
    function create(Request $request)
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
    function edit(Request $request)
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
    function delete(Request $request)
    {
        Carrier::findOrFail($request->id)->delete();
        return back();
    }
}
