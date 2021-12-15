<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Requests;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('user', compact ('users'));
    }
}
