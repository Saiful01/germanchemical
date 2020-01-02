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

            <h1 class="text-center" style="color:orange;">Apply For Job</h1>


            <main id="body-content">


                <!-- Contact Details Start -->
                <section class="wide-tb-80 contact-full-shadow">
                    <div class="container">


                        <div class="col-md-7 col-sm-12 col-lg-7 wow fadeInLeft">
                            <div class="contact-detail-shadow">

                                @if(Session::has('success'))
                                    <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
                                @endif

                                @if(Session::has('failed'))
                                    <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('failed') }}</p>
                                @endif


                                <form action="/applicant/job-apply" method="post"
                                      class="col rounded-field">
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <label>Applicant name:</label>
                                            <input type="text" class="form-control" name="app_name" required>
                                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                                            <input type="hidden" name="id" value="{{$id}}"/>
                                        </div>

                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <label>Application Max Qualification:</label>
                                            <select class="form-control form-control-lg" name="app_max_edu">
                                                <option>JSC</option>
                                                <option>SSC</option>
                                                <option>HSC</option>
                                                <option>Graduate</option>
                                                <option>Masters</option>
                                                <option>PHD</option>

                                            </select>
                                        </div>

                                    </div>

                                    <div class="form-row mb-4">

                                        <div class="col">
                                            <label>Phone:</label>
                                            <input type="text" name="phone" id="phone" class="form-control" required>
                                        </div>

                                        <div class="col">
                                            <label>Email:</label>
                                            <input type="text" name="email" id="email" class="form-control">
                                        </div>
                                    </div>


                                    <div class="form-row mb-4">

                                        <div class="col">
                                            <label>Applicant Password:</label>

                                            <input type="text" name="app_password" id="app_password" class="form-control">
                                            {{--<input type="password" name="app_password" id="Password"
                                                   class="form-control">--}}

                                        </div>
                                    </div>


                                    <div class="form-row text-center">

                                        <button id="contactForm" type="submit"
                                                class="form-btn mx-auto btn-theme bg-orange">Submit
                                            Now <i class="icofont-rounded-right"></i></button>
                                    </div>


                                </form>

                            </div>
                        </div>

                    </div>
                </section>

            </main>
        </div>

    </div>

@endsection
