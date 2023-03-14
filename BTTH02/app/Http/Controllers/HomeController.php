<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use App\Models\Author;
use DB;

class HomeController extends Controller
{
    public function home() {
        $show = Article::get();
        return view('home',compact('show'));
    }
}
