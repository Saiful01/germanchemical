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
    
<form  method="post" action="/slider/store" enctype='multipart/form-data'>
    <div class="form-group">
      <label >Email:</label>
      <input type="text" class="form-control" placeholder="Name" name="slider_name">
      <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    </div>

    
    <div class="form-group">
      <label >Email:</label>
      <input type="text" class="form-control" placeholder="Name" name="slider_title">
    </div>

    
    <div class="form-group">
      <label >Email:</label>
      <input type="text" class="form-control" placeholder="Name" name="slider_sub_title">
    </div>
    
    <div class="form-group">
      <label >Email:</label>
      <input type="file" class="form-control" placeholder="Name" name="image">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


    
    
    </div>
  </div>


@endsection
