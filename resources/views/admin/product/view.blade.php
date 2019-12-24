@extends('layouts.app')

@section('content')
<a class="btn btn-success float-right" href="/product/create">New</a><br>
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
<th>Product name</th>
<th> Product Details</th>
<th>Product Image</th>
<th> Product Price</th>
<th> Edit</th>
<th> Delete</th>


</tr>
</thead>

@foreach($result as $res)
<tr>
<td>{{$res->pro_title}} </td>
<td>{{$res->pro_details}} </td>
<td>{{$res->pro_image}}</td>
<td>{{$res->pro_price}} </td>

<td><a class="btn btn-info" href="/product/edit/{{$res->pro_id}}">Edit</a></td>
<td><a class="btn btn-danger" href="/product/delete/{{$res->pro_id}}">Delete</a></td>


</tr>

@endforeach
    

</table>



@endsection
