@extends('layouts/app')

@section('content')
 <div class="container">
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method ('PUT')
        <div>
            <label for="title">TITOLO</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$comic->title}}">
        </div>
        <div>
            <label for="description">DESCRIZIONE</label>
            <input class="form-control" type="textarea" name="description" id="description" value="{{$comic->description}}">
        </div>
        <div>
            <label for="thumb">IMMAGINE COPERTINA</label>
            <input class="form-control" type="text" name="thumb" id="thumb" value="{{$comic->thumb}}">
        </div>
        <div>
            <label for="price">PREZZO</label>
            <input class="form-control" type="text" name="price" id="price" value="{{$comic->price}}">
        </div>
        <div>
            <label for="series">SERIE</label>
            <input class="form-control" type="text" name="series" id="series" value="{{$comic->series}}">
        </div>
        <div>
            <label for="sale_date">DATA PUBBLICAZIONE</label>
            <input class="form-control" type="date" name="sale_date" id="sale_date" value="{{$comic->sale_date}}">
        </div>
        <div>
            <label for="type">TIPO</label>
            <input class="form-control" type="text" name="type" id="type" value="{{$comic->type}}">
        </div>
        <button type="submit" class="btn btn-primary">Salva modifiche</button>
    </form>
 </div>
@endsection