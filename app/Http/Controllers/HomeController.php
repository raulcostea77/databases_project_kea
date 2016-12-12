<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
  
        public function index()
    {
        // $products= Product::all();
        $products= Product::paginate(10);
        return view('admin',compact('products'));
    }

        public function delete($i)
        {

           $product=Product::find($i);
           $product->collections()->detach();
           $product->categories()->detach();
           $product->materials()->detach(); 
           $product->delete();
           return view('admin',compact('products'));
        }



}
