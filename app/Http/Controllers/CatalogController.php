<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Authors;
use App\Models\Genres;
use App\Models\Publishers;
use Illuminate\Http\Request;
use App\Models\Books;

class CatalogController extends Controller
{
    public function catalog(){
        $books = Books::get();
        $pubs = Publishers::get();
        $genres = Genres::get();
        $authors = Authors::get();
        $minPrice = Books::min('Price');
        $maxPrice = Books::max('Price');
        $minYear = Books::min('Year');
        $maxYear = Books::max('Year');
        return view('catalog',
            compact('books', 'pubs', 'genres', 'authors', 'maxPrice', 'minPrice', 'minYear','maxYear'));
    }
    public function home(){
        return view('home');
    }
    public function book($IdBook){
        $book = Books::where('IdBook', $IdBook)->first();
        return view('book', ['book' => $book]);
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
