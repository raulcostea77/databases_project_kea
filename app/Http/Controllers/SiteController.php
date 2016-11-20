<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;

class SiteController extends Controller
{
    //
    public function index()
    {
    	$sites= Site::all();
    	return view('sites.index',compact('sites'));
    }
    
    public function showProducts(Site $site)
    {
    	return view('sites.show',compact('site'));
    }
}
