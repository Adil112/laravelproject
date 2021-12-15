<?php

use Illuminate\Support\Facades\Route;



Route::get('/contacts', 'App\Http\Controllers\CatalogController@contacts')->name('contacts');
Route::get('/cart', 'App\Http\Controllers\CartController@cart')->name('cart');
Route::get('/requestconfirm', 'App\Http\Controllers\CartController@reqConf')->name('reqConf');
Route::post('/requestconfirm', 'App\Http\Controllers\CartController@requestConfirm')->name('request-confirm');
Route::post('/cart/add/{IdBook}',  'App\Http\Controllers\CartController@cartAdd')->name('cart-add');
Route::post('/cart/remove/{IdBook}',  'App\Http\Controllers\CartController@cartRemove')->name('cart-remove');
Route::get('/book/{IdBook}', 'App\Http\Controllers\CatalogController@book')->name('book');
Route::get('/', 'App\Http\Controllers\CatalogController@home')->name('myhome');
Route::get('/support', 'App\Http\Controllers\CatalogController@support')->name('support');
Route::get('/catalog',  'App\Http\Controllers\CatalogController@catalog')->name('catalog');
Route::get('/catalog/search',  'App\Http\Controllers\CatalogController@search')->name('search');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('get-logout');

Route::get('/allrequest', 'App\Http\Controllers\AllRequestController@allrequest')->name('allrequest')->middleware('auth');

Route::get('/user', 'App\Http\Controllers\UserController@index')->name('user')->middleware('auth', 'is_admin');

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


