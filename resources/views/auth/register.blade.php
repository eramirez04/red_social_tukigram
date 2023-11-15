@extends('layaout.app')

@section('titulo-pagina')
    Registro de usuarios
@endsection


@section('titulo')
    Hola desde el register
@endsection

@section('contenido')

    <div class="md:flex bg-sky-300">
        <div class="md:w-1/2">
            <img src="{{ asset('img/register.jpg') }}" alt="Imagen registro de usuarios">
        </div>
        <div class="md:w-1/2 bg-amber-200">
            <form action="" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-1 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input type="text" id="name" name="name" placeholder="name" class=" boder p-3 w-1/2 rounded-lg">
                    @error('name')
                        <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">userName</label>
                    <input type="text" id="userName" name="username" placeholder="UserName" class="boder p-3 w-full rounded-lg">
                    @error('username')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">E-mail</label>
                    <input type="text" id="email" name="email" placeholder="E-mail" class="boder p-3 w-full rounded-lg">
                    @error('email')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="password" class="boder p-3 w-full rounded-lg">
                    @error('password')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Repetir Contraseña</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="password_confirmation" class="boder p-3 w-full rounded-lg">
                    @error('password_confirmation')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-900 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">

                @if(Session::has('mensaje'))
                    <div>{{Session::get('mensaje')}}</div>
                @endif
            </form>
        </div>
    </div>

@endsection
