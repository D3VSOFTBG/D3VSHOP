<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PrivacyController extends Controller
{
    function get()
    {
        $info = Info::where('id', 2)->pluck('text')->first();

        $data = [
            'info' => $info,
        ];

        return view('admin.info.privacy', $data);
    }

    function post(Request $request)
    {
        $info = Info::findOrFail(2);
        $info->text = $request->text;
        $info->save();

        Cache::flush();

        return back();
    }
}
