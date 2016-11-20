<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    //
    public function index()
    {
    	$categories= Category::all();
    	return view('categories.index',compact('categories'));
    }

      public function getProducts($i)
    {   
        $category=Category::find($i);
        $categoryProducts=$category->products();
        return view('categories.products',compact('categoryProducts'));
    }
}
