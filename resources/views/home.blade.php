@extends('layouts/app')

@section('content')
<div id="app-content">
    <div class="container">
        @foreach ($comics as $comic)
         <div class="col-4 comic-card">

            <div class="comic-card-inner">
                <div class="card-container">
                    <img src="{{$comic['thumb']}}" alt="immagine pasta">
                    {{$comic['series']}}
                </div>
            </div>
         </div>
        @endforeach 
        <!--<AppCard v-for="card in cards" :immagine="card.thumb" :text="card.series"></AppCard>-->
    </div>
    <button> LOAD MORE </button>
</div>
@endsection