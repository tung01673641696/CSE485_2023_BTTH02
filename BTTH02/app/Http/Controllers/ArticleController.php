<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function Article() {
        $article = Article::get();
        return view('article.article', compact('article'));
    }
}
