<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('titulo-pagina')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
    <!-- Styles -->
</head>
<body>
   <header class="flex justify-between p-5 border-b bg-white shadow">
       <h1 class="text-3xl font-black">
           tukigram
       </h1>
       <a href="{{route('register.index')}}">Crear Cuenta</a>
   </header>

    <main class="container mx-auto mt-10">

        <h2 class="font-black text-center text-3xl mb-10">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>

    <footer class="text-center p-5 text-gray-500 font-bold uppercase">

        Tukigram - Todos lo derechos reservados {{date('y')}}
    </footer>




</body>
</html>
