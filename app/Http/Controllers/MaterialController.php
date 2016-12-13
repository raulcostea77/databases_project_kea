<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;

class MaterialController extends Controller
{
    //
    public function index()
    {
    	$materials= Material::all();
    	return view('materials.index',compact('materials'));
    }

     public function getProducts($i)
    {   
        $material=Material::find($i);
        $materialProducts=$material->products()->paginate(10);
        return view('materials.products',compact('materialProducts'));
    }
     
}
