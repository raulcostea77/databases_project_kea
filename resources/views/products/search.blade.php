@extends('layouts.master')
@section('content')
<?php use App\Http\Controllers\ProductController;
?>
    <div class="row">
        <div class="large-10 large-push-1 columns">
            {!! Form::open(['method'=>'GET','url'=>'search','role'=>'search'])  !!}
            
                          <div class="form-group">
                            <input id="searchbar" type="text" class="form-control" placeholder="Search" name="search" data-list=".products">
    
                          </div>
            {!! Form::close() !!}

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
        </div>
        <div class="products">
        @foreach ($searchedProducts as $searchedProduct)
        <?php
            $materials=ProductController::getMaterials($searchedProduct->id);
            $collections=ProductController::getCollections($searchedProduct->id);
            $categories=ProductController::getCategories($searchedProduct->id);
            
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
                <img src="{{$searchedProduct->thumb}}">
            </div>
           <div class="product-text-container">
                <h4>{{$searchedProduct->title}}</h4>
                <p>{{$searchedProduct->description}}</p>
                <span>Width: {{$searchedProduct->width}}, Height:{{$searchedProduct->height}}, Depth{{$searchedProduct->depth}}</span>
                <p>Origin:{{$searchedProduct->origin}}</p>
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
                    <a href="{{$searchedProduct->url}}">Visit auction</a>
                </div>
           </div>
               
        </div>
        </div>
        @endforeach
        </div>
        <div class="row">
        <div class="large-10 large-push-1 columns">
            <a href="{{$searchedProducts->previousPageUrl()}}" style="float:left">Previous Page</a>
            <a href="{{$searchedProducts->nextPageUrl()}}" style="float:right">Next Page</a>
        </div>
        </div>
        {{-- <div class="medium-6 columns">
            <h1>Laravel 5</h1>
            <p>Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.</p>
            <p>Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.</p>
            <a href="https://laravel.com/docs/5.2" class="button">Laravel documentation &rarr;</a>
        </div>
        <div class="medium-6 columns">
            <h1 id="app">@{{ message }}</h1>
            <h4>The most advanced responsive front-end framework in the world.</h4>
            <p>A Framework for any device, medium, and accessibility. Foundation is a family of responsive front-end frameworks that make it easy to design beautiful responsive websites, apps and emails that look amazing on any device. Foundation is semantic, readable, flexible, and completely customizable. We’re constantly adding new resources and code snippets, including these handy HTML templates to help get you started!</p>
            <a href="http://foundation.zurb.com/sites/docs/" class="button secondary">Founation docs &rarr;</a>
        </div> --}}
    </div>
@endsection