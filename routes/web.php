<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Transitions
Route::get('/', 'MainController@index')->name('/');
Route::get('/auto/{id}', 'AutoController@auto')->name('auto');


//*******************CREATES*************************
//Category
Route::get('/createcategory', 'CategoryController@createcategory')->name('createcategory');
Route::post('/storecategory', 'CategoryController@storecategory')->name('storecategory');

//Product
Route::get('/createproduct/{id}', 'ProductController@createproduct')->name('createproduct');
Route::post('/storeproduct', 'ProductController@storeproduct')->name('storeproduct');

//Type
Route::get('/createtype', 'TypeController@createtype')->name('createtype');
Route::post('/storetype', 'TypeController@storetype')->name('storetype');
//*******************SHOWS*******************
Route::get('/showproduct/{id}', 'ProductController@showproduct')->name('showproduct');
Route::get('/partner', 'PartnerController@show')->name('partner');
Route::get('/show/{id}', 'CategoryController@allshow')->name('show');


//********************AJAX-JS ROUTES********************
Route::get('/type/{id}', 'TypeController@typesort');

Route::get('/types/{id}', 'TypeController@typebacksort');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


