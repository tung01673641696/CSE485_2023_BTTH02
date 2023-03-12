<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Users;
use App\Models\Category;
use App\Models\Article;
use App\Models\Author;
use DB;



class AdminController extends Controller
{
    public function dashboard(Request $request) {
        Log::info('hehe');
        $username = $request -> username;
        $password = $request -> password;
        $result = DB::table('user')->where('username',$username)->where('password',$password)->first();
        $sum = [
            'sumUser' => Users::count(),
            'sumCategory' => Category::count(),
            'sumAuthor' => Author::count(),
            'sumArticle' => Article::count(),
        ];



        return view('dashboard',compact('sum'));
    }
}
