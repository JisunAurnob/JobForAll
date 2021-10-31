@extends('layouts.app')
@section('title', 'Home')
@section('content')

<meta name="_token" content="{{ csrf_token() }}">
<marquee><h4 style="color:#b45110">Welcome to Job For All. Are You Unemployed? Are You Seeking For Recruitment? This Is The Right Place For You.</h4></marquee>

<div class="d-flex justify-content-center">
    <div style="color: rgb(47, 124, 11); font-size: 25px;" class="p-2 bd-highlight"><span class="border border-warning">Total Users: {{count($seekers)+count($femps)+count($cemps)+count($posts)}}</span></div>
    <div style="color: rgb(47, 77, 177); font-size: 25px;" class="p-2 bd-highlight"><span class="border border-success">Live Jobs: {{count($posts)}}</span></div>
  </div>
<h3 style="color: rgb(11, 143, 167)">Featured Jobs</h3>
@foreach($posts as $post)
<div style="background-color:rgb(231, 224, 224);" class="card">
        <div class="card-body">
            <h5>Post Title</h5>{{$post->Post_Title}}
            <div class="float-right">
                <p>Posted At <br>
                Date: {{substr($post->created_at, 0, -9)}}<br>
                Time: {{substr($post->created_at, 11, 8)}}</p><br>
                <a class="btn btn-success" href="{{route('showAllPost')}}" role="button">Apply!</a>
            </div><br>
            <h5>Location</h5>{{$post->Job_Location}}
            <h5>Posted By</h5>{{substr($post->Posted_By, 1, 150)}} ( @if ($post->Posted_By[0]=='F')
            Freelance Employer
        @else
            Corporate Employer
        @endif )
            
        </div>
</div><br>
@endforeach
@endsection