<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\User;
    use Illuminate\Support\Facades\Storage;
    use App\Http\Requests\UpdateRegister;
    use function Sodium\add;

    class UserController extends Controller {

        public function index()
        {

        }

        public function edit(string $id) {

            $user = User::select('id', 'name', 'username', 'email', 'foto')->find($id);
            return view('perfil', compact('user'));

        }

        public function update(UpdateRegister $request, $id)
        {
            /*$datos = request()->except('_token','_method');

            if ($request->hasFile('foto')){
                $usuario = User::findOrFail($id);
                Storage::delete(['public/'. $usuario->foto]);
                $foto['foto'] = $request->file('foto')->store('profile','public');
            }

            $post = User::find($id);
            $post->update($datos);
            User::where('id', '=', $id)->update($foto);

            return redirect()->route('post.index')
                ->with('update', 'informacion actualizada'); */
        }


        public function destroy($registro)
        {
            $registro = User::find($registro);
            $registro->delete();

            return redirect()->route('register.index');
        }
    }
