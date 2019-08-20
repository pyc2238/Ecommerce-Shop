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




Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop', 'HomeController@shop')->name('shop');
Route::get('/categories/{id}', 'HomeController@showCates');
Route::get('/contact', function(){
    return view('front.contact');
});
Route::get('/productDetail/{id}', 'HomeController@detailPro');
Route::get('/cart', 'CartController@index');
Route::get('/cart/addItem/{id}', 'CartController@addItem');
// Front End Location 
Auth::routes();

Route::group(['prefix' => 'admin','middleware' => ['auth','admin']],function(){
    
    Route::get('/', function () {
        return view('admin.index');
    });


    Route::resource('product', 'ProdcutController');
    Route::resource('category', 'CategoriesController');
});
// Admin End Location 