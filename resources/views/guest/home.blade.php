@extends('layouts.app')

@section('title', 'Laravel Model Controller')

@section('main-section')
    <div class="card-container d-flex flex-wrap">
        @foreach($movies as $movie)
            <div class="card m-3" style="width: calc(100% / 5 - 2rem);">
                <div class="card-body text-center">
                    <p><span>Title:</span> {{ $movie['title'] }}</p>
                    <hr>
                    <p><span>Original title:</span> {{ $movie['original_title'] }}</p>
                    <hr>
                    <p><span>Nationality:</span> {{ $movie['nationality'] }}</p>
                    <hr>
                    <p><span>Release date:</span> {{ $movie['date'] }}</p>
                    <hr>
                    <p><span>Vote:</span> {{ $movie['vote'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="w-50 m-auto">
        <img src="{{ Vite::asset('resources/img/undertale.gif') }}" alt="Undertale Gif" class="w-100"> {{-- credits to Joe Burak (source: https://www.artstation.com/artwork/lLNWO) --}}
    </div>
@endsection