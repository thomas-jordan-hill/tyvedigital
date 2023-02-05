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
                                        <h4 class="d-inline-block mb-0 mr-4 my-auto colour3">Your local digital experts.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->
                
                <!-- Services - Nav -->
                <div class="col-11 mt-0 mt-4 mx-auto" id="frequently-asked-questions">
                    <div class="row">

                        <div class="col-12">
                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col">
                                    <div class="card border-colour3 background-colourT h-100 rounded-lg">
                                        <div class="card-body py-3 px-3 py-md-5 px-md-5 text-center">
                                            <p class="p colour3 m-0">Established</p>
                                            <h2 class="h3 card-title colour3 m-0"><b><small>2019 in Portsmouth</small></b></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-colour3 background-colourT h-100 rounded-lg">
                                        <div class="card-body py-3 px-3 py-md-5 px-md-5 text-center">
                                            <p class="p colour3 m-0">Clients based across</p>
                                            <h2 class="h3 card-title colour3 m-0"><b><small>UK & Ireland</small></b></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card border-colour3 background-colourT h-100 rounded-lg">
                                        <div class="card-body py-3 px-3 py-md-5 px-md-5 text-center">
                                            <p class="p colour3 m-0">Experts in all areas of</p>
                                            <h2 class="h3 card-title colour3 m-0"><b><small>Customers & Digital</small></b></h3>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="col">
                                    <div class="card border-colour3 background-colourT h-100 rounded-lg">
                                        <div class="card-body p-5 text-center">
                                            <p class="p colour3 m-0">12 months for all customers</p>
                                            <h2 class="h3 card-title colour3 m-0"><b><small>1-2-1 Training</small></b></h3>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                        <div class="col-12 mt-5">
                            <div class="row">
                                <div class="d-none d-md-block col-md-2">
                                    <div class="card card-clear h-100 rounded-lg" style="border: 0px solid transparent;">
                                        <img style="max-width: 250px;" src="/storage/jan2021/test-homepage-jan2021-section3-1.png" class="card-img-top pt-4 w-75" alt="...">
                                    </div>
                                </div>
                                <div class="col-12 col-md-10">
                                    <h3 class="mb-4 colour3 fw-bold" style="white-space: nowrap;">We believe in Digital</h3>
                                    <p class="h5 colour3 mb-4">Executed correctly, with good backing, digital products are one of the most powerful assets within any business, and we know how to maximise your approach regardless of your current situation.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@include('contact.contact-banner')

<!-- End -->

@endsection
