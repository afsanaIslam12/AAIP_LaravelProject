@extends('layouts.app')

@section('content')


<div class="alumni-directory" style="margin-left: 500px">


<div class="card" style="width: 18rem;">
    <img src="image/std1.JPG" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Nafiur Rahman</h5>
      <p class="card-text">Department of CSE</p>
      <a href="{{ url('/') }}/student-profile-1" class="btn btn-primary">View Profile</a>
    </div>
  </div>


</div>
  @endsection
