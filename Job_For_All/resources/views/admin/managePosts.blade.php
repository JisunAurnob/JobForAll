@extends('layouts.app')
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
            <td>{{$post->Posted_By}}</td>
            <td>{{$post->Post_Status}}</td>
            <td><a href="/post/edit/{{$post->Post_id}}/{{$post->Post_Title}}" class="btn btn-primary">Update</a></td>
            <td><a href="/post/delete/{{$post->Post_id}}/{{$post->Post_Title}}" class="btn btn-danger">Delete</a></td>
        </tr>
    @endforeach
</table>

@endsection