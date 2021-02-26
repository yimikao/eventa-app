@extends('layouts.app')


@section('content')
    <form action="/dashboard/events/{{ $event->id }}" method="post">
    @csrf
        <div class="form-group">
            <label for="theme">Theme</label>
            <input type="text" class="form-control input-lg" id="theme" name="theme" placeholder="{{$event->theme}}">
        </div>
        <div class="form-group">
            <label for="caption">Caption</label>
            <textarea class="form-control input-lg" rows="5" id="caption" name="caption"></textarea>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" id="date">
        </div>
        <div class="form-group">
            <label for="time">Time</label>
            <input type="time" name="time" id="time">
        </div>

        
        
        <button type="submit">update</button>
        <button id= "btn" type="button" class="btn btn-secondary btn-lg" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Delete event
        </button>
  </form>

    <form id="delete-form" action="/dashboard/events/{{ $event->id }}" method="post">
        @csrf
        @method('DELETE')
    </form>
</div>
@endsection()