<?php

namespace App\Http\Controllers\Register;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller {
    public function index(){
       return view('auth.login');
    }

    public function store(Request $request){
        $this->validate($request,[
            'email' => 'required | email',
            'password' => 'required'
        ]);

     if (!auth() ->attempt($request->only('email', 'password'))){
         return back() -> with('mensaje','credenciales incorrectas');
     }

     return  redirect()->route('post.index');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login.index');
    }
}
