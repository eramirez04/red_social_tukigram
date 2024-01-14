@extends('adminlte::page')

@section('title', 'Lista de usuarios')

@section('content_header')
    <h1>lista de usuarios</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>




    <div class=accent-sky-700"">
        <table class="">
            <thead class="">
            <tr>
                <th scope="col" class="">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    name
                </th>
                <th scope="col" class="px-6 py-3">
                    Username
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    password
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $usuario)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6  font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$usuario->id}}
                    </th>
                    <td class="px-6 py-4">
                        {{$usuario->name}}
                    </td>
                    <td class="px-6 py-4">
                        {{$usuario->username}}
                    </td>
                    <td class="px-6 py-4">
                        {{$usuario->email}}
                    </td>
                    <td class="px-6 py-4">
                        {{$usuario->password}}
                    </td>
                    <td class="">
                        <form action="{{route('admin.destroy',$usuario->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>







@stop
