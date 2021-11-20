<?php

namespace App\Http\Controllers;

use App\RoleModel;
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
        $roles = RoleModel::all();
        return view('admin.users', ['users' => $users, 'roles' => $roles]);
    }
    function user_delete(Request $request)
    {
        User::find($request->id)->delete();
        return back();
    }
    function user_edit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);

        $users = User::find($request->id);

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

        $users->save();

        return back();
    }
}
