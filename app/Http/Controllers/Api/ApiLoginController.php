<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
Use App\Models\Image;

class ApiLoginController extends Controller {

    public function index()
    {

    }

    public function show($id) {

        $user = User::find($id)->images;

        return response()->json([
            "mensaje" => "hola mundo desde la api",
            "user" => $user
        ]);

    }

}
