<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/book', function () {
    return view('book');
});
Route::get('/allrequest', function () {
    return view('allrequest');
});
Route::get('/request', function () {
    return view('request');
});
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/authorization', function () {
    return view('authorization');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/support', function () {
    return view('support');
});

Route::get('/catalog',  'App\Http\Controllers\CatalogController@index');
