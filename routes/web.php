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
Route::get('/shop/{slug}', 'ProductController@show')->name('products.show');

Route::post('/panier/ajouter', 'CartController@store')->name('cart.store');
Route::patch('/panier/{rowId}', 'CartController@update')->name('cart.update');
//Route::delete('/panier/{product}', 'CartController@destroy')->name('cart.destroy');

Route::get('/paiement', 'StripeController@index')->name('stripe.index');
Route::post('/paiement', 'StripeController@store')->name('stripe.store');
Route::get('/remerciement', 'StripeController@thanks')->name('stripe.thanks');




Route::get('/faq', 'FaqController@index')->name('faq');

Route::get('/contact', 'ContactController@index')->name('contact.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
