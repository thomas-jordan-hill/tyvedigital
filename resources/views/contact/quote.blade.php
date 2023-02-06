
@extends('layouts.app')

@section('content')

  <section class="text-center container">
    <div class="row py-5">
      <div class="col-12 mx-auto">
        <h1 class="white h1">Contact Us</h1>
        <p class="lead white">To recieve a FREE onsite quote, contact us today.</p>
        <div class="d-block d-md-inline-block">
        <a class="white text-decoration-none" href="tel:+447725956839">
            <img style="max-width: 28px;" class="my-auto d-inline-block align-middle pr-2" src="/storage/dchampionroofing-icon-phone-invert.png">
            <p class="p m-0 align-middle d-inline-block mr-0 mr-md-5" style="white-space: nowrap;">07725 956 839</p>
        </a>    
        </div>
        <div class="d-block d-md-inline-block mt-2 mt-md-0">
        <a class="white text-decoration-none" href="mailto:daniel@dchampionroofing.co.uk">
            <img style="max-width: 28px;" class="my-auto d-inline-block align-middle pr-2" src="/storage/dchampionroofing-icon-email-invert.png">
            <p class="p m-0 align-middle d-inline-block" style="white-space: nowrap;">enquiry@dchampionroofing.co.uk</p>
        </a>   
        </div> 
      </div>
    </div>
  </section>

<div class="container-fluid">
    <div class="row">
        <div class="col-10 mx-auto">
            <hr class="mb-0 mt-0 d-block" style="border-bottom: 1px solid white;">
        </div>
    </div>
</div>
  
<div class="container-fluid" id="quote">
    <div class="row">
        <div class="col-10 mx-auto mt-5">
            <div class="row">
                <div class="col-12 text-center my-auto">
                    <h3 class="white">Get a free quote</h3>
                    <p class="white">Leave your details and we will get back to you as soon as we can.</p>
                </div>

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
                <form method="POST" action="{{ action('App\Http\Controllers\ContactController@index') }}">
                @csrf

                    <div class="mb-3">
                        <label for="name" class="white form-label">Name</label>
                        <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'invalid' : '' }}" value="{{ old('name') }}" id="name" placeholder="John Smith">
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="white form-label">Mobile number</label>
                        <input type="text" id="mobile" name="mobile" class="form-control {{ $errors->has('mobile') ? 'invalid' : '' }}" value="{{ old('mobile') }}" placeholder="07123 456789">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="white form-label">Email address</label>
                        <input type="email" id="email" name="email" class="form-control {{ $errors->has('email') ? 'invalid' : '' }}" value="{{ old('email') }}" placeholder="johnsmith@email.com">
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="white form-label">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-control {{ $errors->has('subject') ? 'invalid' : '' }}" value="{{ old('subject')}}" placeholder="New house roofing">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="white form-label">Message</label>
                        <textarea type="text" id="message" name="message" class="form-control {{ $errors->has('message') ? 'invalid' : '' }}" placeholder="I'm interested in a quote for a roofing on my house..." rows="3">{{ old('message')}}</textarea>
                    </div>
                    <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                    <div class="mb-3">
                        <button type="submit" value="Submit" class="btn btn-secondary mt-4">Submit</button>
                    </div>

                </form>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

