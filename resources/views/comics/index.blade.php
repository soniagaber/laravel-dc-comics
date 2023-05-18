@extends('layouts/app')

@section('content')
<div class="container">
                <ul>
                    @foreach($comics as $comic)
                    <li><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></li>
                    @endforeach
                </ul>

                <a class="btn btn-primary" href="{{route('comics.create')}}">Aggiungi un fumetto alla lista</a>
</div>
@endsection