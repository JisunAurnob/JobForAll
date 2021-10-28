@extends('layouts.app')
@section('content')

<form action="{{route('adminInfoUpdate')}}" class="col-md-6" method="post">
    {{csrf_field()}}
    @if(Session::has('admin'))
    <input type="hidden" name="id" value="{{$user->Admin_id}}">
    @endif
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{$user->Name}}" class="form-control">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="{{$user->Email}}"class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" value="{{$user->Phone}}"class="form-control">
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="{{$user->Username}}"class="form-control">
        @error('username')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" value="{{$user->Dob}}" class="form-control">
        @error('dob')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="gender">Gender</label><br>
        <input type="radio" id="male" name="gender" value="Male" @if ($user->Gender == "Male") checked @endif>
            <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female"  @if ($user->Gender == "Female") checked @endif>
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="Other"  @if ($user->Gender == "Other") checked @endif>
            <label for="other">Other</label><br>
        @error('gender')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <input type="submit" class="btn btn-success" value="Update">
</form>

@endsection