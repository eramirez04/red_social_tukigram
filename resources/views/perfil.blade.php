@extends('layaout.app')


@section('titulo-pagina')
    Perfil
@endsection

@section('titulo')
    hola desde perfil
@endsection


@section('contenido')
    <p>{{auth()->user()->name}}</p>

@endsection
