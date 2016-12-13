<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;

class CollectionController extends Controller
{
    //
    public function index()
    {
    	$collections= Collection::simplePaginate(50);
    	return view('collections.index',compact('collections'));
    }

      public function getProducts($i)
    {   
        $collection=Collection::find($i);
        $collectionProducts=$collection->products()->paginate(10);;
        return view('collections.products',compact('collectionProducts'));
    }
}
