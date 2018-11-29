@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a href="/posts/create" class="btn btn-primary"> Stwórz post </a> <br>
                    <h3> Twoje posty </h3>
                        @if(count($posts) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th> Tytuł </th>
                                    <td> </td>
                                    <td> </td>
                                </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <th> {{$post->title}} </th>
                                    <td> <a href="/posts/{{$post->id}}/edit" class="btn btn-dark"> Edytuj </a></td>
                                    <td>
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])  !!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Usuń', ['class' => 'btn btn-danger'])}}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </table>
                        @else
                            <p> Nie masz postów </p>
                        @endif

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
