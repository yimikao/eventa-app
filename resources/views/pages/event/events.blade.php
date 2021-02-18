@extends('layouts.app')


@section('content')
    <div class="container text-center mt-5">
        <h1 style="font-weight:bold">Events happen here!</h1>

        @foreach ($events as $event)
        <div class="card mb-5 p-5 col-xs-2">
            <!-- <div class="card-body">Your awesome text</div> -->
            <h4 class="card-title">{{ $event->theme }}</h4>
            <p class=”card-text”> {{ $event->caption }}</p>
            <div class=”card-footer”>Happening on:{{ $event->date }}</div>
            <div class=”card-footer”>At:{{ $event->time }}</div>

        </div>
        <!-- <h2 class="">This is event {{ $event->theme }}</h2> -->
    @endforeach
    </div>
    
@endsection()