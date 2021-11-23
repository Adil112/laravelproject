<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BooksRequests;
use App\Models\Requests;
use Illuminate\Http\Request;

class CartController extends Controller
{

    protected $fillable = ['IdBook'];
    public function cart(){

        $requestId = session('req');
        $request = new Requests();

        if(!is_null($requestId))
        {
            $request = Requests::where('IdRequest',$requestId)->first();
        }
        return view('cart', compact('request'));
    }

    public function cartAdd($IdBook, Request $req2)
    {

        $count = $req2->num;
        //$id = $req2->id;
        $id = $IdBook;
        $requestId = session('req');
        if(is_null($requestId))
        {
            $request = Requests::create()->id;
            session(['req' => $request]);

        }
        else{
            $request = Requests::where('IdRequest', $requestId)->first();
        }
        $br = new BooksRequests;
        $br->IdBook = $id;
        $br->IdRequest = $request->IdRequest;
        $br->Quantity = $count;
        $br->save();


        return view('cart', compact('request'));
    }

    public function cartRemove($IdBook)
    {
        $requestId = session('req');
        if(is_null($requestId))
        {
            $request = null;
            return view('cart', compact('request'));
        }
        $request = Requests::where('IdRequest', $requestId)->first();
        //$request->books_requests()->detach($IdBook); удалить запись с книгой из промежуточной таблицы
        return view('cart', compact('request'));
    }


}
