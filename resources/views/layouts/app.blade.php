<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/storage/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/storage/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/storage/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('/storage/favicon/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('/storage/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
        <link rel="shortcut icon" href="{{ asset('/storage/favicon/favicon.ico') }}">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="{{ asset('/storage/favicon/browserconfig.xml') }}">
        <meta name="theme-color" content="#ffffff">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!--{{ config('app.name', 'Laravel') }}-->
        <title>tyve DIGITAL | Digital agency in Portsmouth - Reaching out to your customers</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- reCAPTCHA V3 -->
        <script async src="https://www.google.com/recaptcha/api.js"></script>
        <link rel="preconnect" href="https://www.google.com">
        <link rel="preconnect" href="https://www.gstatic.com" crossorigin>
    </head>
    <body class="font-sans antialiased">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mx-auto p-0">
                <div class="container-fluid mt-0 mb-0 mb-sm-5" id="frequently-asked-questions">
                    <div class="row">
                        <div class="col-11 pb-4 d-flex mx-auto align-items-stretch">
                            @include('navigation.navigation')
                        </div>
                    </div>
                </div>
                </div>
            </div>    
        </div>
        <div class="w-100">
            @yield('content')
        </div>
        <div class="w-100">
            @include('navigation.footer')
        </div>
        <div>
            <!-- Calendly badge widget begin -->
            <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
            <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
            <script type="text/javascript">window.onload = function() { Calendly.initBadgeWidget({ url: 'https://calendly.com/tyvedigital/learn-digital-for-free?background_color=d0daff&text_color=303bd0&primary_color=303bd0', text: 'Book a FREE digital consultation', color: '#d0daff', textColor: '#303bd0', branding: undefined }); }</script>
            <!-- Calendly badge widget end -->
        </div>

    </body>
</html>
