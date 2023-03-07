<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function Author() {
        $author = Author::get();
        return view('author.author',compact('author'));
    }
}

