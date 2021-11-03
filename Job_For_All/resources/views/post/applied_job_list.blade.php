@extends('layouts.app')

@section('content')


    <h2>Applied Job List</h2><br>


    <table class="table table-borded">
    <tr>
        <th>History ID</th>
        <th>Post ID</th>
        <th>Job Title</th>
        
        <th></th>
    </tr>
    @foreach($jobs as $job)
    @if($job->Applied_by==Session()->get('user'))
        <tr>
            <td>{{$job->History_ID}}</td>
            <td>{{$job->Post_ID}}</td>
            <td>{{$job->Job_Title}}</td>
            <td><a class="btn btn-danger" href="/seeker/cancelapp/{{$job->Post_ID}}/{{$job->Job_Title}}">Cancel Application</a></td>
        </tr>
        @endif
    @endforeach
</table>
@endsection 


