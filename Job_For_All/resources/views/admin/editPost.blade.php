@extends('layouts.app')
@section('title', 'Update Post')
@section('content')

<form action="{{route('editPost')}}" class="col-md-6" method="post">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$post->Post_id}}">
    <div class="form-group">
        <label for="Post_Title">Post Title</label>
        <input type="textbox" id="Post_Title" name="Post_Title" value="{{$post->Post_Title}}" class="form-control">
        @error('Post_Title')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="Post_Description">Post Description</label>
        <textarea class="form-control" id="Post_Description" name="Post_Description" rows="3">{{$post->Post_Description}}</textarea>
        @error('Post_Description')
            <span class="text-danger">{{$message}}</span>
        @enderror  
    </div>
    <div class="form-group">
        <label for="Job_Requirement">Job Requirement</label>
        <textarea class="form-control" id="Job_Requirement" name="Job_Requirement" rows="3">{{$post->Job_Requirement}}</textarea>
        @error('Job_Requirement')
            <span class="text-danger">{{$message}}</span>
        @enderror  
    </div>
    <div class="form-group">
        <label for="Salary">Salary</label>
        <input type="text" id="Salary" name="Salary" value="{{$post->Salary}}"class="form-control">
        @error('Salary')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="Vacancy">Vacancy</label>
        <input type="text" id="Vacancy" name="Vacancy" value="{{$post->Vacancy}}"class="form-control">
        @error('Vacancy')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="Employment_Status">Employment Status: </label>
        <select name="Employment_Status" class="form-control">
            <option value="Full Time" @if($post->Employment_Status=="Full Time"){{"selected"}} @endif >Full Time</option>
            <option value="Part Time" @if($post->Employment_Status=="Part Time"){{"selected"}} @endif>Part Time</option>
            <option value="Freelance" @if($post->Employment_Status=="Freelance"){{"selected"}} @endif>Freelance</option>
        </select>
        @error('Employment_Status')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="Workplace">Workplace</label>
        <input type="text" id="Workplace" name="Workplace" value="{{$post->Workplace}}"class="form-control">
        @error('Workplace')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="Job_Location">Job Location</label>
        <input type="text" id="Job_Location" name="Job_Location" value="{{$post->Job_Location}}"class="form-control">
        @error('Job_Location')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="Compensation">Compensation</label>
        <textarea class="form-control" id="Compensation" name="Compensation" rows="3">{{$post->Compensation}}</textarea>
        @error('Compensation')
            <span class="text-danger">{{$message}}</span>
        @enderror  
    </div>
    <div class="form-group">
        <label for="Deadline">Deadline</label>
        <input type="date" id="Deadline" name="Deadline" value="{{$post->Deadline}}" class="form-control">
        @error('Deadline')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="Posted_By">Posted By</label>
        <input type="text" id="Posted_By" name="Posted_By" value="{{substr($post->Posted_By, 1, 150)}}" readonly class="form-control">
        @error('Posted_By')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="Post_Status">Post Status: </label>
        <select name="Post_Status" class="form-control">
            <option value="Approved" @if($post->Post_Status=="Approved"){{"selected"}} @endif >Approve</option>
            <option value="Rejected" @if($post->Post_Status=="Rejected"){{"selected"}} @endif>Reject</option>
            <option value="Pending" @if($post->Post_Status=="Pending"){{"selected"}} @endif>Pending</option>
        </select>
        @error('Post_Status')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <input type="submit" class="btn btn-success" value="Update">
</form>

@endsection