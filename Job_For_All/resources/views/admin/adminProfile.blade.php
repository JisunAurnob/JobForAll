@extends('layouts.app')
@section('content')
@if(Session::has('admin'))
<center><h3>Admin Profile</h3></center>
<h3>UserID: {{Session()->get('adminId')}}</h3><hr>
<div class="float-right">
    <form method="POST" enctype="multipart/form-data" id="upload-image" action="{{ url('upload-image') }}" >
        {{csrf_field()}}
    <div class="col-md-12 mb-2">
        <img id="preview-image-before-upload" src="{{$admin->Picture}}"
            alt="Profile Picture" onerror=this.src="/images/image_not_found.gif" style="max-height: 300px;">
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <input type="file" name="image" placeholder="Choose image" id="image">
              @error('image')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
              @enderror
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-warning" id="submit">Change Profile Picture</button>
    </div>
</div>
<h3>Name: {{$admin->Name}}</h3><hr>
<h3>Email: {{$admin->Email}}</h3><hr>
<h3>Username: {{Session()->get('admin')}}</h3><hr>
<h3>Phone: {{$admin->Phone}}</h3><hr>
<h3>Date Of Birth: {{$admin->Dob}}</h3><hr>
<h3>Gender: {{$admin->Gender}}</h3><hr>
<a class="btn btn-primary" href="{{route('editAdminInfo')}}"> Edit Profile </a> 
@endif
@endsection