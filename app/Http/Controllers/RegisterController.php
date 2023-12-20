<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request){
      //  dd($request);

        // request = Es una peticion

        $request->request->add(['username'=> Str::slug($request->username)]);

          $this->validate($request, [
           'name' => 'required | min:3 ',
            'username' => 'required | min:3 | max:20 | unique:users',
            'email' => 'required | min:3 | max:90 | unique:users',
            'password' => 'required',
             'password_confirmation' => 'required'
        ]);

         // :: -> para tener una propiedad estatica, en este caso hace referncia al modelo
        // la propiedad  create() insert en la tabla de datos, remplazando
        // el codigo SQL
        User::create([
            'name'=> $request->name,
            'username'=>$request -> username,
            'email'=>$request->email,
            'password' => $request->password
            // 'password' => Hash::make($request->password)  para encriptar las contraseñas
        ]);

       // auth()->attempt($request -> only('email','password'));

        // redireccionar
        return redirect()->route('login.index');
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'name' => 'required',
            'username' => 'required | min: 3',
            'email' => 'required | email'
        ]);

        $update = User::find($id);
        $update -> update($request->all());

        return redirect()->route('post.index')
            ->with('update', 'informacion actualizada');
    }
}
