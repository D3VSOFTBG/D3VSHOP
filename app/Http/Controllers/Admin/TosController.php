<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TosController extends Controller
{
    function get()
    {
        $info = Info::where('name', 'TOS')->first();

        $data = [
            'info' => $info,
        ];

        return view('admin.info.tos', $data);
    }
    function post(Request $request)
    {
        $info = Info::findOrFail($request->id);
        $info->text = $request->text;
        $info->save();

        Cache::flush();

        return back();
    }
}
