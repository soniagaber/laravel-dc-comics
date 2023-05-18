@extends('layouts/app')

@section('content')
 <div class="container">
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div>
            <label for="title">TITOLO</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="description">DESCRIZIONE</label>
            <input type="textarea" name="description" id="description">
        </div>
        <div>
            <label for="thumb">IMMAGINE COPERTINA</label>
            <input type="text" name="thumb" id="thumb">
        </div>
        <div>
            <label for="price">PREZZO</label>
            <input type="text" name="price" id="price">
        </div>
        <div>
            <label for="series">SERIE</label>
            <input type="text" name="series" id="series">
        </div>
        <div>
            <label for="sale_date">DATA PUBBLICAZIONE</label>
            <input type="date" name="sale_date" id="sale_date">
        </div>
        <div>
            <label for="type">TIPO</label>
            <input type="text" name="type" id="type">
        </div>
        <button type="submit" class="btn btn-primary">Ok</button>
    </form>
 </div>
@endsection