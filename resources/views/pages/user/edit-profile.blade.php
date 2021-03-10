@extends('layouts.app')

@section('content')
    <div class="container">
<form class="col-sm-6 m-auto" action="/dashboard/settings" method="post">
    
    <div class="mb-3">
    <label for="name" class="form-label">Your name</label>
    <input type="text" class="form-control{{ $errors->first('background_color') ? 'is-invalid' : '' }} form-control-lg" id="exampleFormControlInput1" name="name" value="{{$user->name}}">
    </div>

    @csrf
    <button type="submit" class="btn btn-lg btn-primary{{ session('success') ? 'is-valid' : '' }}">Update settings</button>
        @if(session('success'))
            <div class="valid-feedback">{{ session('success') }}</div>
        @endif

        
  </form>
</div>
@endsection