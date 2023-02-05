@extends('layouts.app')

@section('content')

<style>
.calendly-badge-widget {
    display: none!important;
}
</style>

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
                                        <h4 class="d-inline-block mb-0 mr-4 my-auto colour3"><small style="font-size: 70%;">A chance to chat through the potential of digital for your business, with our in-house experts.</small></h4>
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

                        <div class="col-12 background-colour1 rounded-lg">
                            <div class="row">
                                <div class="col-12 col-sm-12">   
                                    <!-- Calendly inline widget begin -->
                                    <div class="calendly-inline-widget" data-url="https://calendly.com/tyvedigital/learn-digital-for-free?background_color=d0daff&text_color=303bd0&primary_color=d0daff" style="min-width:320px;height:630px;"></div>
                                    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                                    <!-- Calendly inline widget end -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 p-0 mt-3 mb-5">
                            <div class="row">
                                <div class="col">
                                    <p class="card-title colour3 mb-0"><small style="font-size: 66%;">Please contact us to cancel or re-arrange.</small></p>
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
