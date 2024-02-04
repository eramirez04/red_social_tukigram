<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Comments;

class PostController extends Controller
{

    public function index(){
        $post = User::select('users.name','images.id' ,'images.description', 'images.image','images.created_at')
            ->join('images','users.id', '=', 'images.user_id')->get();


        return view('Posts.PostIndex',compact('post'));
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

        return redirect()->route('post.index')
            ->with('mensaje', 'publicacion generada');
    }

    public function show($post){

      // post = Comments::where('image_id',$post)->get();

        $posts = Image::with('comments')->find($post);

        return view('Posts.PostShow',compact('posts'));
    }

}
