@extends('layouts.app')
@section('content')

<table class="table table-borded">
    <tr>
        <th>Seeker ID</th>
        <th>Seeker Name</th>
        <th>Seeker Email</th>
        <th>Seeker Phone</th>
        <th>Seeker Username</th>
        <th>Seeker Date Of Birth</th>
        <th>Seeker Gender</th>
        <th>NID</th>
        <th>Action</th>
        <th></th>
    </tr>
    @foreach($seekers as $seeker)
        <tr>
            <td>{{$seeker->Seeker_id}}</td>
            <td>{{$seeker->Name}}</td>
            <td>{{$seeker->Email}}</td>
            <td>{{$seeker->Phone}}</td>
            <td>{{$seeker->Username}}</td>
            <td>{{$seeker->Dob}}</td>
            <td>{{$seeker->Gender}}</td>
            <td>{{$seeker->NID}}</td>
            <td><a href="/seeker/edit/{{$seeker->Seeker_id}}/{{$seeker->Name}}" class="btn btn-primary">Edit</a></td>
            <td><a href="/seeker/delete/{{$seeker->Seeker_id}}/{{$seeker->Name}}" class="btn btn-danger">Delete</a></td>
        </tr>
    @endforeach
</table>

@endsection