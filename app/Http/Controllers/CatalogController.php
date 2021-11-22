<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Books;

class CatalogController extends Controller
{
    public function catalog(){
        $books = Books::get();
        return view('catalog', compact('books'));
    }
    public function home(){
        return view('home');
    }
    public function book($IdBook){
        $book = Books::where('IdBook', $IdBook)->first();
        return view('book', ['book' => $book]);
    }
    public function allrequest(){
        return view('allrequest');
    }
    public function registration(){
        return view('registration');
    }
    public function authorization(){
        return view('authorization');
    }
    public function cart(){
        return view('cart');
    }
    public function contacts(){
        return view('contacts');
    }
    public function support(){
        return view('support');
    }
}
