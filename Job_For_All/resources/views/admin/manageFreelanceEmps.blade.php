@extends('layouts.app')
@section('title', 'Manage Freelance Employers')
@section('content')

<table class="table table-borded">
    <tr>
        <th>Freelance ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Job Type</th>
        <th>Address</th>
        <th>Username</th>
        <th>NID</th>
        <th>Action</th>
        <th></th>
    </tr>
    @foreach($femps as $femp)
        <tr>
            <td>{{$femp->Freelance_id }}</td>
            <td>{{$femp->Name}}</td>
            <td>{{$femp->Email}}</td>
            <td>{{$femp->Phone}}</td>
            <td>{{$femp->JobType}}</td>
            <td>{{$femp->Address}}</td>
            <td>{{substr($femp->Username, 1, 150)}}</td>
            <td>{{$femp->NID}}</td>
            <td><a href="/employers/freelance/edit/{{$femp->Freelance_id }}/{{$femp->Name}}" class="btn btn-primary">Update</a></td>
            <td><a href="/employers/freelance/delete/{{$femp->Freelance_id }}/{{$femp->Name}}" class="btn btn-danger">Delete</a></td>
        </tr>
    @endforeach
</table>

@endsection