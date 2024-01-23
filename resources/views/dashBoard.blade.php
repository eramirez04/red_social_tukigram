@extends('layaout.app')

@section('titulo-pagina')
     usuario
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
