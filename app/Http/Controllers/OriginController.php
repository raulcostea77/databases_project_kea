<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Origin;

class OriginController extends Controller
{
    //
    public function index()
    {
    	$origins= Origin::all();
    	return view('origins.index',compact('origins'));
    }

    public function showProducts(Origin $origin)
    {
    	return view('origins.show',compact('origin'));
    }
}
