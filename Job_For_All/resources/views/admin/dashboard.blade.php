@extends('layouts.app')
@section('content')
@if(Session::has('admin'))
<center><h3>Welcome Admin Dashboard</h3></center>
<p>Total Seekers: {{count($seekers)}}</p>
<p>Total Posts: {{count($posts)}}</p>
<div class="card">
        <div class="card-body">
            <h3 style="color: blueviolet">Latest Post</h3><br>
            <h5>Post Title</h5>{{$lastpost->Post_Title}}
            <div class="float-right">
                <p>Posted At <br>
                Date: {{substr($lastpost->created_at, 0, -9)}}<br>
                Time: {{substr($lastpost->created_at, 11, 8)}}</p><br>
                <a class="btn  btn-info" href="{{route('showAllPost')}}" role="button">Show All Posts</a>
            </div>
            <h5>Posted By</h5>{{$lastpost->Posted_By}}
            <h5>Post Status</h5>{{$lastpost->Post_Status}}
            
        </div>
</div>

@endif
@endsection