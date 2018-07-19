<?php

Route::group(['middleware' => ['admin']],function() {
//Type
    Route::get('/createtype', 'TypeController@createtype')->name('createtype');
    Route::post('/storetype', 'TypeController@storetype')->name('storetype');

//Category
    Route::get('/createcategory', 'CategoryController@createcategory')->name('createcategory');
    Route::post('/storecategory', 'CategoryController@storecategory')->name('storecategory');
//Admin Task
    Route::get('/admintask', 'MessageController@showall');

});
//Transitions
Route::get('/', 'MainController@index')->name('/');

//Auth
//*******************CREATES*************************
Route::get('/createlist', 'CategoryController@createlist');

//Product
Route::get('/createproduct/{id}', 'ProductController@createproduct')->name('createproduct');
Route::post('/storeproduct', 'ProductController@storeproduct')->name('storeproduct');



//Message
Route::post('/message', 'MessageController@storemessage')->name('message');

//*******************SHOWS*******************
Route::get('/showproduct/{id}', 'ProductController@showproduct')->name('showproduct');
Route::get('/partner', 'PartnerController@show')->name('partner');
Route::get('/show/{id}', 'CategoryController@allshow')->name('show');
Route::get('/contact', 'CompanyController@contact');
Route::get('/list', 'CompanyController@list');
Route::get('/bid', 'CompanyController@bid');
Route::get('/begay', 'Controller@test');
Route::get('/plan', 'Controller@plan');


//********************AJAX-JS ROUTES********************
Route::get('/type/{id}', 'TypeController@typesort');

Route::get('/types/{id}', 'TypeController@typebacksort');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


