<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PostController extends Controller
{

    public function index(){
        return view('dashboard');
    }

    public function show(){
        return view('perfil',auth()->user());
    }

}
