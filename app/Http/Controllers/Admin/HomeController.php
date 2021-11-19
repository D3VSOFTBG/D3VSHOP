<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    function user_count()
    {
        return User::all('id')->count();
    }
    function home()
    {
        return view('admin.home');
    }
}
