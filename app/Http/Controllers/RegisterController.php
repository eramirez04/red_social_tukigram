<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreRegister;
use App\Http\Requests\UpdateRegister;
use function PHPUnit\Framework\isEmpty;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
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
        return redirect()->route('login.index')->with('registro','se creo la cuenta');

    }

    public function update(UpdateRegister $request, $id){

         $datos = request()->except('_token','_method');

        if ($request->hasFile('foto')){
            $usuario = User::findOrFail($id);
            Storage::delete(['public/'. $usuario->foto]);
            $foto['foto'] = $request->file('foto')->store('profile','public');
        }

        $post = User::find($id);
        $post->update($datos);
        User::where('id', '=', $id)->update($foto);

        return redirect()->route('post.index')
            ->with('update', 'informacion actualizada');
    }

    public function destroy($registro){
        $registro = User::find($registro);
        $registro->delete();

        return redirect()->route('register.index');
    }
}
