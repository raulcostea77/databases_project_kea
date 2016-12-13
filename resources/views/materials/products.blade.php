@extends('layouts.master')
@section('content')
<?php use App\Http\Controllers\ProductController;
?>
<div class="row">
        <div class="large-10 large-push-1 columns">
            <form role="search">
                          <div class="form-group">
                            <input id="searchbar" type="text" class="form-control" placeholder="Search" name="search" data-list=".col-md-2">
                          </div>
            </form>
            <div class="row links">
                <div class="large-2 columns">
                    <a href={{ url('/creators') }}>Creators</a>
                </div>
                <div class="large-2 columns">
                    <a href={{ url('/collections') }}>Collections</a>
                </div>
                 <div class="large-2 columns">
                    <a href={{ url('/origins') }}>Origins</a>
                </div>
                 <div class="large-2 columns">
                    <a href={{ url('/materials') }}>Materials</a>
                </div>
                 <div class="large-2 columns">
                    <a href={{ url('/categories') }}>Categories</a>
                </div>
                <div class="large-2 columns">
                    <a href={{ url('/catalogues') }}>Catalogues</a>
                </div>
            </div>

            @foreach ($materialProducts as $product)
        <?php

        	
       	
            $materials=ProductController::getMaterials($product->id);
            $collections=ProductController::getCollections($product->id);
            $categories=ProductController::getCategories($product->id);
            
            if(empty($collections)){
                $collections[0]['name']='Unknown';
            }   
            if(empty($materials)){
                $materials[0]['name']="Unknown";
            }
        ?>
        </div>
        <div class="row">
        <div class="large-10 large-push-1 columns product-container">
           <div class="product-image-container">        
                <img src="{{$product->thumb}}">
            </div>
           <div class="product-text-container">
                <h4>{{$product->title}}</h4>
                <p>{{$product->description}}</p>
                <span>Width: {{$product->width}}, Height:{{$product->height}}, Depth{{$product->depth}}</span>
                <p>Origin:{{$product->origin}}</p>
                <p>Materials:
                    @foreach($materials as $material)
                        {{$material['name']}}
                    @endforeach
                </p>
                <p>Collection:
                    @foreach($collections as $collection)
                        {{$collection['name']}}
                    @endforeach
                </p>
                <p>Categories:</p>
                    @foreach($categories as $category)
                        <li>{{$category['name']}}</li>
                    @endforeach
                <div class="linkToAuction">
                    <a href="{{$product->url}}">Visit auction</a>
                </div>
           </div>
               
        </div>
        </div>
        @endforeach
            
            	<div class="row">
        <div class="large-10 large-push-1 columns">
            <a href="{{$materialProducts->previousPageUrl()}}" style="float:left">Previous Page</a>
            <a href="{{$materialProducts->nextPageUrl()}}" style="float:right">Next Page</a>
            </div>
        </div>
</div>
@endsection
