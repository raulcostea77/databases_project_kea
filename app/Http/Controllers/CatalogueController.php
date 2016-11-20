<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalogue;

class CatalogueController extends Controller
{
    //
    public function index()
    {
    	$catalogue= Catalogue::all();
    	return view('catalogues.index',compact('catalogues'));
    }

    public function showProducts(Catalogue $catalogue)
    {
    	return view('catalogues.show',compact('catalogue'));
    }
}
