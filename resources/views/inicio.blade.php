@extends('layaout.app')

@section('titulo-pagina')
    Incio
@endsection

@section('navigation')

@endsection

@section('contenido')


    <div class="md:flex md:justify-center md:gap-10 md:items-center">


        <div class="md:w-5/6 p-6 rounded-lg shadow-xl bg-slate-200 h-auto">
            <div>
                <form action="{{route('image.store')}}" method="post" enctype="multipart/form-data" class="">
                    @csrf
                    <div class="mb-6">
                        <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">En que estas pensando {{auth()->user()->username}}</label>
                        <input type="text" name="description" id="description"
                               placeholder="Escribe un comentario" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="">
                        <label>Imagen</label>
                        <input type="file" name="file" id="file" class="border p-3 w-full rounded-lg">
                        @error('file')
                        <p>{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                    </div>
                    <input type="submit" value="Publicar" class="focus:outline-none text-white
                     bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300
                     font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600
                     dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                </form>

                <div>
                    @if(Session::has('mensaje'))
                        <x-alert type="info">
                            <x-slot name="title">
                                <p>{{Session::get('mensaje')}}</p>
                            </x-slot>
                        </x-alert>
                    @endif
                </div>
            </div>

            @foreach($publications as $publi)
            <div class="overflow-y-auto ">
                        <div  class="flex justify-center flex-col md:gap-3  p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <span class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Autor:  {{$publi ->name}}
                             </span>
                            <p>  {{$publi -> created_at}}</p>
                           <p>{{$publi ->description}}</p>
                            <div>
                                <img src="{{asset('storage').'/'. $publi->image}}" alt="" class="w-full h-90 bg-cover bg-center h-auto max-w-lg mx-auto">
                            </div>
                            <button>
                                <a href="{{route('comment.show', $publi ->id)}}">
                                    Ver Comentarios
                                </a>
                            </button>
                        </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
