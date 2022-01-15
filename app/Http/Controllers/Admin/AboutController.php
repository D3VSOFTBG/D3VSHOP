<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AboutController extends Controller
{
    function get()
    {
        $info = Info::where('id', 1)->pluck('text')->first();

        $data = [
            'info' => $info,
        ];

        return view('admin.info.about', $data);
    }
    function post(Request $request)
    {
        $info = Info::findOrFail(1);
        $info->text = $request->text;
        $info->save();

        Cache::flush();

        return back();
    }
}
