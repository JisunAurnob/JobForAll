@extends('layouts.app')
@section('content')

<form action="{{route('editSeeker')}}" class="col-md-6" method="post">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$seeker->Seeker_id}}">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{$seeker->Name}}" class="form-control">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="{{$seeker->Email}}"class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" value="{{$seeker->Phone}}"class="form-control">
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="{{$seeker->Username}}"class="form-control">
        @error('username')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" value="{{$seeker->Dob}}" class="form-control">
        @error('dob')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="gender">Gender</label><br>
        <input type="radio" id="male" name="gender" value="Male" @if ($seeker->Gender == "Male") checked @endif>
            <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female"  @if ($seeker->Gender == "Female") checked @endif>
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="Other"  @if ($seeker->Gender == "Other") checked @endif>
            <label for="other">Other</label><br>
        @error('gender')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="nid">NID</label>
        <input type="text" id="nid" name="nid" value="{{$seeker->NID}}"class="form-control">
        @error('nid')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <input type="submit" class="btn btn-success" value="Update">
</form>

@endsection