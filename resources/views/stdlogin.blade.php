@extends('layouts.app')

@section('content')

<div class="container">
    <form action="#" name="myform" class="form-group" style="margin-left: 180px">
        <h2 style="margin-left: 200px; font-weight:bold; margin-top: 20px; margin-bottom: 20px">Student Login</h2>
        <div class="row">
            <div class="col-md-4">
                <label for="inputname">Email</label>
                <input type="email" class="form-control" placeholder="Enter Your Name">
            </div>
            <div class="col-md-4">
                <label for="inputpassword">Password</label>
                <input type="password" class="form-control" placeholder="Enter Password">
            </div>

            <div class="col-md-12" style="margin-top:20px; margin-left: 250px">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>

        </div>

    </form>

</div>

@endsection
