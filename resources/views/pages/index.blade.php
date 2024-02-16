@extends('layouts.main-layout')
@section('head')
    <title>INDEX</title>
@endsection
@section('content')
    <h1>Comics: {{ count($comics) }}</h1>
    <ul>
    @foreach ($comics as $comic)
        <li>
            <a href="{{route('users.show', $comic -> id)}}">
                {{$comic -> title}}
            </a>
        </li>
    @endforeach
    </ul>
@endsection
