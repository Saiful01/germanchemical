@extends('layouts.common')

@section('content')

<div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/"><i class="icofont-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Apply</li>
                </ol>
            </nav>

            <h1 class="text-center" style="color:red;">Jobs</h1>

            </div>
            </div>
        

    <main id="body-content">


        <!-- Contact Details Start -->
        <section class="wide-tb-80 contact-full-shadow">
            <div class="container">
                <div class="card">
                <div class="card-header">
                <h2 style="color:green">{{$result->job_title}}</h2>
                <p> <b>Job vacancy:</b>  {{$result->job_vacancy}}</p>
                <div class="card-body">
                
                  <p><b>JOb Description:</b><ul class="unorder-list"> <li>{{$result->job_description}}</li></ul></p>
                  <p> <b>JOb Qualification: </b> {{$result->job_qualification}}</p>
                  
                  <p><b> Salary Range: </b> {{$result->job_salary}}</p>
                  <p><b>Job Experience: </b> {{$result->job_experience}}</p>
                  <p><b> Employment Status: </b> {{$result->job_employment_status}}</p>
                  <a class="btn btn-info" href="/job/job-apply/{{$result->job_id}}"> Apply </a>
                
                </div>

                </div>
              
            </div>
            </div>

        </section>




    </main>
 </div>






@endsection
