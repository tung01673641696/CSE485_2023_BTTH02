<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request) {
        $username = $request -> username;
        $password = $request -> password;
        $result = DB::table('user')->where('username',$username)->where('password',$password)->first();
        return view('dashboard');
    }
}
