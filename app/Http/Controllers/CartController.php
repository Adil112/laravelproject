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

    public function cartAdd(Request $req2)
    {

        $count = $req2->num;
        $id = $req2->id;
        $requestId = session('req');

        if(is_null($requestId))
        {
            $request = Requests::create()->id;
            session(['req' => $request->id]);

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

}
