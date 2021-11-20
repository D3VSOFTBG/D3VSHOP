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
}
