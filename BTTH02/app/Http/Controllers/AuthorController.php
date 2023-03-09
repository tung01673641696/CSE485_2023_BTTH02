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

    public function addAuthor() {
        return view('author.add_author');
    }

    public function saveAuthor(Request $request) {
        $nameAuthor = $request->nameAuthor;
        $author = new Author();
        $author->ten_tgia = $nameAuthor;
        $author->save();
        return redirect('author');
    }

    public function deleteAuthor($ma_tgia) {
        $author = Author::find($ma_tgia);
        $author -> delete();
        return redirect('author');
    }
}

