<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Article;
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
        $author = Author::where('ma_tgia',$ma_tgia)->first();
        // $author = Author::find($ma_tgia);
        return view('author.edit_author', compact('author'));
    }

    public function updateAuthor(Request $request, $ma_tgia) {
        $nameAuthor = $request-> nameAuthor;
        $author = DB::table('tacgia')->where('ma_tgia',$ma_tgia)->update(['ten_tgia',$nameAuthor]);
        return redirect('author');
    }

    public function deleteAuthor($ma_tgia) {      
        $article = Article::where('ma_tgia', $ma_tgia)->delete();
        $author = Author::where('ma_tgia', $ma_tgia)->delete();
        
        return redirect('author');
    }
}

