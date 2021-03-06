<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use App\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
    	// $products= Product::all();
        $products= Product::paginate(10);
    	return view('products.index',compact('products'));
    }

    public static function getMaterials($i)
    {   
        $product=Product::find($i);
        return $product->materials->toArray();
    }

    public static function getCollections($i)
    {   
        $product=Product::find($i);
        return $product->collections->toArray();
    }

    public static function getCategories($i)
    {   
        $product=Product::find($i);
        return $product->categories->toArray();
    }
     public static function getOrigin($i)
    {   
        $product=Product::find($i);
        return $product->origins->toArray();
    }
    public static function search(Request $request){
         $query = Request::input('search');
        $searchedProducts=Product::where('title','LIKE','%'.$query.'%')->paginate(10);
        return view('products.search',compact('searchedProducts'));
    }


}
