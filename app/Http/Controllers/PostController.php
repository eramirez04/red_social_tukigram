<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function  __construct(){
        $this->middleware('auth');
    }

    public function index(){
        // el dd
        //dd('hola mundo');

        return view('dashBoard',auth()->user());

       // dd(auth()->user()); // -> deberia aparecer null porque no se autentica el usuario

    }
}
