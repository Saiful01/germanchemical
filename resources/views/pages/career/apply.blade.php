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
        </div>
    </div>

    <main id="body-content">


        <!-- Contact Details Start -->
        <section class="wide-tb-80 contact-full-shadow">
            <div class="container">

                <div class="row">
                    <div class="col-md-8 mx-auto col-sm-8">

                        @if(count($result)<=0)

                            <h5>No Jobs Found</h5>
                        @endif
                        @foreach($result as $res)


                            <a href="/job/job-detail/{{$res->job_id}}"
                               class="btn-theme bg-orange mt-2">{{$res->job_title}} <i
                                        class="icofont-rounded-right"></i></a>
                            <br>

                        @endforeach
                    </div>

                </div>

            </div>
        </section>
    </main>


@endsection
