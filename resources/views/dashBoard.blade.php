@extends('layaout.app')

@section('titulo-pagina')
    Perfil de usuario
@endsection

@section('titulo')
    Hola desde el dashboard
@endsection


@section('contenido')

    <div class="md:flex items-center text-center">
        <div class="md:w-6/12">
            <img src="{{asset('img/perfil2.png')}}" class="rounded-3xl h-7 border w-5" alt="imagen de usuario">
        </div>
        <div>
            fadfasdf
        </div>
    </div>

@endsection
