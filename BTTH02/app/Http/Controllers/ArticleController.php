<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Author;
use App\Models\Article;
use DB;

class ArticleController extends Controller
{
    public function Article() {
        $article = Article::get();
        return view('article.article', compact('article'));
    }

    public function addArticle() {
        $category = Category::get();
        $author = Author::get();
        return view('article.add_article', compact('category', 'author'));
    }

    public function saveArticle(Request $request) {
        $nameArticle = $request->nameArticle;
        $title = $request->title;
        $nameSong = $request->nameSong;
        $theloai = $request->theloai;
        $summary = $request->summary;
        $content = $request->content;
        $tacgia = $request->tacgia;
        $date = $request->date;
        $image = $request->image;
        
        $article = new Article();
        $article->ten_bviet = $nameArticle;
        $article->tieude = $title;
        $article->ten_bhat = $nameSong;
        $article->ma_tloai = $theloai;
        $article->tomtat = $summary;
        $article->noidung = $content;
        $article->ma_tgia = $tacgia;
        $article->ngayviet = $date;
        $article->hinhanh = $image;

        $article->save();
        return redirect('article');
    }

    public function editArticle($ma_bviet) {
        $category = Category::all();
        $author = Author::all();
        $article = Article::where('ma_bviet',$ma_bviet)->first();
        return view("article.edit_article",compact('article','category','author'));
    }

    public function updateArticle(Request $request, $ma_bviet) {
        $nameArticle = $request->nameArticle;
        $title = $request->title;
        $nameSong = $request->nameSong;
        $theloai = $request->theloai;
        $summary = $request->summary;
        $content = $request->content;
        $tacgia = $request->tacgia;
        $date = $request->date;
        $image = $request->image;
       
        $article = DB::table('baiviet')
        ->where('ma_bviet',$ma_bviet)
        ->update
            ([
            'ten_bviet' => $nameArticle,
            'tieude' => $title,
            'ten_bhat' => $nameSong,
            'ma_tloai' => $theloai,
            'tomtat' => $summary,
            'noidung' => $content,
            'ma_tgia' => $tacgia,
            'ngayviet' => $date,
            'hinhanh' => $image
            ]);
        return redirect('article');
    }

    public function deleteArticle($ma_bviet) {
        $baiviet = Article::where('ma_bviet',$ma_bviet)->delete();
        return redirect('article');
    }
}
