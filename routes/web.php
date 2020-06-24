<?php

use Illuminate\Support\Facades\Route;


Auth::routes(['verify' => true]);

// Admin
Route::group(['namespace'=>'Admin'],function (){
    Route::group(['prefix'=>'admin'],function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('about','Aboutcontroller');
	Route::delete('about_delete', 'AboutController@destroy')->name('about_delete');
    Route::resource('product','ProductController');
    });
});
//Client
Route::group(['namespace'=>'Client','prefix'=>'client'],function (){
    Route::get('home', 'HomeController@index')->name('trangchu');
    Route::resource('productlist', 'HomeController');
    Route::resource('loginClient','LoginController');
    Route::resource('cart','CartController');
	Route::get('add-to-cart', 'CartController@addToCart');
    Route::delete('remove-from-cart', 'CartController@remove');
    Route::patch('update-cart', 'CartController@update');
    Route::get('/getsize', 'HomeController@getSize');
});