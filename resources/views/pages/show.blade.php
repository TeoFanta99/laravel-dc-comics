@extends('layouts.main-layout')
@section('head')
    <title>SHOW</title>
@endsection
@section('content')
    <h1>
        [
            {{$comic -> id}}
        ]
        Comic: 
        {{$comic -> title}}
    </h1>
    <span>
        Autore: 
        {{$comic -> author}}
    </span>
    <br>
    <span>
        Prezzo: 
        {{$comic -> price}}
    </span>

@endsection
