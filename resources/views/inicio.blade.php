@extends('layaout.app')

@section('titulo-pagina')
    Incio
@endsection

@section('navigation')
    <nav class="border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse
                 md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                    <li>
                        <a href="{{route('post.index')}}" class="block py-2 px-3 md:p-0 text-white bg-blue-700 rounded
                         md:bg-transparent md:text-blue-700 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent"
                           aria-current="page">Perfil</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100
                         md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500
                         dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Crear publicacion</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100
                        md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500
                         dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent
                        md:border-0 md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700
                        dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endsection

@section('contenido')


    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-1/6 p-5">
            <form action="{{route('image.store')}}" method="post" enctype="multipart/form-data" class="divide-y">
                @csrf
                <span> {{auth()->user()->username}}</span>

                <div class="">
                    <label>Descripcion</label>
                    <input type="text" name="description" id="description"
                           placeholder="Escribe un comentario" class="border p-3 w-full rounded-lg">
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
                    <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                         role="alert">
                        <span class="font-medium">Info !</span> <p>{{Session::get('mensaje')}}</p>
                    </div>
                @endif
            </div>

        </div>

        <div class="md:w-5/6 bg-white p-6 rounded-lg shadow-xl">
            <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>
        </div>

    </div>

@endsection
