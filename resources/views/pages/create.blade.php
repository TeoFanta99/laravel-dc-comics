@extends('layouts.main-layout')
@section('head')
    <title>CREATE</title>
@endsection
@section('content')
<h1>NEW COMIC</h1>
<form 
    action="{{route('comics.store')}}"
    method="POST"
>

    @csrf
    @method('POST')

    <label for="title">Titolo</label>
    <input type="text" name="title" id="title">
    <br>
    @error ('title')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <label for="author">Autore</label>
    <input type="text" name="author" id="author">
    <br>
    @error ('author')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <label for="price">Prezzo</label>
    <input type="text" name="price" id="price">
    <br>
    @error ('price')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <input type="submit" value="CREATE">
</form>

@endsection
