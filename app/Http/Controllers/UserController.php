<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateRegister;
use function Sodium\add;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('dashboard',compact('id'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::select('id','name','username','email','foto')->find($id);

        return view('perfil',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRegister $request, $id)
    {
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($registro){
        $registro = User::find($registro);
        $registro->delete();

        return redirect()->route('register.index');
    }
}
