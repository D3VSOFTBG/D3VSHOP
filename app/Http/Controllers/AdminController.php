<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function home()
    {
        return view('admin.home');
    }
    function users()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return view('admin.users', ['users' => $users]);
    }
    function user_delete(Request $request)
    {
        User::find($request->id)->delete();
        return back();
    }
    function user_edit(Request $request)
    {
        User::find($request->id)->delete();
        return back();
    }
}
