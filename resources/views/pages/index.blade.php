@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Projekt Laravel</h1>
        <p>Fajne serio</p>
        <p>
            @guest
            <a class="btn btn-primary btn-lg" href="/login" role="button">Zaloguj się</a>
            lub
            <a class="btn btn-success btn-lg" href="/register" role="button">Zarejestruj</a>
            @endguest
        </p>
    </div>
@endsection