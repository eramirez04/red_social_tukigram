@extends('layaout.app')


@section('titulo-pagina')
    Perfil
@endsection

@section('navigation')
     <a href="{{route('post.index')}}">Perfil</a>
@endsection


@section('contenido')
    <div class="md:flex items-center justify-end">
        <form action="{{route('register.destroy',auth()->user()->id)}}" method="post">
            @csrf
           {{method_field('DELETE')}}

            <input type="submit" value="Eliminar mi cuenta">
        </form>
    </div>
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-2xl">

            {{-- enrutamos la ruta para llamar al metodo update que se encuentra en el controlador --}}
            <form action="{{route('register.update',auth()->user()->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-5">
                    <label>Nombre</label>
                    <input type="text" id="name" name="name" value="{{old('name', auth()->user()->name)}}" class="border p-3 w-full rounded-lg">
                    @error('name')
                     <p>{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label>Username</label>
                    <input type="text" id="username" name="username" value="{{auth()->user()->username}}" class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label>Email</label>
                    <input type="text" id="email" name="email" value="{{auth()->user()->email}}"
                           class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label>Foto</label>
                    <input type="file" id="foto" name="foto" value="{{auth()->user()->foto}}"
                           class="border p-3 w-full rounded-lg">
                    @error('foto')
                    <p>{{$message}}</p>
                    @enderror
                </div>
                <input type="submit" value="Editar" class="text-white bg-blue-700 hover:bg-blue-800
            focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2
            dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            </form>
        </div>
    </div>

@endsection
