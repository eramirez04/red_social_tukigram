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
    <div class="">
        <div class="">
            <form action="{{route('image.store')}}" method="post" enctype="multipart/form-data" class="divide-y">
                @csrf
                <span> {{auth()->user()->name}}</span>

                <div class="">
                    <label>Descripcion</label>
                    <input type="text" name="description" id="description"
                           placeholder="Escribe un comentario" class="border p-3 w-full rounded-lg">
                </div>
                <div class="">
                    <label></label>
                    <input type="file" name="file" id="" class="border p-3 w-full rounded-lg">
                </div>
                <input type="submit" value="Publicar">
            </form>
        </div>
    </div>

    <div>asdf</div>

@endsection
