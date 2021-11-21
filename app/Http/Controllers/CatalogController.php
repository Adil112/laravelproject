<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Books;

class CatalogController extends Controller
{
    public function index(){
        $books = new Books;
        return view('catalog', ['data' => $books->all()]);

    }
}
