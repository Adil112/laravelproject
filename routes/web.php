<?php

use Illuminate\Support\Facades\Route;



Route::get('/contacts', 'App\Http\Controllers\CatalogController@contacts')->name('contacts');
Route::get('/cart', 'App\Http\Controllers\CartController@cart')->name('cart');
Route::post('/cart/add/{IdBook}',  'App\Http\Controllers\CartController@cartAdd')->name('cart-add');
Route::post('/cart/remove/{IdBook}',  'App\Http\Controllers\CartController@cartRemove')->name('cart-remove');
Route::get('/authorization', 'App\Http\Controllers\CatalogController@authorization')->name('authorization');
Route::get('/registration', 'App\Http\Controllers\CatalogController@registration')->name('registration');
Route::get('/allrequest', 'App\Http\Controllers\AllRequestController@allrequest')->name('allrequest');
Route::get('/book/{IdBook}', 'App\Http\Controllers\CatalogController@book')->name('book');
Route::get('/', 'App\Http\Controllers\CatalogController@home')->name('home');
Route::get('/support', 'App\Http\Controllers\CatalogController@support')->name('support');
Route::get('/catalog',  'App\Http\Controllers\CatalogController@catalog')->name('catalog');
Route::get('/catalog/search',  'App\Http\Controllers\CatalogController@search')->name('search');

