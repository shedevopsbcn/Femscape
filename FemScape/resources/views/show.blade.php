<!DOCTYPE html>
@extends('layouts.app')

@section('connected')
    <a href="{{route('create')}}"><img src="{{ asset('assets/images/Create-icon.svg') }}" class="navbar-icons" alt=""></a>
    <a href=""><img src="{{ asset('assets/images/Logout-icon.svg') }}" class="navbar-icons logout" alt=""></a>
@endsection

@section('content')
<div class="container" style="margin-top: 4rem;">
    <div class="row">
        <div class="col-md-6">
            <div class="d-flex justify-content-center align-items-center" style="margin-right: -10rem;">
                <img class="rounded-4" src="{{ $trip->image }}" alt="{{ $trip->place }}" width="456" height="457">
            </div>
        </div>
        <div class="col-md-5 d-flex flex-column">
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="color: #FF0060; font-weight: bold;">{{ $trip->place }}</h3>
                <div class="d-flex">
                    <a href="{{route('edit')}}"><img src="{{ asset('assets/images/Edit-icon.svg') }}" class="m-1" alt=""></a>
                    <form action="{{route('destroy', $trip)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="delete-button" type="submit"><img src="{{ asset('assets/images/Delete-icon.svg') }}" class="m-1" alt=""></button>
                    </form>
                </div>
            </div>
            <p style="color: #FF0060;">{{ $trip->country }}</p>
            <p style="color: #0079FF; margin-top: 1rem;">{{ $trip->description }}</p>
        
        </div>
    </div>
</div>


@endsection

