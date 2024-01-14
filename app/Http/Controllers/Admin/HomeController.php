<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller {


    public function index() {


        return view('admin.index');

    }

    public function destroy($request) {
        $user = User::find($request);
        $user->delete();

        return redirect()->route('admin.show');

    }

}
