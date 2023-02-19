@extends('layouts.app')

@section('content')

<style>
    .calendly-badge-widget {
        display: none;
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
                                        <h4 class="d-inline-block mb-0 mr-4 my-auto colour3">We'd love to hear from you!</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                <!-- End -->

<div class="container-fluid background-white" id="our-customers">
    <div class="row">
        <div class="col-12 col-md-12 mx-auto mt-4">
            <div class="row">                
                
                <!-- Services - Nav -->
                <div class="col-11 mt-0 mt-md-4 mx-auto" id="frequently-asked-questions">
                    <div class="row">

                            <div class="col-12 mb-4 mb-md-5">
                                <div class="row g-4">
                                    <div class="col-12 col-md-6">
                                        <div class="card border-colour3 background-colourT h-100 rounded-lg">
                                            <div class="card-body py-3 px-3 py-md-5 px-md-5 text-center">
                                                <p class="p colour3 m-0">General Enquiries</p>
                                                <p class="p card-title colour3 m-0"><b><a class="colour3" href="mailto:contact@tyvedigital.com">contact@tyvedigital.com</a></b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="col-12 col-sm-3">
                                        <div class="card border-colour3 background-colourT h-100 rounded-lg">
                                            <div class="card-body py-3 px-3 py-md-5 px-md-5 text-center">
                                                <p class="p colour3 m-0">Customer Success Manager</p>
                                                <h2 class="h3 card-title colour3 m-0"><b><small>Melissa</small></b></h3>
                                                <p class="p card-title colour3 m-0"><b><a class="colour3" href="mailto:melissa@tyvedigital.com">melissa@tyvedigital.com</a></b></p>
                                                <p class="p colour3 m-0">Founder & Owner</p>
                                                <h2 class="h3 card-title colour3 m-0"><b><small>Tom</small></b></h3>
                                                <p class="p card-title colour3 m-0"><b><a class="colour3" href="mailto:tom@tyvedigital.com">tom@tyvedigital.com</a></b></p>
                                            </div>
                                        </div>
                                    </div>-->
                                    <div class="col-12 col-md-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row">

                                                    <div class="col-12">
                                                    @if ($success = session('success'))
                                                        <div class="alert alert-success" role="alert">{{ $success }}</div>
                                                    @endif
                                                    
                                                    
                                                    @if (count($errors))
                                                        @foreach ($errors->all() as $error)
                                                        <div class="alert alert-danger" role="alert">{{ $error }}</div>
                                                        @endforeach
                                                    @endif
                                                    </div>
                                                    
                                                    <div class="col-12">
                                                    <form id="contact-form" method="POST" action="{{ action('App\Http\Controllers\ContactController@index') }}">
                                                    @csrf

                                                        <div class="mb-3">
                                                            <label for="name" class="form-label p p">Name</label>
                                                            <input type="text" name="name" class="form-control p {{ $errors->has('name') ? 'invalid' : '' }}" value="{{ old('name') }}" id="name" placeholder="John Smith">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="mobile" class="form-label p">Mobile number</label>
                                                            <input type="text" id="mobile" name="mobile" class="form-control p {{ $errors->has('mobile') ? 'invalid' : '' }}" value="{{ old('mobile') }}" placeholder="07123 456789">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="email" class="form-label p">Email address</label>
                                                            <input type="email" id="email" name="email" class="form-control p {{ $errors->has('email') ? 'invalid' : '' }}" value="{{ old('email') }}" placeholder="johnsmith@email.com">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="subject" class="form-label p">Subject</label>
                                                            <input type="text" id="subject" name="subject" class="form-control p {{ $errors->has('subject') ? 'invalid' : '' }}" value="{{ old('subject')}}" placeholder="I need to boost my CRM engagement">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="message" class="form-label p">Message</label>
                                                            <textarea type="text" id="message" name="message" class="form-control p {{ $errors->has('message') ? 'invalid' : '' }}" placeholder="Been doing emails in Mail Chimp for a year now, but things have gotten stale..." rows="3">{{ old('message')}}</textarea>
                                                        </div>
                                                        <div class="mb-3">
                                                            <button class="g-recaptcha btn btn-secondary mt-4" data-sitekey="reCAPTCHA_site_key" data-callback="onSubmit" data-action="submit" type="submit" value="Submit">Submit</button>
                                                        </div>

                                                    </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
   function onSubmit(token) {
     document.getElementById("contact-form").submit();
   }
 </script>

@endsection
