<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'ProductController@index');
Route::post('/','ClientsController@store');

 //Route::get('products?search={name}','ProductController@search');

//Route::get('products', 'ProductController@index');
Route::resource('search', 'ProductController@search');


Route::get('sites', 'SiteController@index');
Route::get('sites/{site}', 'SiteController@showProducts');

Route::get('origins', 'OriginController@index');
Route::get('origins/{origin}', 'OriginController@showProducts');

Route::get('models', 'ModelController@index');
Route::get('models/{model}', 'ModelController@showProducts');


Route::get('creators', 'CreatorController@index');
Route::get('creators/{creator}', 'CreatorController@showProducts');

Route::get('catalogues', 'CatalogueController@index');
Route::get('catalogues/{catalogue}', 'CatalogueController@showProducts');

Route::get('categories', 'CategoryController@index');
Route::get('categories/{id}','CategoryController@getProducts');

Route::get('collections', 'CollectionController@index');
Route::get('collections/{id}','CollectionController@getProducts');

Route::get('materials', 'MaterialController@index');
Route::get('materials/{id}','MaterialController@getProducts');


Auth::routes();

Route::get('/admin', 'HomeController@index');

Route::get('/delete/{id}', 'HomeController@delete');