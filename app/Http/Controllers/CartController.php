<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\BooksRequests;
use App\Models\Pays;
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
        $book = Books::where('IdBook', $IdBook)->first();
        if($count > $book->Quantity)
        {
            session()->flash('warning','Недостаточно экземпляров книги на складе');
            return redirect()->route('book',  $book->IdBook);
        }
        //$id = $req2->id;
        $id = $IdBook;
        $requestId = session('req');
        if(is_null($requestId))
        {
            $request = Requests::create();
            $requestId = $request->IdRequest;
            session(['req' => $requestId]);
        }
        else{
            $request = Requests::where('IdRequest', $requestId)->first();
        }

        $br = new BooksRequests;
        $br->IdBook = $id;
        $br->IdRequest = $requestId;
        $br->Quantity = $count;
        $br->save();

        return redirect()->route('cart');
    }

    public function cartRemove($IdBook)
    {
        $requestId = session('req');
        if(is_null($requestId))
        {
            $request = null;
            return redirect()->route('cart');
        }
        $request = Requests::where('IdRequest', $requestId)->first();

        $br = BooksRequests::where('IdBook', $IdBook);
        $br->delete();

        return redirect()->route('cart');
    }
    public function reqConf()
    {
        $requestId = session('req');
        $request = new Requests();

        if(!is_null($requestId))
        {
            $request = Requests::where('IdRequest',$requestId)->first();
        }
        else{
            return view('home');
        }
        $pays = Pays::get();
        return view('/requestconfirm', compact('request', 'pays'));
    }
    public function requestConfirm(Request $req)
    {
        $selectPay = $_POST['option'];
        $IdPay = 0;
        $pays = Pays::get();
        foreach($pays as $el)
        {
            if($el->Name == $selectPay) $IdPay = $el->IdPay;
        }
        $requestId = session('req');

        if(is_null($requestId))
        {
            return redirect()->route('cart');
        }
        $request = Requests::where('IdRequest', $requestId)->first();
        foreach($request->books_requests as $el)
        {
            $id = $el->IdBook;
            $qReq = $el->Quantity;
            $book = Books::where('IdBook', $id)->first();
            $book->Quantity -= $qReq;
            if($book->Quantity >= 0) $book->save();
            else {
                session()->flash('warning','Недостаточно экземпляров книги на складе');
                return redirect()->route('cart');
            }


        }

        $fullPrice = $request->calculate();

        $request->Status = 1;
        $request->Price = $fullPrice;
        $request->Address = $req->address;
        $request->Phone = $req->phone;
        $request->IdPay = $IdPay;
        $request->save();

        session()->forget('req');

        session()->flash('success','Ваш заказ принят');
        return redirect()->route('catalog');
    }


}
