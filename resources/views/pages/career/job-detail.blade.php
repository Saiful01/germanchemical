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


        <section class="wide-tb-80">
            <div class="container pos-rel">
                <div class="row align-items-start">

                    <div class="col-md-12 col-lg-8">
                        <div class="row">
                            <!-- Blog Items -->
                            <div class="col-md-12">
                                <div class="text-left">

                                    <div class="meta-box"><a href="http://shtheme.com/demosd/logzee/?author=1"
                                                             title="Posts by admin" rel="author">admin</a>
                                        <span>/</span> {{date('M d, Y', strtotime($result->created_at))}}
                                    </div>
                                    <h4 class="h4-md mb-3 fw-7 txt-blue">{{$result->job_title}}</h4>
                                    <p>{!! $result->job_description !!}</p>

                                    <h4>Qualification</h4>
                                    <p>{{$result->job_qualification}}</p>

                                    <h4>Experience</h4>
                                    <p>{{$result->job_experience}}</p>

                                    <h4>Employment Status</h4>
                                    <p>{{$result->job_employment_status}}</p>

                                    <h4>Salary</h4>
                                    <p>{{$result->job_salary}}</p>

                                    <a class="btn btn-theme bg-orange" href="/job/job-apply/{{$result->job_id}}"> Apply
                                        Now </a>
                                </div>

                            </div>
                            <!-- Blog Items -->


                        </div>

                    </div>


                    <div class="col-md-12 col-lg-4">
                        <!-- Add Some Left Space -->
                        <aside class="sidebar-spacer row">

                            <div class="widget-wrap recent-posts">
                                <h3 class="widget-title">Other Jobs</h3>
                                <div class="blog-list-footer">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="media">

                                                <div class="media-body post-text">
                                                    @foreach($job_list as $job)
                                                        <h5 class="mb-3 h5-md"><a
                                                                    href="/job/job-detail/{{$result->job_id}}">{{$job->job_title}}</a>
                                                        </h5>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </aside>
                        <!-- Add Some Left Space -->
                    </div>

                </div>

            </div>
        </section>


    </main>


@endsection
