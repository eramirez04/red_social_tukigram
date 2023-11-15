<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
use App\Models\User;
use Illuminate\Support\Facades\App;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request){

        $registro = $this->validate($request ,[
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
            'remember_token' => 'required'
        ]);
        $re = usuarios::create($registro);
    }
}
