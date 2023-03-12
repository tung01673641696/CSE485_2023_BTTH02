<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\Log;
use DB;

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

    public function editAuthor($ma_tgia) {
        // Log::info($ma_tgia);
        $author = Author::where('ma_tgia', $ma_tgia)->first();
        // $author = Author::find($ma_tgia);
        return view('author.edit_author', compact('author'));
    }

    public function updateAuthor(Request $request, $ma_tgia) {
        $author = Author::where('ma_tgia', $ma_tgia)->first();
        $nameAuthor = $request-> nameAuthor;
        $author->ten_tgia = $nameAuthor;
        $author -> save();
        return redirect('author.author');
    }

    public function deleteAuthor($ma_tgia) {
        $author = Author::where('ma_tgia', $ma_tgia)->first();
        Log::info($author);
        $author -> delete();
        return redirect('author.author');   
    }
}

