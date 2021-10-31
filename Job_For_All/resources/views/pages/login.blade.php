@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="row">
<div class="col-md-9 offset-md-3">
    <form action="{{route('login')}}" class="col-md-6" method="post">
        {{csrf_field()}}<br>
        <span class="text-danger">@if(!empty($errormsg)){{$errormsg}}@endif</span>
        <div class="form-group">
            <center><label for="username">Username</label></center>
            <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" value="{{old('username')}}"class="form-control">
            @error('username')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <center><label for="password">Password</label></center>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password" value="{{old('password')}}"class="form-control">
            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <center><input type="submit" class="btn btn-primary" value="Login" ></center>
    </form>
</div></div>
@endsection