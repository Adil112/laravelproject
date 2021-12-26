<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Authors;
use App\Models\Genres;
use App\Models\Publishers;
use App\Models\Requests;
use Illuminate\Http\Request;
use App\Models\Books;
use Illuminate\Support\Facades\Storage;
use App\Facade\ParserService;

class CatalogController extends Controller
{

    public function parseBook(){

        $state = ParserService::parser();
        if($state) session()->flash('success','Парсер закончил работу');
        else session()->flash('warning','Сайт заблокировал');
        return redirect()->route('catalog');
    }
    public function catalog(){


        $books = Books::orderBy('Name')->paginate(16);
        $s = "Поиск";
        $pubs = Publishers::get();
        $genres = Genres::get();
        $authors = Authors::get();
        $minPrice = Books::min('Price');
        $maxPrice = Books::max('Price');
        $minYear = Books::min('Year');
        $maxYear = Books::max('Year');
        return view('catalog',
            compact('books', 'pubs', 'genres', 'authors', 'maxPrice', 'minPrice', 'minYear','maxYear', 's'));
    }
    public function search(Request $request)
    {
        $s = $request->s;
        $genre = null;
        $pub = null;
        $author = null;
        $where=array();
        if($request->genre != "Все жанры")
        {
            $genre = Genres::where('Name', 'LIKE', "%".$request->genre."%")->first()->IdGenre;
            $a = ['IdGenre', '=', $genre];
            array_push($where, $a);
        }
        if($request->pub != "Все издатели"){
            $pub = Publishers::where('Name', 'LIKE', "%".$request->pub."%")->first()->IdPublisher;
            $a =   ['IdPublisher', '=', $pub];
            array_push($where, $a);
        }

        if($request->author != "Все авторы") {
            $name = explode(' ', $request->author);
            $author = Authors::where('Name', 'LIKE', "%" . $name[0] . "%")->where('Surname', 'LIKE', "%" . $name[1] . "%")->first()->IdAuthor;
            $a = ['IdAuthor', '=', $author];
            array_push($where, $a);
        }

        $minPrice = Books::min('Price');
        $maxPrice = Books::max('Price');
        if(!is_null($request->minprice)) $minPrice = $request->minprice;
        if(!is_null($request->maxprice)) $maxPrice = $request->maxprice;


        $name = ['Name', 'LIKE', "%".$s."%"];
        $p1 = ['Price', '>=', $minPrice];
        $p2 = ['Price', '<=', $maxPrice];
        array_push($where, $name);
        array_push($where, $p1);
        array_push($where, $p2);

        $books = Books::where($where)->simplePaginate(16);


        $pubs = Publishers::get();
        $genres = Genres::get();
        $authors = Authors::get();

        $minYear = Books::min('Year');
        $maxYear = Books::max('Year');
        return view('catalog',
            compact('books', 'pubs', 'genres', 'authors', 'maxPrice', 'minPrice', 'minYear','maxYear', 's'));
    }

    public function download()
    {
        $books = Books::all();

        $books->toArray();

        Storage::disk('public')->put('books.json', json_encode($books));

        $file= "..\storage\app\public/books.json";
        $headers = array(
            'Content-Type: application/json'
        );
        return \Illuminate\Support\Facades\Response::download($file,'books.json',$headers);
    }



    public function home(){
        return view('home');
    }
    public function book($IdBook){
        $book = Books::where('IdBook', $IdBook)->first();
        return view('book', ['book' => $book]);
    }

    public function contacts(){
        return view('contacts');
    }
    public function support(){
        return view('support');
    }




}
