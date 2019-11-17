@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
    
    @if(Session::has('success'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
@endif

@if(Session::has('failed'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('failed') }}</p>
@endif
<table class="table table-borderd">

@foreach($result as $res)
<tr>
<td>{{$res->slider_name}} </td>
<td>{{$res->slider_title}} </td>
<td>{{$res->slider_sub_title}} </td>
<td>{{$res->slider_image}}</td>

</tr>

@endforeach
    

</table>



@endsection
