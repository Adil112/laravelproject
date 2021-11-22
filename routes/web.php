<?php

use Illuminate\Support\Facades\Route;



Route::get('/contacts', 'App\Http\Controllers\CatalogController@contacts')->name('contacts');
Route::get('/cart', 'App\Http\Controllers\CatalogController@cart')->name('cart');
Route::get('/authorization', 'App\Http\Controllers\CatalogController@authorization')->name('authorization');
Route::get('/registration', 'App\Http\Controllers\CatalogController@registration')->name('registration');
Route::get('/allrequest', 'App\Http\Controllers\CatalogController@allrequest')->name('allrequest');
Route::get('/book/{IdBook}', 'App\Http\Controllers\CatalogController@book')->name('book');
Route::get('/', 'App\Http\Controllers\CatalogController@home')->name('home');
Route::get('/support', 'App\Http\Controllers\CatalogController@support')->name('support');
Route::get('/catalog',  'App\Http\Controllers\CatalogController@catalog')->name('catalog');
