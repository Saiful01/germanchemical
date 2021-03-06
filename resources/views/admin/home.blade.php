@extends('layouts.app')

@section('content')

    <style>

        .btn-big {
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
                    Jobs

                </a>
            </div>
            <div class="col-md-4">
                <a href="/applicant/view" class="btn btn-success btn-big btn-block">
                    Applicants

                </a>
            </div>

        </div>
        <br>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="/jobapplicant/show" class="btn btn-info btn-big btn-block">
                    Job Applicants

                </a>
            </div>
            <div class="col-md-4">
                <a href="/employee/view" class="btn btn-danger btn-big btn-block">
                    Employees

                </a>
            </div>
            <div class="col-md-4">
                <a href="/product/view" class="btn btn-info btn-big btn-block">
                    Products

                </a>
            </div>

        </div>
        <br>

        <div class="row justify-content-center">
            <div class="col-md-6 mx-auto">
                <a href="/contact/view" class="btn btn-info btn-big btn-block">
                    Latest Message

                </a>
            </div>
        </div>
@endsection
