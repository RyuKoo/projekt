@extends('layouts.app')

@section('content')
    <h1> Oferty pracy </h1>
    @if(count($offers) > 0)

        @foreach($offers as $oferta)
            <div class="card card-body bg-light">
                <h3> <a href="/offers/{{$oferta->id}}"> {{$oferta->title}} </a> </h3>
                <small> {{$oferta->min}}-{{$oferta->max}}zł </small>
                <small> Utworzono {{$oferta->created_at}} przez {{$oferta->user->name}} </small>
            </div>
            <br>
        @endforeach
        {{$offers->links()}}
    @else
        <p> Nie znaleziono ofert! </p>
    @endif

@endsection