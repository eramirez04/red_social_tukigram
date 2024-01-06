<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PostController extends Controller
{

    public function index(){

        if (!auth()->user()){
            return redirect()->route('login.index')->with('no-registro','no has iniciado sesion');
        }
        return view('dashboard');
    }

    public function show(){
        return view('perfil',auth()->user());
    }

}
