@extends('layouts.app')
@section('title', 'Manage Queries')
@section('content')

<table class="table table-borded">
    <tr>
        <th>Serial</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
        <th>Action</th>
        <th></th>
    </tr>
    @foreach($contacts as $contact)
        <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->Name}}</td>
            <td>{{$contact->Email}}</td>
            <td>{{$contact->Phone}}</td>
            <td>{{$contact->Message}}</td>
            <td><a class="btn btn-info" href = "mailto: {{$contact->Email}}">Send Email</a></td>
            <td><a href="/contact/delete/{{$contact->id}}/{{$contact->Name}}" class="btn btn-danger">Delete</a></td>
        </tr>
    @endforeach
</table>

@endsection