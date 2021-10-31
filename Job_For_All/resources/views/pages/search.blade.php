@extends('layouts.app')
@section('title', 'Search')
@section('content')
<meta name="_token" content="{{ csrf_token() }}">
<div class="row">
    <div class="col-md-20 offset-md-2">
<div class="container">
<div class="row">
<div class="panel panel-default">
<div class="panel-heading">
    <center><h3>Jobs </h3></center>
</div>
<div class="panel-body">
<div class="form-group"><center>
<input type="text" class="form-controller" id="search" name="search" value=""></center>
</div>
<table class="table table-bordered table-hover">
<thead>
<tr>
<th>Post ID</th>
<th>Post Name</th>
<th>Post Description</th>
<th>Post Requirement</th>
<th>Post Location</th>
<th>Salary</th>
<th>Action</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>
</div>
</div>
</div></div></div>
@endsection