@extends('layouts.app')


@section('content')
<h1 class="text-center mb-4" style="font-size:3em">Create event</h1>


  <form action="/dashboard/events/store" method="POST" class="col-sm-6 m-auto">
  @csrf
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Theme</label>
  <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" name="theme">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Caption</label>
  <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="3" name="caption"></textarea>
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Event Image</label>
  <input class="form-control form-control-lg" type="file" id="formFile">
</div>
<div class="mb-3">
<select class="form-select form-control-lg" aria-label=".form-select-lg example" name="category">
  <option selected>Select Category</option>
  <option value="Tech">Tech</option>
  <option value="Business">Business</option>
  <option value="Religion">Religion</option>
</select>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Date</label>
<input type="date" class="form-control form-control-lg" id="exampleFormControlInput1" name="date"> 
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Time</label>
  <input type="time" class="form-control form-control-lg" id="exampleFormControlInput1" name="time">
</div>

<!-- <br> -->


  <button type="submit" class="btn btn-primary btn-lg">Create event</button>
</form>
</div>
@endsection()