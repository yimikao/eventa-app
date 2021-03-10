
@extends('layouts.app')


@section('content')
        <div class="contaier text-center text-indigo-900 mt-5">
            <h1>{{ $event->theme }}</h1>
            <p>{{ $event->caption }}</p>
            <p>{{ $event->category}}</p>
            <p>{{ $event->registrations->count() }} people are attending</p>

            <h4>Hosted by: {{ $event->user->name }}</h4>

            <button id= "btn" type="button" class="btn btn-primary btn-lg"><a href="/events/{{ $event->id }}/register">Register</a> </button>
            @auth
                        <button id= "btn" type="button" class="btn mt-3 btn-primary btn-lg"> <a href="/dashboard/events/{{ $event->id }}/edit">Edit event</a></button>

                    @endauth

            
        </div>
    
@endsection()