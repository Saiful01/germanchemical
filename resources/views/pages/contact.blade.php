@extends('layouts.common')

@section('title','contact')



@section('content')
       <!-- start contact-pg-section -->
       <br><br> <br><br> <br><br> <br><br> 
        <section class="contact-pg-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-5 col-md-6 col-sm-8">
                        <div class="section-title">
                            <span>Contact With Us</span>
                            <h2>You can contact with us <span>if you have any query</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-7">
                        <form method="post" class="contact-validation-active" id="contact-form-main">
                            <div>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name*">
                            </div>
                            <div>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                            </div>
                            <div>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*">
                            </div>
                            <div>
                                <select name="subject" class="form-control">
                                    <option disabled="disabled" selected>Contact subject</option>
                                    <option>Subject 1</option>
                                    <option>Subject 2</option>
                                    <option>Subject 3</option>
                                </select>
                            </div>
                            <div class="fullwidth">
                                <textarea class="form-control" name="note"  id="note" placeholder="Case Description..."></textarea>
                            </div>
                            <div class="submit-area">
                                <button type="submit" class="theme-btn">Submit Now</button>
                                <div id="loader">
                                    <i class="ti-reload"></i>
                                </div>
                            </div>
                            <div class="clearfix error-handling-messages">
                                <div id="success">Thank you</div>
                                <div id="error"> Error occurred while sending email. Please try again later. </div>
                            </div>
                        </form>
                    </div>  

                    <div class="col col-md-5">
                        <div class="office-info">
                            <div>
                                <h3>Dhaka Office</h3>
                                <ul>
                                    <li><i class="ti-location-pin"></i> House no 368, DOHS, Mohakhali</li>
                                    <li><i class="ti-mobile"></i>  Phone:  ++88...</li>
                                    <li><i class="ti-email"></i> Email: info@germanchemiclasltd.com</li>
                                </ul>
                            </div>
                            <div>
                                <h3> Office</h3>
                                <ul>
                                    <li><i class="ti-location-pin"></i></li>
                                    <li><i class="ti-mobile"></i> Phone:  ++88...</li>
                                    <li><i class="ti-email"></i> Email: info@germanchemiclasltd.com</li>
                                </ul>
                            </div>
                            <div>
                                <h3>Office</h3>
                                <ul>
                                    <li><i class="ti-location-pin"></i> </li>
                                    <li><i class="ti-mobile"></i> </li>
                                    <li><i class="ti-email"></i> </li>
                                </ul>
                            </div>
                        </div>
                    </div>                  
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end contact-pg-section -->


        <!--  start contact-map -->
        <section class="contact-map-section">
            <h2 class="hidden">Contact map</h2>
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671" allowfullscreen></iframe>
            </div>
        </section>
        <!-- end contact-map -->


@endsection