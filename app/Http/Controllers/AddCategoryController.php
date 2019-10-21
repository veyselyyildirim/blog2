<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class AddCategoryController extends Controller
{
    public function index()
    {
        return view('add_categories.index');
    }
    public function create(Request $request)
    {
        $new = new Category;
        $new->title = $request->fname;
        $new->save();
        return view('add_categories.index');
    }
}
