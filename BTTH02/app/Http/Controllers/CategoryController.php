<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

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
}
