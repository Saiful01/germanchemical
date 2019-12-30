@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-header">

   <h1 class="text-center text-primary">Slider</h1>
  </div>

    <div class="card-body">
    <a class="btn btn-success float-right" href="/slider/create">New</a><br>

    
    @if(Session::has('success'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
@endif

@if(Session::has('failed'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('failed') }}</p>
@endif
<table class="table table-bordered">
    <thead>
        <tr>
          <th>#</th>
           <th>Slider name</th>
           <th>Slider Title</th>
           <th>Slider Sub Title</th>
           <th>Slider Image</th>
           <th>Slider Edit</th>
           <th>Slider Delete</th>
          

        </tr>
    </thead>

    @php($i=1)
@foreach($result as $res)
<tr>
<td>{{$i++}}</td>
<td>{{$res->slider_name}} </td>
<td>{{$res->slider_title}} </td>
<td>{{$res->slider_sub_title}} </td>
<td>{{$res->slider_image}}</td>
<td><a class="btn btn-info" href="/slider/edit/{{$res->slider_id}}">Edit</a></td>
<td><a class="btn btn-danger" href="/slider/delete/{{$res->slider_id}}">Delete</a></td>



</tr>

@endforeach
    

</table>



@endsection
