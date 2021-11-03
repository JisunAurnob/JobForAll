@extends('layouts.app')

@section('content')


    <h2>Job Details</h2><br>

    <table class="table table-borded">
        

        <tr>
            <td>Title :</td><td>{{$job_details->Post_Title}}</td>
        </tr>
        <tr>
            <td>Company Name :</td><td>{{$job_details->Posted_By}}</td>
        </tr>

        <tr>
            <td>Description :</td><td>{{$job_details->Post_Description}}</td>
        </tr>
        <tr>
            <td>Job Requirement :</td><td>{{$job_details->Job_Requirement}}</td>
        </tr>
        <tr>
            <td>Status  :</td><td>{{$job_details->Post_Status }}</td>
        </tr>
        <tr>
            <td>Vacancy :</td><td>{{$job_details->Vacancy}}</td>
        </tr>  
        <tr>
            <td>Employment Status  :</td><td>{{$job_details->Employment_Status }}</td>
        </tr>
        <tr>
            <td>Workplace :</td><td>{{$job_details->Workplace}}</td>
        </tr>
        <tr>
            <td>Job Location :</td><td>{{$job_details->Job_location}}</td>
        </tr>
        <tr>
            <td>Compensation :</td><td>{{$job_details->Compensation}}</td>
        </tr>
        <tr>
            <td>Deadline :</td><td>{{$job_details->Deadline}}</td>
        </tr>

        <tr>
        <td>

        <form action="{{route('applyJob')}}" method="post">
        {{csrf_field()}}
        <input type="hidden" id="Post_ID" name="Post_ID" value="{{$job_details->Post_id}}">
        <input type="hidden" id="Job_Title" name="Job_Title" value="{{$job_details->Post_Title}}">
       
        <button type="submit" class="btn btn-primary btn-sm">Apply</button>

        </form>
        
    
        </td>
        </tr>
        
    </table>
@endsection 


