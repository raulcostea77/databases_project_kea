<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;

class CollectionController extends Controller
{
    //
    public function index()
    {
    	$collections= Collection::all();
    	return view('collections.index',compact('collections'));
    }

      public function getProducts($i)
    {   
        $collection=Collection::find($i);
        $collectionProducts=$collection->products();
        return view('collections.products',compact('collectionProducts'));
    }
}
