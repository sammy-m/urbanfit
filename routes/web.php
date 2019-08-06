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



Route::get('/page', function () {
    return "<h1>hello world</h1>";
});

Route::get('/about', function(){
    return view('pages.about');
});

//dynamic paging
/*Route::get('/users/{id}/{name}', function($id, $name){
    return('this is user ' .$name. ' with an id ' .$id);
});*/

Route::get('/', 'PagesController@index');
Route::get('/menshoes', 'PagesController@menshoes');
Route::get('/ladyshoes', 'PagesController@ladyshoes'); 
Route::get('/services', 'PagesController@services');
Route::get('/stock/upload','stockController@upload')->name('stockUpload.stockImage');



Route::post('/stock/upload', 'stockController@storeStock');
Route::get('submit', 'uploadController@upload');
Route::post('store', 'uploadController@store');
