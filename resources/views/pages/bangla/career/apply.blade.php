@extends('layouts.common')

@section('title','Apply')



@section('content')

<div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/"><i class="icofont-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Apply</li>
                </ol>
            </nav>

            <h1>Apply</h1>
            
        
   

    <main id="body-content">


        <!-- Contact Details Start -->
        <section class="wide-tb-80 contact-full-shadow">
            <div class="container">

                @if(Session::has('success'))
                    <div class="alert alert-info" role="alert">
                        {{ Session::get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endif

                @if(Session::has('failed'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('failed') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endif

              <div class="row">
                <div class="col-md-8 col-sm-8">
              <div class="theme-collapse capsules">




              @foreach($result as $res)



                <!-- Toggle Links 1 -->
                <div class="toggle">
                  <i class="icofont-rounded-down"></i> {{$res->job_title}}

                </div>



                <!-- Toggle Links 1 -->

                <!-- Toggle Content 1 -->
                <div class="collapse" style="">
                  <div class="content">

                  <div class="card">
                  {{$res->job_description}}

<hr>

                  <div class="col-md-4 col-sm-12 form-inline">
             <a  class="btn btn-info"  style="color:#fff" href="/job/job-detail/{{$res->job_id}}">Details</a>
              <a  class="btn btn-success"  style="color:#fff" href="/job/job-apply/{{$res->job_id}}">Apply</a><br><br>
              </div>

                  </div>
                  </div>
                </div>
                <!-- Toggle Content 1 -->
               
@endforeach


              </div>
            </div>

            

              </div>




            </div>
        </section>




    </main>
 </div>

@endsection
