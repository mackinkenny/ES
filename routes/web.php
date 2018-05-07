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


//Creates
Route::get('/createauto', 'AutoController@createauto')->name('createauto');
Route::post('/storeautotype', 'AutotypeController@storeautotype')->name('storeautotype');

Route::get('/createautotype', 'AutotypeController@createautotype')->name('createautotype');
Route::post('/storeauto', 'AutoController@storeauto')->name('storeauto');

Route::get('/createcategory', 'CategoryController@createcategory')->name('createcategory');
Route::post('/storecategory', 'CategoryController@storecategory')->name('storecategory');


//Shows
Route::get('/showauto/{id}', 'AutoController@showauto')->name('showauto');
Route::get('/partner', 'PartnerController@show')->name('partner');
Route::get('/allshow/{id}', 'CategoryController@allshow')->name('allshow');


//ajax-js routes
Route::get('/autotype/{id}', 'AutotypeController@autotypesort');
Route::get('/autotype', 'AutotypeController@autotypebacksort');
