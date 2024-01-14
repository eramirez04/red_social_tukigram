<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use App\Models\Image;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request){

        //return $request;

        $this->validate($request,[
            'comment' => 'required'
        ]);

        Comments::create([
           'comment' => $request->comment,
            'fk_id_user' => $request->user_id,
            'fk_id_image' => $request->id_image
        ]);

        return redirect()->route('comment.show',$request->id_image);
    }

    /**
     * Display the specified resource.
     */
    public function show($comments){
        $fk_id_image['comments'] = $comments;

         $comentarios['comentarios'] = Comments::all()->where('fk_id_image',$comments);

        return view('comments',$comentarios,$fk_id_image);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comments $comments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comments $comments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comments $comments)
    {
        //
    }
}
