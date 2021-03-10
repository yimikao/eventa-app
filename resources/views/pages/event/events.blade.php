
@extends('layouts.app')


@section('content')
        <div class="contaier text-center mt-5">
            <h1 style="color: var(--purple)">All events</h1>

            

            <div class="row d-flex m-auto">
            @foreach ($events as $event)

                <div class="card col-sm-3 m-2 p-5 bg-light text-primary ">
                    
                    <h4 class="card-title"><a class="text-primary" href="/events/{{ $event->id }}">{{ $event->theme }}</a></h4>
                    <p class=”card-text”> {{ $event->caption }}</p>
                    <div class=”card-footer”>Date: {{ $event->date }}</div>
                    <div class=”card-footer”>Time:{{ $event->time }}</div>

                    @auth
                        <button id= "btn" type="button" class="btn btn-primary btn-lg"> <a href="/dashboard/events/{{ $event->id }}/edit">Edit event</a></button>

                    @endauth

                </div>
            @endforeach
            </div>

        </div>
    
@endsection()