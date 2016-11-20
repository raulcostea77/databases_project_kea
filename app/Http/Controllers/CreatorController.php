<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Creator;

class CreatorController extends Controller
{
    //
    public function index()
    {
    	$creators= Creator::all();
    	return view('creators.index',compact('creators'));
    }

    public function showProducts(Creator $creator)
    {
    	return view('creators.show',compact('creator'));
    }
}
