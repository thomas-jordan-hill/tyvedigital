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
                                        <h2 class="mb-0 mr-4 my-auto colour3 fw-bold" style="white-space: nowrap;">{{ $pagetitle }}</h2>
                                        <hr style="width: 200px; max-width: 200px; background-color: #D0DAFF!important;">
                                        <h4 class="d-inline-block mb-0 mr-4 my-auto colour3">We're ready and waiting for businesses like yours.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->
                
                <!-- Services - Nav -->
                <div class="col-11 mt-0 mt-md-4 mx-auto" id="frequently-asked-questions">
                    <div class="row">

                        <div class="col-12 mb-4 mb-md-5">
                            <div class="row g-4">
                                <div class="col-12 col-sm-6">
                                    <div class="card border-colour3 background-colourT h-100 rounded-lg">
                                        <div class="card-body py-3 px-3 py-md-5 px-md-5 text-center">
                                            <p class="p colour3 m-0">General Enquiries</p>
                                            <h2 class="h3 card-title colour3 m-0"><b><small>Customer Services</small></b></h3>
                                            <p class="p card-title colour3 m-0"><b><a class="colour3" href="mailto:contact@tyvedigital.com">contact@tyvedigital.com</a></b></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="card border-colour3 background-colourT h-100 rounded-lg">
                                        <div class="card-body py-3 px-3 py-md-5 px-md-5 text-center">
                                            <p class="p colour3 m-0">Customer Success Manager</p>
                                            <h2 class="h3 card-title colour3 m-0"><b><small>Melissa</small></b></h3>
                                            <p class="p card-title colour3 m-0"><b><a class="colour3" href="mailto:melissa@tyvedigital.com">melissa@tyvedigital.com</a></b></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="card border-colour3 background-colourT h-100 rounded-lg">
                                        <div class="card-body py-3 px-3 py-md-5 px-md-5 text-center">
                                            <p class="p colour3 m-0">Founder & Owner</p>
                                            <h2 class="h3 card-title colour3 m-0"><b><small>Tom</small></b></h3>
                                            <p class="p card-title colour3 m-0"><b><a class="colour3" href="mailto:tom@tyvedigital.com">tom@tyvedigital.com</a></b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-0 mt-md-4">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="mb-0 colour3 fw-bold mb-0 mb-md-3">What to expect when you first contact us</h3>
                                    <ol class="colour3 p mt-2 mb-4">
                                        <li>Hello!</li>
                                        <li>A playback of your request</li>
                                        <li>Time slot for us to chat</li>
                                        <li>Previous clients & testimonials</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
