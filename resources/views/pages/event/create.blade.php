@extends('layouts.app')


@section('content')
    <p>k</p>
    <form action="/dashboard/events/store" method="POST">
    @csrf
        <div class="form-group">
            <label for="theme">Theme</label>
            <input type="text" class="form-control input-lg" id="theme" name="theme">
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
        
        <button type="submit">submit</button>
  </form>
</div>
@endsection()