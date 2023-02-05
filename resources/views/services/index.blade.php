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
                                <div class="col-12 mb-2 mb-sm-0 mt-2 text-center">
                                    <div class="m-auto">
                                        <h2 class="mb-0 mr-4 my-auto colour3 fw-bold" style="white-space: nowrap;">Services</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->
                
                <!-- Services - Nav -->
                <div class="d-none d-md-block col-11 mt-0 mb-0 mx-auto" id="frequently-asked-questions">
                    <div class="row">
                        <div class="col-12 pb-5">
                            <div class="row row-cols-2 row-cols-lg-6 g-4">
                                <div class="col">
                                    <div class="card card-clear h-100 rounded-lg" style="border: 0px solid transparent;">
                                        <div class="card-footer p-0 m-auto">
                                            <a href="/services/websites/" class="ml-auto my-auto align-middle btn btn-clear colour3">Websites</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card card-clear h-100 rounded-lg" style="border: 0px solid transparent;">
                                        <div class="card-footer p-0 m-auto">
                                            <a href="/services/finding-new-leads/" class="ml-auto my-auto align-middle btn btn-clear colour3">Finding new leads</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card card-clear h-100 rounded-lg" style="border: 0px solid transparent;">
                                        <div class="card-footer p-0 m-auto">
                                            <a href="/services/print-design" class="ml-auto my-auto align-middle btn btn-clear colour3">Print design</a>
                                        </div>
                                    </div>    
                                </div>
                                <div class="col">
                                    <div class="card card-clear h-100 rounded-lg" style="border: 0px solid transparent;">
                                        <div class="card-footer p-0 m-auto">
                                            <a href="/services/email-engagement/" class="ml-auto my-auto align-middle btn btn-clear colour3">Email engagement</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card card-clear h-100 rounded-lg"  style="border: 0px solid transparent;">
                                        <div class="card-footer p-0 m-auto">
                                            <a href="/services/data-capture/" class="ml-auto my-auto align-middle btn btn-clear colour3">Capturing data</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card card-clear h-100 rounded-lg"  style="border: 0px solid transparent;">
                                        <div class="card-footer p-0 m-auto">
                                            <a href="/services/growth-seo/" class="ml-auto my-auto align-middle btn btn-clear colour3">Growth & SEO</a>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-11 mt-0 mb-4 mb-md-5 mx-auto" id="frequently-asked-questions">
                    <div class="row">
                        <div class="col-12 pb-0 pb-md-5 d-flex align-items-stretch">
                            <div class="row row-cols-2 row-cols-2 row-cols-lg-3 g-4">
                                <div class="col">
                                    <a class="text-decoration-none" href="/services/websites/">
                                        <div class="card card-clear h-100 rounded-lg" style="border: 0px solid transparent;">
                                            <img src="/storage/may2022/May2022Websites.png" class="background-colour3 rounded-lg card-img-top pt-4" alt="Text based Headstar logo with a blue star after the r">
                                            <div class="card-body px-0">
                                                <h4 class="h5 card-title colour3 m-0">Websites</h4>
                                            </div>
                                            <div class="d-none d-md-block card-footer p-0">
                                                <button class="ml-auto my-auto align-middle btn btn-primary">Find Out More</button>
                                            </div>
                                        </div>
                                    </a>    
                                </div>
                                <div class="col">
                                    <a class="text-decoration-none" href="/services/finding-new-leads/">
                                        <div class="card card-clear h-100 rounded-lg" style="border: 0px solid transparent;">
                                            <img src="/storage/may2022/May2022GraphicDesign.png" class="background-colour3 rounded-lg card-img-top pt-4" alt="...">
                                            <div class="card-body px-0">
                                                <h4 class="h5 card-title colour3 m-0">Finding new leads</h4>
                                            </div>
                                            <div class="d-none d-md-block card-footer p-0">
                                                <button class="ml-auto my-auto align-middle btn btn-primary">Find Out More</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="text-decoration-none" href="/services/print-design/">
                                        <div class="card card-clear h-100 rounded-lg" style="border: 0px solid transparent;">
                                            <img src="/storage/may2022/May2022PrintArtwork.png" class="background-colour3 rounded-lg card-img-top pt-4" alt="...">
                                            <div class="card-body px-0">
                                                <h4 class="h5 card-title colour3 m-0">Print design</h4>
                                            </div>
                                            <div class="d-none d-md-block card-footer p-0">
                                                <button class="ml-auto my-auto align-middle btn btn-primary">Find Out More</button>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="text-decoration-none" href="/services/email-engagement/">
                                        <div class="card card-clear h-100 rounded-lg" style="border: 0px solid transparent;">
                                        <img src="/storage/may2022/May2022CRMEmailManagement.png" class="background-colour3 rounded-lg card-img-top pt-4" alt="Text based Headstar logo with a blue star after the r">
                                        <div class="card-body px-0">
                                            <h4 class="h5 card-title colour3 m-0">Email engagement</h4>
                                        </div>
                                        <div class="d-none d-md-block card-footer p-0">
                                            <button class="ml-auto my-auto align-middle btn btn-primary">Find Out More</button>
                                        </div>
                                        </div>
                                    </a>    
                                </div>
                                <div class="col">
                                    <a class="text-decoration-none" href="/services/data-capture/">
                                        <div class="card card-clear h-100 rounded-lg"  style="border: 0px solid transparent;">
                                            <img src="/storage/may2022/May2022DataCaptureMicrosite.png" class="background-colour3 rounded-lg card-img-top pt-4" alt="...">
                                            <div class="card-body px-0">
                                                <h4 class="h5 card-title colour3 m-0">Capturing data</h4>
                                            </div>
                                            <div class="d-none d-md-block card-footer p-0">
                                                <button class="ml-auto my-auto align-middle btn btn-primary">Find Out More</button>
                                            </div>
                                        </div>
                                    </a>    
                                </div>
                                <div class="col">
                                    <a class="text-decoration-none" href="/services/growth-seo/" >
                                        <div class="card card-clear h-100 rounded-lg"  style="border: 0px solid transparent;">
                                            <img src="/storage/may2022/May2022SEOGrowth.png" class="background-colour3 rounded-lg card-img-top pt-4" alt="...">
                                            <div class="card-body px-0">
                                                <h4 class="h5 card-title colour3 m-0">Growth & SEO</h4>
                                            </div>
                                            <div class="d-none d-md-block card-footer p-0">
                                                <button class="ml-auto my-auto align-middle btn btn-primary">Find Out More</button>
                                            </div>
                                        </div>
                                    </a>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Services - All -->
                <!--<div class="container py-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="w-100 g-background-blue-2 rounded-lg pt-5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 position-relative">
                                            <div class="row">
                                                <div class="col-7 my-auto pb-5 px-5">
                                                    <div class="row" style="background: transparent;">
                                                        <div class="col-12">
                                                            <h2 class="card-title fw-bold mb-2 line-height-1"><small><b>Get closer to your customers today.</b></small></h2>
                                                            <div class="btn btn-primary mt-4">Contact us</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-5 mt-auto">
                                                    <div class="w-100 h-100 text-center">
                                                        <img class="w-100 px-5" src="/storage/jan2021/test-service-jan2021-box1.png">
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>-->
                <!-- End -->

                <!-- Services - All Blocks -->
                <!--<div class="col-11 mt-0 mb-5 mx-auto">-->

                    <!-- Services - Websites --
                    <div class="row row-cols-2 row-cols-lg-2 g-4" id="websites">
                        <div class="col d-flex">
                            <div class="row">
                                <div class="col-12 mb-2 d-flex">
                                    <div class="row">
                                        <div class="col-12 mt-2 mt-sm-0 mt-lg-0 text-left d-flex">
                                            <div class="card border-colour3 background-colour3 rounded-lg p-4">
                                                <div class="card-body">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <p class="h2 big card-title colour2 mt-3 mt-sm-4 mt-md-0 m-0 mb-0 mb-xl-4">Websites</p>
                                                                <div class="row">
                                                                    <div class="col-12 col-md-6 d-block d-xl-none">
                                                                        <div class="col-12">
                                                                            <img class="card-img-top p-0 img-fluid" src="/storage/services/websites/tyvedigital-services_websites-hero.png" alt="Two examples of what a tyve digital client website looks like, in a mobile and desktop format.">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <p class="h5 pt-2 pt-sm-3 pt-xl-0 pb-0 pb-md-0 mb-0 mb-xl-4" style="line-height: 1;">Everything starts with your website. Customers use your website for lots of different reasons. If they can't find you, they'll think you don't exist.</p>
                                                                    </div>
                                                                    <div class="col-12 col-md-6 d-none d-xl-block">
                                                                        <div class="col-12">
                                                                            <img class="card-img-top p-0 p-sm-0 p-md-2 p-lg-0 img-fluid" src="/storage/services/websites/tyvedigital-services_websites-hero.png" alt="Two examples of what a tyve digital client website looks like, in a mobile and desktop format.">
                                                                        </div>
                                                                    </div>
                                                                </div>    
                                                            </div>    
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <a href="/services/websites/" class="ml-auto my-auto align-middle btn btn-secondary">Find Out More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        !-- End -->

                        <!-- Services - Graphic Design --
                        <div class="col d-flex" id="websites">
                            <div class="row">
                                <div class="col-12 mb-2 d-flex">
                                    <div class="row">
                                        <div class="col-12 mt-2 mt-sm-0 mt-lg-0 text-left d-flex">
                                            <div class="card border-colour3 background-colour3 rounded-lg p-4">
                                                <div class="card-body">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <p class="h2 big card-title colour2 mt-3 mt-sm-4 mt-md-0 m-0 mb-0 mb-xl-4">Design</p>
                                                                <div class="row">
                                                                    <div class="col-12 col-md-6 d-block d-xl-none">
                                                                        <div class="col-12">
                                                                            <img class="card-img-top p-0 img-fluid" src="/storage/services/graphicDesign/tyvedigital-services-graphicDesign-hero.png" alt="Two examples of what a tyve digital client website looks like, in a mobile and desktop format.">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <p class="h5 pt-2 pt-sm-3 pt-xl-0 pb-0 pb-md-0 mb-0 mb-xl-4" style="line-height: 1;">Get creative. We work on all pieces of design. From artwork, to posters all the way to websites. We know what works, with your customers in mind.</p>
                                                                    </div>
                                                                    <div class="col-12 col-md-6 d-none d-xl-block">
                                                                        <div class="col-12">
                                                                            <img class="card-img-top p-0 p-sm-0 p-md-2 p-lg-0 img-fluid" src="/storage/services/graphicDesign/tyvedigital-services-graphicDesign-hero.png" alt="Two examples of what a tyve digital client website looks like, in a mobile and desktop format.">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>    
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <a href="/services/graphic-design/" class="ml-auto my-auto align-middle btn btn-secondary">Find Out More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        !-- End -->

                        <!-- Services - Print Artwork --
                        <div class="col d-flex" id="websites">
                            <div class="row">
                                <div class="col-12 mb-2 d-flex">
                                    <div class="row">
                                        <div class="col-12 mt-2 mt-sm-0 mt-lg-0 text-left d-flex">
                                            <div class="card border-colour3 background-colour3 rounded-lg p-4">
                                                <div class="card-body">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <p class="h2 big card-title colour2 mt-3 mt-sm-4 mt-md-0 m-0 mb-0 mb-xl-4">Print Artwork</p>
                                                                <div class="row">
                                                                    <div class="col-12 col-md-6 d-block d-xl-none">
                                                                        <div class="col-12">
                                                                            <img class="card-img-top p-0 img-fluid" src="/storage/services/printArtwork/tyvedigital-services-printArtwork-hero.png" alt="Two examples of what a tyve digital client website looks like, in a mobile and desktop format.">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <p class="h5 pt-2 pt-sm-3 pt-xl-0 pb-0 pb-md-0 mb-0 mb-xl-4" style="line-height: 1;">Print artwork when targetted correctly still lands well with consumers. Work with us to correctly create, print and send out printed ads.</p>
                                                                    </div>
                                                                    <div class="col-12 col-md-6 d-none d-xl-block">
                                                                        <div class="col-12">
                                                                            <img class="card-img-top p-0 p-sm-0 p-md-2 p-lg-0 img-fluid" src="/storage/services/printArtwork/tyvedigital-services-printArtwork-hero.png" alt="Two examples of what a tyve digital client website looks like, in a mobile and desktop format.">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <a href="/services/websites/" class="ml-auto my-auto align-middle btn btn-secondary">Find Out More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        !-- End -->

                        <!-- Services - CRM & Email Management  --
                        <div class="col d-flex" id="crm">
                            <div class="row">
                                <div class="col-12 mb-2 d-flex">
                                    <div class="row">
                                        <div class="col-12 mt-2 mt-sm-0 mt-lg-0 text-left d-flex">
                                            <div class="card border-colour3 background-colour3 rounded-lg p-4">
                                                <div class="card-body">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <p class="h2 big card-title colour2 mt-3 mt-sm-4 mt-md-0 m-0 mb-0 mb-xl-4">CRM & Email</p>
                                                                <div class="row">
                                                                    <div class="col-12 col-md-6 d-block d-xl-none">
                                                                        <div class="col-12">
                                                                            <img class="card-img-top p-0 img-fluid" src="/storage/services/emailCRM/tyvedigital-services-emailCRM-hero.png" alt="Two examples of what a tyve digital client website looks like, in a mobile and desktop format.">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <p class="h5 pt-2 pt-sm-3 pt-xl-0 pb-0 pb-md-0 mb-0 mb-xl-4" style="line-height: 1;">Email is one of the strongest ways to consistenly communicate with your customers. Work with us to create a comprehensive CRM strategy.</p>
                                                                    </div>
                                                                    <div class="col-12 col-md-6 d-none d-xl-block">
                                                                        <div class="col-12">
                                                                            <img class="card-img-top p-0 p-sm-0 p-md-2 p-lg-0 img-fluid" src="/storage/services/emailCRM/tyvedigital-services-emailCRM-hero.png" alt="Two examples of what a tyve digital client website looks like, in a mobile and desktop format.">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <a href="/services/crm-email/" class="ml-auto my-auto align-middle btn btn-secondary">Find Out More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        !-- End -->
                
                        <!-- Services - Data Capture & Microsite --
                        <div class="col d-flex" id="data-capture">
                            <div class="row">
                                <div class="col-12 mb-2 d-flex">
                                    <div class="row">
                                        <div class="col-12 mt-2 mt-sm-0 mt-lg-0 text-left d-flex">
                                            <div class="card border-colour3 background-colour3 rounded-lg p-4">
                                                <div class="card-body">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <p class="h2 big card-title colour2 mt-3 mt-sm-4 mt-md-0 m-0 mb-0 mb-xl-4">Data Capture</p>
                                                                <div class="row">
                                                                    <div class="col-12 col-md-6 d-block d-xl-none">
                                                                        <div class="col-12">
                                                                            <img class="card-img-top p-0 img-fluid" src="/storage/services/dataCapture/tyvedigital-services-dataCapture-hero.png" alt="Two examples of what a tyve digital client website looks like, in a mobile and desktop format.">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <p class="h5 pt-2 pt-sm-3 pt-xl-0 pb-0 pb-md-0 mb-0 mb-xl-4" style="line-height: 1;">Generating leads can be complicated. Using data capture products such as contact forms or newsletter articles, generating new leads will become more easier for your business.</p>
                                                                    </div>
                                                                    <div class="col-12 col-md-6 d-none d-xl-block">
                                                                        <div class="col-12">
                                                                            <img class="card-img-top p-0 p-sm-0 p-md-2 p-lg-0 img-fluid" src="/storage/services/dataCapture/tyvedigital-services-dataCapture-hero.png" alt="Two examples of what a tyve digital client website looks like, in a mobile and desktop format.">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <a href="/services/data-capture/" class="ml-auto my-auto align-middle btn btn-secondary">Find Out More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        !-- End -->

                        <!-- Services - SEO & Growth --
                        <div class="col d-flex" id="seo">
                            <div class="row">
                                <div class="col-12 mb-2 d-flex">
                                    <div class="row">
                                        <div class="col-12 mt-2 mt-sm-0 mt-lg-0 text-left d-flex">
                                            <div class="card border-colour3 background-colour3 rounded-lg p-4">
                                                <div class="card-body">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <p class="h2 big card-title colour2 mt-3 mt-sm-4 mt-md-0 m-0 mb-0 mb-xl-4">SEO & Growth</p>
                                                                <div class="row">
                                                                    <div class="col-12 col-md-6 d-block d-xl-none">
                                                                        <div class="col-12">
                                                                            <img class="card-img-top p-0 img-fluid" src="/storage/services/seo/tyvedigital-services-seo-hero.png" alt="Two examples of what a tyve digital client website looks like, in a mobile and desktop format.">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <p class="h5 pt-2 pt-sm-3 pt-xl-0 pb-0 pb-md-0 mb-0 mb-xl-4" style="line-height: 1;">Generate leads online starts with a website. Customers find you most through search when you have a updated online presence. If they can't find you, they'll think you don't exist.</p>
                                                                    </div>
                                                                    <div class="col-12 col-md-6 d-none d-xl-block">
                                                                        <div class="col-12">
                                                                            <img class="card-img-top p-0 p-sm-0 p-md-2 p-lg-0 img-fluid" src="/storage/services/seo/tyvedigital-services-seo-hero.png" alt="Two examples of what a tyve digital client website looks like, in a mobile and desktop format.">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <a href="/services/seo/" class="ml-auto my-auto align-middle btn btn-secondary">Find Out More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                !-- End -->
                <!--</div>-->

            </div>
        </div>

        @include('contact.contact-banner')
        
    </div>
</div>
    <!-- End -->

@endsection
