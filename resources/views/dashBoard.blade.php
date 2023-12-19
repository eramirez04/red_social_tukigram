@extends('layaout.app')

@section('titulo-pagina')
     usuario
@endsection

@section('titulo')
    Hola desde el dashboard
@endsection


@section('contenido')

    <div class="md:flex items-center text-center flex-col">
        <div class="md:w-6/12">
            <img src="{{asset('img/perfil2.png')}}" class="rounded-3xl h-7 border w-5" alt="imagen de usuario">
        </div>

        <div class="text-gray-500 font-extrabold">
            Hola¡¡
            {{auth()->user()->name}}
        </div>
        <div>
            <a href="{{route('post.show',auth()->user()->id)}}">Ver perfil</a>
        </div>

        <div>
            <form action="{{route('login.logout')}}" method="post">
                @csrf
                <input type="submit" value="Cerrar sesion">
            </form>
        </div>
    </div>

@endsection
