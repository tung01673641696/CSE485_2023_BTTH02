<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use DB;

class CategoryController extends Controller
{
    public function Category() {
        $category = Category::get();
        return view('category.category',compact('category'));
    }

    public function addCategory() {
        return view('category.add_category');
    }

    public function saveCategory(Request $request) {
        $nameCategory = $request -> nameCategory;
        $category = new Category;
        $category -> ten_tloai = $nameCategory;
        $category -> save();
        return redirect('category');
    }

    public function editCategory($ma_tloai) {
        $category = Category::where('ma_tloai',$ma_tloai)->first();
        return view("category.edit_category",compact('category'));
    }

    public function deleteCategory($ma_tloai) {
        $article = Article::where('ma_tloai', $ma_tloai)->delete();
        $category = Category::where('ma_tloai', $ma_tloai)->delete();
        return redirect('category');
    }
}
