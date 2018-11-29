@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-info"> Powrót </a>
    <h1> {{$post->title}} </h1>
        <div>
            {!!$post->body!!}
        </div>
<hr>

    <small> Utworzono {{$post->created_at}} przez {{$post->user->name}} </small>

<hr>

    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary"> Edytuj </a>

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])  !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Usuń', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        @endif
    @endif
@endsection