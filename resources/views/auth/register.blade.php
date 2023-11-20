@extends('layaout.app')

@section('titulo-pagina')
    Registro de usuarios
@endsection


@section('titulo')
    Hola desde el register
@endsection

@section('contenido')

    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-1/2 p-5">
            <img class="rounded-3xl" src="{{ asset('img/register.jpg') }}" alt="Imagen registro de usuarios" >
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-2xl">
            <form action="" method="post">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input type="text" id="name" name="name" placeholder="name" class=" border p-3 w-full rounded-lg
                    @error('name') border-red-500 @enderror" value="{{old('name')}}">
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-l text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">userName</label>
                    <input type="text" id="userName" name="username" placeholder="UserName" class="border p-3 w-full rounded-lg"
                    value="{{old('username')}}">
                    @error('username')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">E-mail</label>
                    <input type="text" id="email" name="email" placeholder="E-mail" class="border p-3 w-full rounded-lg" value="{{old('email______****_*-+')}}">
                    @error('email')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="password" class="border p-3 w-full rounded-lg">
                    @error('password')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Repetir Contraseña</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="password_confirmation" class="border p-3 w-full rounded-lg">
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
