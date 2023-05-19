@extends('layouts/app')

@section('content')
    <div id="comic-container" class="container">
        <div class="row">
            <div class="col-4 offset-4" >
                <img id="immagine-copertina" src="{{$comic->thumb}}" alt="">
            </div>
        </div>
        <div class="row"><strong>TITOLO:</strong>
        {{$comic->title}}</div>
        <div class="row"><strong>DESCRIZIONE:</strong>
            {{$comic->description}}</div>
            <div class="row"><strong>PREZZO:</strong>
                {{$comic->price}}</div>
                <div class="row"><strong>SERIE:</strong>
                    {{$comic->series}}</div>
                    <div class="row"><strong>DATA DI PUBBLICAZIONE:</strong>
                        {{$comic->sale_date}}</div>
                        <div class="row"><strong>TIPO:</strong>
                            {{$comic->type}}</div>

                            <a class="btn btn-primary" href="{{route('comics.edit', $comic->id)}}">Modifica il fumetto</a>
                            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Cancella il fumetto</button>
                            </form>
    </div>
@endsection