@extends('layouts.app')

@section('content')


    <h2>Job List</h2><br>

    



    <table class="table table-borded">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Posted By</th>
        <th>Employment Status</th>
        <th>Job_Requirement</th>
        <th>Job Location</th>
        <th>Vacancy</th>
        <th>Workplace</th>
        <th>Deadline</th>
        
        <th></th>
    </tr>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->Post_id}}</td>
            <td>{{$post->Post_Title}}</td>
            <td>{{$post->Posted_By}}</td>
            <td>{{$post->Employment_Status}}</td>
            <td>{{$post->Job_Requirement}}</td>
            <td>{{$post->Job_location}}</td>
            <td>{{$post->Vacancy}}</td>
            <td>{{$post->Workplace}}</td>
            <td>{{$post->Deadline}}</td>
            
            <td><a href="/seeker/job_details/{{$post->Post_id}}/{{$post->Post_Title}}" class="btn btn-primary">Apply</a></td>
           

        </tr>
    @endforeach
</table>
@endsection 


