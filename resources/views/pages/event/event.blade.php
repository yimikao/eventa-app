
@extends('layouts.app')


@section('content')
        <div class="contaier text-center mt-5">
            <h1 style="color: var(--purple)">{{ $event->theme }}</h1>
            <p style="color: var(--purple)">{{ $event->caption }}</p>
            <h4 style="color: var(--purple)">Hosted by: {{ $event->user->name }}</h4>

            <button id= "btn" type="button" class="btn btn-primary btn-lg"><a href="/events/{{ $event->id }}/register">Register</a> </button>

            
        </div>
    
@endsection()