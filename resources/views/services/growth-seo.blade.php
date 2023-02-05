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
                                        <hr style="width: 200px; max-width: 200px; background-color: #D0DAFF!important;">
                                        <h4 class="d-inline-block mb-0 mr-4 my-auto colour3">Helping you inform your customers and convert new leads.</h4>
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

                        @include('services.inc.services-stepbystep')
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@include('contact.contact-banner')

<!-- End -->

@endsection
