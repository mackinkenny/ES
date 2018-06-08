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
//Service
Route::get('/createlist', 'CategoryController@createlist')->name('createlist');

Route::get('/createservice', 'ServiceController@createservice')->name('createservice');
Route::post('/storeservice', 'ServiceController@storeservice')->name('storeservice');

Route::get('/createservicetype', 'ServicetypeController@createservicetype')->name('createservicetype');
Route::post('/storeservicetype', 'ServicetypeController@storeservicetype')->name('storeservicetype');

//Auto
Route::get('/createauto', 'AutoController@createauto')->name('createauto');
Route::post('/storeautotype', 'AutotypeController@storeautotype')->name('storeautotype');

Route::get('/createautotype', 'AutotypeController@createautotype')->name('createautotype');
Route::post('/storeauto', 'AutoController@storeauto')->name('storeauto');

//Build
Route::get('/createbuild', 'BuildController@createbuild')->name('createbuild');
Route::post('/storebuild', 'BuildController@storebuild')->name('storebuild');

Route::get('/createbuildtype', 'BuildtypeController@createbuildtype')->name('createbuildtype');
Route::post('/storebuildtype', 'BuildtypeController@storebuildtype')->name('storebuildtype');

//Buildmaterial
Route::get('/createbuildmaterial', 'BuildmaterController@createbuildmater')->name('createbuildmaterial');
Route::post('/storebuildmaterial', 'BuildmaterController@storebuildmater')->name('storebuildmaterial');

Route::get('/createbuildmaterialtype', 'BuildmatertypeController@createbuildmaterialtype');
Route::post('/storebuildmaterialtype', 'BuildmatertypeController@storebuildmaterialtype')->name('storebuildmaterialtype');

//Buildtool
Route::get('/createbuildtool', 'ToolController@createbuildtool')->name('createbuildtool');
Route::post('/storebuildtool', 'ToolController@storebuildtool')->name('storebuildtool');

Route::get('/createbuildtooltype', 'TooltypeController@createbuildtooltype')->name('createbuildtooltype');
Route::post('/storebuildtooltype', 'TooltypeController@storebuildtooltype')->name('storebuildtooltype');

//Electro
Route::get('/createelectro', 'ElectroController@createelectro')->name('createelectro');
Route::post('/storeelectro', 'ElectroController@storeelectro')->name('storeelectro');

Route::get('/createelectrotype', 'ElectrotypeController@createelectrotype')->name('createelectrotype');
Route::post('/storeelectrotype', 'ElectrotypeController@storeelectrotype')->name('storeelectrotype');

//Other
Route::get('/createother', 'OtherController@createother')->name('createother');
Route::post('/storeother', 'OtherController@storeother')->name('storeother');

Route::get('/createothertype', 'OthertypeController@createothertype')->name('createothertype');
Route::post('/storeothertype', 'OthertypeController@storeothertype')->name('storeothertype');

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
Route::get('/showservice/{id}', 'ServiceController@showservice');
Route::get('/showbuild/{id}', 'BuildController@showbuild');
Route::get('/showmaterial/{id}', 'BuildmaterController@showmaterial');
Route::get('/showtool/{id}', 'ToolController@showtool');
Route::get('/showelectro/{id}', 'ElectroController@showelectro');
Route::get('/showother/{id}', 'OtherController@showother');
Route::get('/partner', 'PartnerController@show')->name('partner');
Route::get('/show/{id}', 'CategoryController@allshow')->name('show');


//********************AJAX-JS ROUTES********************
Route::get('/type/{id}', 'TypeController@typesort');
Route::get('/types/{id}', 'TypeController@typebacksort');

Route::get('/buildtype/{id}', 'BuildtypeController@buildtypesort');
Route::get('/buildtype', 'BuildtypeController@buildtypebacksort');

Route::get('/servicetype/{id}', 'ServicetypeController@servicetypesort');
Route::get('/servicetype', 'ServicetypeController@servicetypebacksort');

Route::get('/materialtype/{id}', 'BuildmatertypeController@materialtypesort');
Route::get('/materialtype', 'BuildmatertypeController@materialtypebacksort');

Route::get('/tooltype/{id}', 'TooltypeController@tooltypesort');
Route::get('/tooltype', 'TooltypeController@tooltypebacksort');

Route::get('/electrotype/{id}', 'ElectrotypeController@electrotypesort');
Route::get('/electrotype', 'ElectrotypeController@electrotypebacksort');

Route::get('/othertype/{id}', 'OthertypeController@othertypesort');
Route::get('/othertype', 'OthertypeController@othertypebacksort');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


