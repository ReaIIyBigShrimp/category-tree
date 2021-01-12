<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index() 
    {
        $parentCategories = Category::where('parent_id', 0)->get();

        return view('category.index', compact('parentCategories'));
    }
    public function edit(int $id) {
        $category = Category::findOrFail($id);

        return view('category.edit', ['category' => $category]);
    }
}
