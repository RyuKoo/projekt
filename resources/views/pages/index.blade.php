@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">

        <h1></h1>
        <p></p>
        <p>
            @guest
            <h2>Wykonuj swoją pracę jak najlepiej</h2>
            <p>Zacznij bezpłatnie!</p>
            <a class="btn btn-primary btn-lg" href="/login" role="button">Zaloguj się</a>
            lub
            <a class="btn btn-success btn-lg" href="/register" role="button">Zarejestruj</a>
            @endguest
        </p>
    </div>
@endsection