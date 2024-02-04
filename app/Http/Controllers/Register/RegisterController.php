<?php

namespace App\Http\Controllers\Register;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreRegister;
use App\Http\Requests\UpdateRegister;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index() {

        if (!auth()->user()){
            return redirect()->route('login.index');
        }

        $usuarios = User::all(['id','name','username','email']);
        return view('admin.users',compact('usuarios'));
    }

    public function store(StoreRegister $request){

        $request->request->add(['username'=> Str::slug($request->username)]);

        User::create([
            'name'=> $request->name,
            'username'=>$request -> username,
            'email'=>$request->email,
            'password' => $request->password
        ]);

        // redireccionar
        return redirect()->route('login.index')->with('registro','Cuenta creada correctamente');

    }
    public function create()
    {
        return view('auth.register');
    }
}
