@extends('layaout.app')

@section('titulo-pagina')
    Comentarios
@endsection

@section('contenido')

    {{$posts->description}}


    <form action="{{route('comment.store')}}" method="post">
        @csrf
        <label>
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
            <textarea id="message" rows="4" name="comment" class="block p-2.5 w-full @error('comment') border-red-500 @enderror text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
            {{-- <input type="text" name="comment" id="comment" class="border" placeholder="Comentario">--}}
            @error('comment')
            <p>{{$message}}</p>
            @enderror
        </label>


        <label>
            <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
            <input type="hidden" value="{{$posts->id}}" name="id_image">
        </label>

        <input type="submit" value="Comentar" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
    </form>





    @foreach($posts->comments as $comment)
        <div>{{$comment->comment}}</div>
    @endforeach


@endsection

