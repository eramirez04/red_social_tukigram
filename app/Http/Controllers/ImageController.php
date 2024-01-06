<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ImageController extends Controller {

    public function index() {
        return view('inicio', auth()->user());
    }


    public function create() {
        //
    }

    public function store(Request $request) {

        $datos = request()->except('_token');
        $this->validate($request,[
            'file' => 'required'
        ]);

        if ($request->hasFile('file')){
            $datos['file'] = $request->file('file')->store('uploads','public');
        }

       Image::create([
            'description'=> $request->description,
            'image' => $datos['file'],
            'user_id'=>$request->user_id
        ]);

        return redirect()->route('publication.index')
         ->with('mensaje', 'publicacion generada');
    }

    public function show(){
        $image['publications'] = User::select('users.name','images.id' ,'images.description', 'images.image','images.created_at')
            ->join('images','users.id', '=', 'images.user_id')->get();

        return view('inicio',$image);


    }

    public function edit(Image $image) {

    }

    public function update(Request $request, Image $image) {

    }


    public function destroy(Image $image) {

    }
}
