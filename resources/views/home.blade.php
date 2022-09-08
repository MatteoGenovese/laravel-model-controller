@extends('layouts.layout')

@section('title', 'home')

@section('main-content')

<div class="container">

    <div class="row">
        @forelse ($movies as $movie)
            <div class="card col-3 p-3" >
                <img src="https://picsum.photos/300/200" class="card-img-top" alt="film">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">{{ $movie->nationality }}</p>
                </div>
            </div>
        @empty
            <h1>non è possibile visualizzare alcun film.</h1>
        @endforelse
    </div>

</div>



@endsection
