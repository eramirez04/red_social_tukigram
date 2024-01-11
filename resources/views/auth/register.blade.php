@extends('layaout.app')

@section('titulo-pagina')
    Registro de usuarios
@endsection


@section('titulo')

@endsection

@section('contenido')

    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-1/2 p-5">
            <img class="rounded-3xl" src="{{ asset('img/register.jpg') }}" alt="Imagen registro de usuarios" >
            <a href="{{route('login.index')}}" class="mt-4 text-white bg-gradient-to-r from-cyan-500 to-blue-500
             hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800
              font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Iniciar Sesion</a>
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-2xl">
            <form action="{{route('register.store')}}" method="post">
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
                    <input type="text" id="userName" name="username" placeholder="UserName" class="border p-3 w-full rounded-lg
                    @error('username') border-red-500 @enderror"
                    value="{{old('username')}}">
                    @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-l text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">E-mail</label>
                    <input type="text" id="email" name="email" placeholder="E-mail" class="border p-3 w-full rounded-lg
                    @error('email') border-red-500 @enderror"
                           value="{{old('email')}}">
                    @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-l text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="password" class="border p-3 w-full
                     rounded-lg">
                    @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-l text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Repetir Contraseña</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                           placeholder="password_confirmation" class="border p-3 w-full rounded-lg">
                    @error('password_confirmation')
                    <p class="bg-red-500 text-white my-2 rounded-l text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-900 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>

@endsection
