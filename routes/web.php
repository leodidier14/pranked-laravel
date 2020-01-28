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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ProductController@index')->name('products.index');
Route::get('/{slug}', 'ProductController@show')->name('products.show');


Route::get('/faq', 'FaqController@index')->name('faq');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/shop/create', 'ShopController@create')->name('shop.create');

Route::get('/shop', 'ShopController@store')->name('shop.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
