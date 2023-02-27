@extends('layouts.app')

@section('content')

<div class="container-fluid background-colour1" id="our-customers">
    <div class="row">
        <div class="col-12 col-md-12 mx-auto mt-0">
            <div class="row">

                <!-- Services - Title -->
                <div class="col-11 mx-auto" id="frequently-asked-questions">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="row">
                                <div class="col-12 text-left">
                                    <div class="m-auto">
                                        <h2 class="mb-0 mr-4 my-auto colour3 fw-bold" style="white-space: nowrap;">{{$pagetitle}}</h2>
                                        <hr class="mb-0" style="width: 200px; max-width: 200px; background-color: #D0DAFF!important;">
                                        <!--<h4 class="d-inline-block mb-0 mr-4 my-auto colour3">Helping you inform your customers and convert new leads.</h4>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Services - Step by Step -->
                <div class="col-11 mt-0 mt-sm-4 mx-auto">
                    <div class="row">

                    <div class="col-12">
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            <div class="col">
                                <h3 class="h3 colour3 mb-2"><b>Our clients</b></h3>
                                <h4 class="h4 colour3 mb-4"><small>We've worked for a range of clients from sole traders, to larger sized city businesses.</small></h4>
                                <img class="w-100 img-fluid d-none d-md-block mt-0 mt-md-5 pb-0 pb-md-0" style="width: 100%!important;" src="/storage/images/transparent-website-example2-tyvedigital.png">
                                <img class="w-100 img-fluid d-block d-md-none rounded-lg" src="/storage/images/transparent-website-example2-tyvedigital.png">
                                <div class="d-none d-md-block mt-0 mt-md-3">
                                    <h4 class="card-title fw-bold colour3 mb-0">We'd love to help you digitalise your customer journeys.</h4>
                                    <h5 class="card-title colour3 mt-2 mb-4">Get in touch today.</h5>
                                    <a href="/contact/" class="ml-auto my-auto align-middle btn btn-primary">Contact Us</a>
                                </div>
                            </div>
                            <div class="col mb-4 mt-0">
                                <img class="w-100 img-fluid d-none d-md-block pb-5" style="width: 100%!important;" src="/storage/images/transparent-website-example-tyvedigital.png">
                                <img class="w-100 img-fluid d-block d-md-none rounded-lg" src="/storage/images/transparent-website-example-tyvedigital.png">
                                <img class="w-100 img-fluid d-none d-md-block pb-5" style="width: 100%!important;" src="/storage/images/transparent-website-example3-tyvedigital.png">
                                <img class="w-100 img-fluid d-block d-md-none rounded-lg" src="/storage/images/transparent-website-example3-tyvedigital.png">
                            </div>
                        </div>
                    </div>
                        
                    </div>
                </div>
                
                <!-- Services - Step by Step -->
                <!--<div class="col-11 mt-0 mt-2 mx-auto">
                    <div class="row">

                        @include('services.inc.services-stepbystep')
                        
                    </div>
                </div>-->

            <div class="d-block d-md-none">
                @include('contact.contact-banner')
            </div>

            </div>
        </div>
    </div>
</div>

<!-- End -->

@endsection
