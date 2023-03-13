<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class LoginController extends Controller
{
    public function login() {
        return view('login.login');
    }

    public function loginStore(Request $request) {
        $this->validate($request, [
            'username'=>'required|string|max:255',
            'password'=>'required|string|max:255'
        ]);

        $user = Users::where('username','=',$request->username)->where('password','=',$request->password)->first();
        if($user){
            return redirect('dashboard');
        }       
        else return redirect('login');}
}
