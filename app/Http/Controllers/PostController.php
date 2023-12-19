<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PostController extends Controller
{

    public function index(){
        return view('dashboard',auth()->user());
       // dd(auth()->user()); // -> deberia aparecer null porque no se autentica el usuario

    }

    public function show($id){
        $perfil = User::find($id);

        return view('perfil',auth()->user(),compact('perfil'));
    }

}
