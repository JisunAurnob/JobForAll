@extends('layouts.app')
@section('title', 'Manage Corporate Employers')
@section('content')

<table class="table table-borded">
    <tr>
        <th>Corporate ID</th>
        <th>Company Name</th>
        <th>Company Address</th>
        <th>Trade License</th>
        <th>Email</th>
        <th>Phone</th>
        <th>User Name</th>
        <th>Website</th>
        <th>Action</th>
        <th></th>
    </tr>
    @foreach($corporates as $corporate)
        <tr>
            <td>{{$corporate->Corporate_id}}</td>
            <td>{{$corporate->CompanyName}}</td>
            <td>{{$corporate->CompanyAddress}}</td>
            <td>{{$corporate->TradeLicense}}</td>
            <td>{{$corporate->Email}}</td>
            <td>{{$corporate->Phone}}</td>
            <td>{{substr($corporate->Username, 1, 150)}}</td>
            <td>{{$corporate->Website}}</td>
            <td><a href="/employers/corporates/edit/{{$corporate->Corporate_id}}/{{$corporate->CompanyName}}" class="btn btn-primary">Update</a></td>
            <td><a href="/employers/corporates/delete/{{$corporate->Corporate_id}}/{{$corporate->CompanyName}}" class="btn btn-danger">Delete</a></td>
        </tr>
    @endforeach
</table>

@endsection