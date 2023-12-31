@extends('layouts.app')

@section('content')
    <main class="d-flex flex-wrap justify-content-center" >
        @foreach ($trips as $trip)
            <div class="card b-radius m-3">
                <a href="{{ route('show', $trip->id) }}">
                <img class="b-radius size" src="{{$trip->image}}" alt="">
                <div class="card-body">
                <h5 class="card-title m-0">{{$trip->place}}</h5>
                <p class="card-text">{{$trip->country}}</p>
                </div>
            </div>
        @endforeach
    </main>
@endsection
