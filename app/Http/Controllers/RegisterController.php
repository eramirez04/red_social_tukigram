<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
use App\Models\User;
use Illuminate\Support\Facades\App;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request){
      //  dd($request);

         $registro = $this->validate($request, [
           'name' => 'required | min:3 ',
            'username' => 'required | min:3 | max:20 | unique:users',
            'email' => 'required | min:3 | max:90 | unique:users',
            'password' => 'required',
             'password_confirmation' => 'required'
        ]);
        $registrar = usuarios::create($registro);
    }
}
