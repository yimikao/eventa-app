@extends('layouts.app')

@section('content')
<div class="container text-center">
    
    <h1 class="">Display name</h1>
    <div class="col-sm-6 jumbotron m-auto p-4 ">
        <h1 class="" style="font-size:2.5em">{{ $user->name }}</h1>
        <button id= "btn" type="button" class="btn btn-primary btn-lg"> <a href="/dashboard/settings">Edit name</a></button>

    </div><br><br><br>


    <h1 class="mb-4" style="font-size:2em">Your Registrations analysis</h1>

    <h1 class="mb-2">Overall</h1>
    <div class="col-sm-6 jumbotron m-auto p-4">
        <h1 style="font-size:2.5em">{{ $user->registrations->count() }} registrations</h1>
    </div><br>

    <h1 class="mb-2">Registrations per event</h1>

    @foreach($user->events as $event)
        <div class="col-sm-6 jumbotron m-auto p-4 mb-4">
        <h1 style="font-size:1em">{{ $event->theme }}</h1>
            <h1 style="font-size:2.5em">{{ $event->registrations->count() }} registrations</h1>
        </div>
    @endforeach
</div>
@endsection