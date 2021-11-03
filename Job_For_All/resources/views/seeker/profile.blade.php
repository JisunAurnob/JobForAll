@extends('layouts.app')

@section('content')


    <h1>My Profile</h1>

    <table class="table table-borded">
        

    <div class="float-right">
    <form method="POST" enctype="multipart/form-data" id="upload-image" action="{{ url('upload-image') }}" >
        {{csrf_field()}}
    <div class="col-md-12 mb-2">
        <img id="preview-image-before-upload" src="{{$seeker->Picture}}"
            alt="Profile Picture" onerror=this.src="/images/empty.jpg" style="max-height: 250px;">
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
        <button type="submit" class="btn btn-secondary btn-sm" id="submit">Change Profile Picture</button>
    </div>
</div>


        <tr>
            <td>Name :</td><td>{{$seeker->Name}}</td>
        </tr>
        <tr>
            <td>Username :</td><td>{{$seeker->Username}}</td>
        </tr>
        <tr>
            <td>Email :</td><td>{{$seeker->Email}}</td>
        </tr>
        <tr>
            <td>Phone :</td><td>{{$seeker->Phone}}</td>
        </tr>
        <tr>
            <td>Gender :</td><td>{{$seeker->Gender}}</td>
        </tr>  
        <tr>
            <td>Date Of Birth :</td><td>{{$seeker->Dob}}</td>
        </tr>
        <tr>
            <td>National ID :</td><td>{{$seeker->NID}}</td>
        </tr>

        <tr>
            <td>
            <a  class="btn btn-primary btn-sm" href="/seeker/profile/edit/{{$seeker->Seeker_id}}/{{$seeker->Username}}">Edit</a>  
            </td>
        </tr>
        
    </table>
@endsection 


