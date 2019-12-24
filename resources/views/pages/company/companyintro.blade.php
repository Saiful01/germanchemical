@extends('layouts.common')

@section('title','Company Introduction')



@section('content')
<div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/"><i class="icofont-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Company</li>
                </ol>
            </nav>

            <h1 class="text-center" style="color:orange;">Company Introduction</h1>
            </div>
            </div>
            
       

    <main id="body-content">
        <div class="container">
        <h1 class="text-center mb-5 mt-5">Our Story </h1>
        <p>With great pleasure, I am writing to solicit for your assistance in a matter that can be of mutual benefit for us. I request you to go through it carefully and respond as promptly as possible.</p>
        
        <p>
We, “German Chemicals Limited”, is a 100% export oriented textile chemicals manufacturer which is providing Textile Auxiliaries Chemicals in Bangladesh, Europe & other’s Asian market and GCL is situated inside Dhaka Export Processing Zone under Bangladesh Export Processing Zones Authority (BEPZA). We have started our journey in 2003 providing humble services to the customers and now after 8 years of successful operations, German Chemicals Ltd has become a reputed and dependable textile chemicals  manufacturer & Chemicals Exporter in Bangladesh. </p>
        <p>To give a brief sketch of our company’s resume that GERMAN CHEMICALS LTD. is providing world-class GERMAN Textile Auxiliaries with this co-operation. Now German Chemicals Limited is operating its business with highly qualified Management and our intention is to grow a relationship with leading Manufacturers. German Chemicals Limited never compromise with its product quality and at the same time we are trying to make our Chemicals cost effective for our valuable customers. We are committed to supply different types of Textile Auxiliaries Chemical with better quality & minimum cost for Pretreatment, Dyeing, Finishing, Printing & Washing plant. </p>
        <p>How we have operated so far:</p>
        <p>We supply Textile Auxiliaries ranging from Pre-Treatment to Dyeing and Finishing as well as Printing  with the highest international eminence to Bangladeshi market in association with a Global-brand German chemicals manufacturer . We import raw chemicals form German Manufacturer and process those in our processing plant as per prescribed formula from the Parent manufacturer with maintaining the quality of the processed/ finished product exactly same as the Parent Manufacturer do. Needless to say that it allow us to use Parent Company’s respective Brand name and Reputation in the market. It should be noted that Parent Company has the liberty to check our product quality at our end or our supplied product from the Buyer’s end quality at any time. Generally they do it in every four to six months. Therefore we are unique than others to support customer’s various choices.Our expertise are highly experienced with international corporate backgrounds and proven service record. The team is highly professional, dynamic and ready to work round the clock to make you reluctant. </p>
        </div>


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
            </div>
        </section>
    </main> 
 </div> 

@endsection