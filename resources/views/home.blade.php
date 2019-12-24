@extends('layouts.app')

@section('content')

<style>

.btn-big{
  height: 139px;
  line-height: 110px;
  font-size: 38px;
}

</style>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <a href="/slider/view" class="btn btn-primary btn-big btn-block">
                Sliders
                
            </a>
        </div>
        <div class="col-md-4">
        <a href="/job/view" class="btn btn-secondary btn-big btn-block">
                job
                
            </a>
        </div>
        <div class="col-md-4">
        <a href="/applicant/view" class="btn btn-success btn-big btn-block">
                Applicant
                
            </a>
        </div>
       
    </div>
    <br>

    <div class="row justify-content-center">
        <div class="col-md-4">
        <a href="/jobapplicant/show" class="btn btn-info btn-big btn-block">
                JobApplicant
                
            </a>
        </div>
        <div class="col-md-4">
        <a href="/employee/view" class="btn btn-danger btn-big btn-block">
                Employee
                
            </a>
        </div>
        <div class="col-md-4">
        <a href="/product/view" class="btn btn-warning btn-big btn-block">
                Product
                
            </a>
        </div>
       
    </div>
</div>
@endsection
