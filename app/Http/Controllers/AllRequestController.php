<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Requests;


class AllRequestController extends Controller
{
    public function allrequest(){

        $requests = Requests::get();
        return view('allrequest', compact('requests'));
    }

}
