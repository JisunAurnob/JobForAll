@extends('layouts.app')
@section('title', 'Manage Posts')
@section('content')

<table class="table table-borded">
    <tr>
        <th>Post ID</th>
        <th>Post Title</th>
        <th>Salary</th>
        <th>Employment Status</th>
        <th>Job Location</th>
        <th>Deadline</th>
        <th>Posted By</th>
        <th>Post Status</th>
        <th>Action</th>
        <th></th>
    </tr>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->Post_id}}</td>
            <td>{{$post->Post_Title}}</td>
            <td>{{$post->Salary}}</td>
            <td>{{$post->Employment_Status}}</td>
            <td>{{$post->Job_Location}}</td>
            <td>{{$post->Deadline}}</td>
            <td>{{substr($post->Posted_By, 1, 150)}}</td>
            <td @if($post->Post_Status=="Approved")style="color: green"
                @elseif($post->Post_Status=="Rejected")style="color: red"
                @elseif($post->Post_Status=="Pending")style="color: blue"
                @endif>{{$post->Post_Status}}</td>
            <td><a href="/post/edit/{{$post->Post_id}}/{{$post->Post_Title}}" class="btn btn-primary">Update</a></td>
            <td><a href="/post/delete/{{$post->Post_id}}/{{$post->Post_Title}}" class="btn btn-danger">Delete</a></td>
        </tr>
    @endforeach
</table>

@endsection