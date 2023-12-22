@extends('layaout.app')


@section('titulo-pagina')
    TukiGram
@endsection


@section('contenido')

    <div class="flex ">
        <div >
            <a href="{{route('register.index')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Crear Cuenta</a>
        </div>
        <div>
            <a href="{{route('login.index')}}" class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Iniciar Sesion</a>
        </div>
    </div>
@endsection
