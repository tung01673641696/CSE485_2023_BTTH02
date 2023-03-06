<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function showAuthor() {
        $author = Author::get();
        return view('Author');
    }
}

