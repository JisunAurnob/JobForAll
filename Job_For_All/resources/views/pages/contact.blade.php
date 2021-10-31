@extends('layouts.app')
@section('title', 'Contact')
@section('content')
    <form action="{{route('contact')}}" class="col-md-6" method="post">
        {{csrf_field()}}
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="{{old('email')}}"class="form-control">
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" value="{{old('phone')}}"class="form-control">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <input type="text" id="message" name="message" value="{{old('message')}}"class="form-control">
            @error('message')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-primary" value="Submit" >
    </form>
@endsection