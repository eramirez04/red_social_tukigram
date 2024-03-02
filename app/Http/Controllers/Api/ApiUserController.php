<?php

    namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\StoreRegister;
    use App\Models\User;
    use App\Http\Requests\UpdateRegister;

    class ApiUserController extends Controller
    {

        public function index()
        {
            //devuelve a la api todos los usuarios que existen en la base de datos
            $users = User::all(['id','name','username','email']);
            return response()->json(['status' => true,
                'users' => $users], 200);
        }


        // crear un nuevo usuario en la base de datos
        public function store(StoreRegister $request){

            $user = User::create($request->all());

            return response()->json(['status' => true,
                'message' => "Product Created successfully!",
                'product' => $user
            ], 200);
        }

        public function show(string $id) {

            // retorna los comentarios que ha hecho un usuario
            $user = User::with('comments')->find($id);
            return response()->json(["status" => true, "user" => $user]);
        }



        public function update(UpdateRegister $register, $id) {

            $post = User::find($id);

            $post->update($register->all());

            return response()->json([
                "estatus" => 200,
                "mensaje" => "se actualizo el usuario",
                "usesr" => $post
            ],200);
        }



        public function destroy($id){
            $user = User::find($id);

            if ($user){
                $user->delete();
                $mensaje = "user deleted";
            }else{
                $mensaje = "no se encontro el usuario";
            }

            return response()->json([
                "status" => 200,
                "mensaje" => $mensaje
            ],200);
        }
    }
