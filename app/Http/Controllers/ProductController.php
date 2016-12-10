<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function getMaterials($i)
    {   
        $product=Product::find($i);
        return $product->materials->toArray();
    }

    public function getCollections($i)
    {   
        $product=Product::find($i);
        return $product->collections->toArray();
    }

    public function getCategories($i)
    {   
        $product=Product::find($i);
        return $product->categories->toArray();
    }


}
