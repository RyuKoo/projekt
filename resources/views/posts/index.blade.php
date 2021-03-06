@extends('layouts.app')

@section('content')
    <h1> Posty </h1>
    @if(count($posts) > 0)

        @foreach($posts as $post)
            <div class="card card-body bg-light">
                <h3> <a href="/posts/{{$post->id}}"> {{$post->title}} </a> </h3>
                <small> Utworzono {{$post->created_at}} przez {{$post->user->name}} </small>
            </div>
            <br>
        @endforeach
        {{$posts->links()}}
    @else
        <p> Nie znaleziono postów! </p>
    @endif

@endsection