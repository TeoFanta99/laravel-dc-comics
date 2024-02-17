@extends('layouts.main-layout')
@section('head')
    <title>INDEX</title>
@endsection
@section('content')
    <h1>Comics: {{ count($comics) }}</h1>
    <button>
        <a href="{{route('users.create')}}">ADD NEW</a>
    </button>
    <br>
    <br>
    <ul>
    @foreach ($comics as $comic)
        <li>
            <a href="{{route('users.show', $comic -> id)}}">
                {{$comic -> title}}
            </a>
            <form method="POST" action="{{route('users.destroy', $comic -> id)}}" class="d-inline-block">

                @csrf
                @method('DELETE')

                <input type="submit" value="X">
            </form>
        </li>
    @endforeach  
    </ul>
@endsection
