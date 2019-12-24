@extends('layouts.app')

@section('content')
<a class="btn btn-success float-right" href="/applicant/create">New</a><br>
<div class="card">
    <div class="card-body">
    
    @if(Session::has('success'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
@endif

@if(Session::has('failed'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('failed') }}</p>
@endif
<table class="table table-borderd">
<thead>
<tr>
<th>Applicant name</th>
<th> Email</th>
<th>Max Qualification level</th>
<th> phone</th>
<th> Password</th>
</tr>
</thead>

@foreach($result as $res)
<tr>
<td>{{$res->app_name}} </td>
<td>{{$res->app_email}} </td>
<td>{{$res->app_max_edu}} </td>
<td>{{$res->app_phone}}</td>
<td>{{$res->app_password}}</td>

</tr>

@endforeach
    

</table>



@endsection
