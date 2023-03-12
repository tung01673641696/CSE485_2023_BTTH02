<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Author;
use App\Models\Article;

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
        $article->ten_tgia = $nameAuthor;
        $article->ma_tloai = $theloai;
        $article->tomtat = $summary;
        $article->noidung = $content;
        $article->ma_tgia = $tacgia;
        $article->ngayviet = $date;
        $article->hinhanh = $image;

        $article->save();
        return redirect('article');
    }
}
