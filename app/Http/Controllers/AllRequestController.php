<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Requests;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;


class AllRequestController extends Controller
{
    public function allrequest(){
        $requests = Requests::all()->where('Status','=', '1');

        return view('allrequest', compact('requests'));
    }
    public function download()
    {
        $req = Requests::all();

        $req->toArray();

        Storage::disk('public')->put('requests.json', json_encode($req));

        $file= "..\storage\app\public/requests.json";
        $headers = array(
            'Content-Type: application/json'
        );
        return \Illuminate\Support\Facades\Response::download($file,'requests.json',$headers);
    }


}
