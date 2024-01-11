@extends('layaout.app')

@section('titulo-pagina')
    Comentarios
@endsection

@section('contenido')


    <form action="{{route('comment.store')}}" method="post">
        @csrf
        <label>
            <input type="text" name="comment" id="comment" class="border">
            @error('comment')
            <p>{{$message}}</p>
            @enderror
        </label>
        <label>
            <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
        </label>

        <input type="submit" value="Comentar">
    </form>

    @foreach($comments as $comment)
        <ol>
            <li>{{$comment -> comment}}</li>
        </ol>
    @endforeach





@endsection
