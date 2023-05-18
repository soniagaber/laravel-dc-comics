@extends('layouts/app')

@section('content')
    <div class="container">
        <div><a href="{{route('comics.index')}}">Vedi la lista dei fumetti</a></div>
        <!--@foreach ($comics as $comic)
         <div class="col-4 comic-card">

            <div class="comic-card-inner">
                <div class="card-container">
                    <img src="{{$comic['thumb']}}" alt=" ">
                    {{$comic['series']}}
                </div>
            </div>
         </div>
        @endforeach -->
        <!--<AppCard v-for="card in cards" :immagine="card.thumb" :text="card.series"></AppCard>-->
    <button> LOAD MORE </button>
</div>
@endsection