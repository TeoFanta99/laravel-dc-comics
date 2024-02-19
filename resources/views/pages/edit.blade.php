@extends('layouts.main-layout')
@section('head')
    <title>EDIT</title>
@endsection
@section('content')
<h1>
    [{{$comic -> id}}]
    EDIT COMIC
</h1>

<form 
    action="{{route('comics.update', $comic -> id)}}"
    method="POST"
>

    @csrf
    @method('PUT')

    <label for="title">Titolo</label>
    <input type="text" name="title" id="title" value="{{$comic -> title}}">
    <br>
    @error ('title')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <label for="author">Autore</label>
    <input type="text" name="author" id="author" value="{{$comic -> author}}">
    <br>
    @error ('author')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <label for="price">Prezzo</label>
    <input type="text" name="price" id="price" value="{{$comic -> price}}">
    <br>
    @error ('price')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <input type="submit" value="UPDATE">
</form>

@endsection
