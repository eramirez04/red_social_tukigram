@extends('layaout.app')

@section('titulo-pagina')
     usuario
@endsection

@section('navigation')
    <nav class="flex md:gap-10">
        <div class="h-8">
            <a href="{{route('publication.index')}}" class="text-white bg-blue-700 hover:bg-blue-800
            focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2
            dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
            >Inicio</a>
        </div>
        <div>
            <a href="{{route('post.show',auth()->user()->id)}}">Editar Perfil</a>
        </div>
        <div>
            <form action="{{route('login.logout')}}" method="post">
                @csrf
                <input type="submit" value="Cerrar sesion">
            </form>
        </div>
    </nav>
@endsection

@section('titulo')
    Hola desde el dashboard
@endsection


@section('contenido')

    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12">
            <div class="rounded-full w-96 h-96 bg-blue-200">
                <img class="rounded-full w-96 h-full" src="{{asset('storage'.'/'. auth()->user()->foto)}}" alt="profile picture">
            </div>
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl bg-red-500">
            <div class="text-gray-500 font-extrabold h-8">
                Hola¡¡ {{auth()->user()->name}} <br>
                UserName : {{auth()->user()->username}}
            </div>
        </div>
    </div>
    <div class="border-b-inherit">

    </div>
@endsection
