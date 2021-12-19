<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Authors;
use App\Models\Books;
use App\Models\Genres;
use App\Models\Publishers;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $pubs = Publishers::get();
        $genres = Genres::get();
        $authors = Authors::get();

        return view('bookadd', compact('pubs', 'genres', 'authors'));
    }
    public function bookAdd(Request $req)
    {
        $book = Books::create();
        $book->Name = $_POST['name'];
        $book->Description = $_POST['description'];
        $book->Mark = 0;
        $book->Price = $_POST['price'];
        $book->Quantity = $_POST['quantity'];
        $book->Image = $_POST['image'];
        $book->Year = $_POST['year'];

        $author = explode(" ", $_POST['authors']);
        $idGenre = Genres::where('Name', $_POST['genre'])->first()->IdGenre;
        $idPub = Publishers::where('Name', $_POST['pub'])->first()->IdPublisher;
        $idAuthor = Authors::where([
            ['Name', '=', $author[0]],
            ['Surname', '=', $author[1]]
        ])->first()->IdAuthor;

        $book->IdGenre = $idGenre;
        $book->IdPublisher = $idPub;
        $book->IdAuthor = $idAuthor;
        $book->save();

        session()->flash('success','Книга добавлена');
        return redirect()->route('catalog');
    }
    public function bookEditForm($IdBook)
    {
        $pubs = Publishers::get();
        $genres = Genres::get();
        $authors = Authors::get();
        $book = Books::where('IdBook', $IdBook)->first();

        $genreFlag = $book->IdGenre;
        $pubFlag = $book->IdPublisher;
        $authFlag = $book->IdAuthor;


        return view('bookedit', compact('book', 'pubs', 'genres', 'authors', 'genreFlag', 'pubFlag', 'authFlag'));
    }
    public function bookEdit($IdBook, Request $req)
    {
        $book = Books::where('IdBook', $IdBook)->first();
        $book->Name = $_POST['name'];
        $book->Description = $_POST['description'];
        $book->Price = (int)$_POST['price'];
        $book->Quantity = (int)$_POST['quantity'];
        $book->Image = $_POST['image'];
        $book->Year = (int)$_POST['year'];

        $author = explode(" ", $_POST['authors']);
        $idGenre = Genres::where('Name', $_POST['genre'])->first()->IdGenre;
        $idPub = Publishers::where('Name', $_POST['pub'])->first()->IdPublisher;
        $idAuthor = Authors::where([
            ['Name', '=', $author[0]],
            ['Surname', '=', $author[1]]
        ])->first()->IdAuthor;

        $book->IdGenre = $idGenre;
        $book->IdPublisher = $idPub;
        $book->IdAuthor = $idAuthor;
        $book->save();

        session()->flash('success','Книга изменена');
        return redirect()->route('catalog');
    }
    public function bookRemove($IdBook)
    {
        $book = Books::where('IdBook', $IdBook)->first()->delete();

        session()->flash('success','Книга удалена');
        return redirect()->route('catalog');
    }

}
