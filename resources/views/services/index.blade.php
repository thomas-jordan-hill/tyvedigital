@extends('layouts.app')

@section('content')

    @guest
    @else
    <div class="container container-global">
        <div class="row">
            <div class="col-12">
                <div class="background-lightgrey radius-15 p-4 mb-3 mb-md-4">
                    <div class="row">
                        <div class="col-12 text-right">
                            <a href='/blog/create'> 
                                <div class="d-inline-block">
                                    <button class='btn btn-primary ml-auto'>Create a new blog</button>
                                </div>    
                            </a>
                        </div>
                    </div>
                </div>    
            </div>    
        </div>
    </div>
    @endguest

    <!-- Section 1 -->
    <div class="container container-global" id="frequently-asked-questions">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="row">
                    <div class="col-12 mb-2 mb-sm-4 mt-3 mt-sm-4">
                        <div class="d-flex my-auto">
                            <h2 class="mb-0 mr-4 my-auto font-weight-bold" style="white-space: nowrap;">Services</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
    <!-- Section 2 -->
    <div class="container container-global" id="frequently-asked-questions">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-sm-9 mb-2 mb-sm-4 mt-2 mt-sm-3">
                        <div class="mb-0">
                            <h3 class="alt-h3 mb-2" style="font-weight: normal;">Websites</h3>
                            <p class="alt-h3 mb-0" style="font-weight: normal;">We offer three packages to make it easy for you to carry on running your business, while ensuring we build the right website for you and your brand.</p>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-2 mt-sm-0 mt-lg-0 text-left">
                                <div class="card radius-15 not-recommended p-2">
                                    <div class="card-body p-4">
                                        <p class="m-0 p-0">Website</p>
                                        <h3 class="m-0 p-0">Simple</h3>
                                        <img class="card-img-top p-4" src="/storage/jan2021/test-homepage-jan2021-section2-1.png" alt="Card image cap">
                                        <h5 class="card-title">What's included</h5>
                                        <ul class="list-unstyled">
                                            <li class="px-0">
                                                <img class="align-middle my-auto mr-2" style="width: 17px;" src="/storage/svgs/tick.svg" alt="green tick">
                                                <p class="p d-inline-block small align-middle my-auto">Designed & built Website</p>
                                            </li>
                                            <li class="px-0">
                                                <img class="align-middle my-auto mr-2" style="width: 17px;" src="/storage/svgs/tick.svg" alt="green tick">
                                                <p class="p d-inline-block small align-middle my-auto">Mobile Friendly</p>
                                            </li>
                                            <li class="px-0">
                                                <img class="align-middle my-auto mr-2" style="width: 17px;" src="/storage/svgs/tick.svg" alt="green tick">
                                                <p class="p d-inline-block small align-middle my-auto">Google MyBusiness</p>
                                            </li>
                                        </ul>
                                        <div class="d-flex mt-3">
                                            <h3 class="my-auto line-height-1 d-inline-block align-middle m-0">£250<!--<span class="p smaller d-block">then £20 a month<sup>*</sup></span>--></h3>
                                            <a href="#" class="ml-auto my-auto align-middle btn btn-primary">Buy now</a>
                                        </div>    
                                        <!--<p class="mt-2 text-right p smaller"><small><sup>*</sup>for a minimum of 12 months</small></p>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-2 mt-sm-0 mt-lg-0 text-left">
                                <div class="card radius-15 p-2 recommended position-relative">
                                    <div class="card-body p-4">
                                        <p class="m-0 p-0">Website</p>
                                        <h3 class="m-0 p-0">Simple +</h3>
                                        <img class="card-img-top p-4" src="/storage/jan2021/test-homepage-jan2021-section2-1.png" alt="Card image cap">
                                        <h5 class="card-title">What's included</h5>
                                        <ul class="list-unstyled">
                                            <li class="px-0">
                                                <img class="align-middle my-auto mr-2" style="width: 17px;" src="/storage/svgs/tick.svg" alt="green tick">
                                                <p class="p d-inline-block small align-middle my-auto">Designed & built Website</p>
                                            </li>
                                            <li class="px-0">
                                                <img class="align-middle my-auto mr-2" style="width: 17px;" src="/storage/svgs/tick.svg" alt="green tick">
                                                <p class="p d-inline-block small align-middle my-auto">Mobile Friendly</p>
                                            </li>
                                            <li class="px-0">
                                                <img class="align-middle my-auto mr-2" style="width: 17px;" src="/storage/svgs/tick.svg" alt="green tick">
                                                <p class="p d-inline-block small align-middle my-auto">Google MyBusiness & Tracking</p>
                                            </li>
                                            <li class="px-0">
                                                <img class="align-middle my-auto mr-2" style="width: 17px;" src="/storage/svgs/tick.svg" alt="green tick">
                                                <p class="p d-inline-block small align-middle my-auto">6 Blogs</p>
                                            </li>
                                            <li class="px-0">
                                                <img class="align-middle my-auto mr-2" style="width: 17px;" src="/storage/svgs/tick.svg" alt="green tick">
                                                <p class="p d-inline-block small align-middle my-auto">12 Social media posts</p>
                                            </li>
                                        </ul>
                                        <div class="d-flex mt-3">
                                            <h3 class="my-auto line-height-1 d-inline-block align-middle m-0">£300<span class="p smaller d-block">then £20 a month<sup>*</sup></span></h3>
                                            <a href="#" class="ml-auto my-auto align-middle btn btn-primary">Buy now</a>
                                        </div>    
                                        <p class="mt-2 text-right p smaller"><small><sup>*</sup>for a minimum of 12 months</small></p>
                                    </div>
                                    <span class="rounded-lg py-2 px-3 d-block text-center m-auto position-absolute" style="top: 0px;left: 50%;transform: translate(-50%, -50%);line-height: 1;white-space: nowrap;background: #c3d2fa;">Recommended for new businesses</span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-2 mt-sm-3 mt-lg-0 text-left">
                                <div class="card radius-15 not-recommended p-2">
                                    <div class="card-body p-4">
                                        <p class="m-0 p-0">Website</p>
                                        <h3 class="m-0 p-0">Pro</h3>
                                        <img class="card-img-top p-4" src="/storage/jan2021/test-homepage-jan2021-section2-1.png" alt="Card image cap">
                                        <h5 class="card-title">What's included</h5>
                                        <ul class="list-unstyled">
                                            <li class="px-0">
                                                <img class="align-middle my-auto mr-2" style="width: 17px;" src="/storage/svgs/tick.svg" alt="green tick">
                                                <p class="p d-inline-block small align-middle my-auto">Designed & built Website</p>
                                            </li>
                                            <li class="px-0">
                                                <img class="align-middle my-auto mr-2" style="width: 17px;" src="/storage/svgs/tick.svg" alt="green tick">
                                                <p class="p d-inline-block small align-middle my-auto">iPhone & Android optimised</p>
                                            </li>
                                            <li class="px-0">
                                                <img class="align-middle my-auto mr-2" style="width: 17px;" src="/storage/svgs/tick.svg" alt="green tick">
                                                <p class="p d-inline-block small align-middle my-auto">Google MyBusiness & Tracking</p>
                                            </li>
                                            <li class="px-0">
                                                <img class="align-middle my-auto mr-2" style="width: 17px;" src="/storage/svgs/tick.svg" alt="green tick">
                                                <p class="p d-inline-block small align-middle my-auto">12 Blog posts</p>
                                            </li>
                                            <li class="px-0">
                                                <img class="align-middle my-auto mr-2" style="width: 17px;" src="/storage/svgs/tick.svg" alt="green tick">
                                                <p class="p d-inline-block small align-middle my-auto">26 Social media posts</p>
                                            </li>
                                            <li class="px-0">
                                                <img class="align-middle my-auto mr-2" style="width: 17px;" src="/storage/svgs/tick.svg" alt="green tick">
                                                <p class="p d-inline-block small align-middle my-auto">SEO Optimised</p>
                                            </li>
                                            <li class="px-0">
                                                <img class="align-middle my-auto mr-2" style="width: 17px;" src="/storage/svgs/tick.svg" alt="green tick">
                                                <p class="p d-inline-block small align-middle my-auto">Monthly SEO checks</p>
                                            </li>
                                            <li class="px-0">
                                                <img class="align-middle my-auto mr-2" style="width: 17px;" src="/storage/svgs/tick.svg" alt="green tick">
                                                <p class="p d-inline-block small align-middle my-auto">Site speed checks</p>
                                            </li>
                                        </ul>
                                        <div class="d-flex mt-3">
                                            <h3 class="my-auto line-height-1 d-inline-block align-middle m-0">£400<span class="p smaller d-block">then £30 a month<sup>*</sup></span></h3>
                                            <a href="#" class="ml-auto my-auto align-middle btn btn-primary">Buy now</a>
                                        </div>    
                                        <p class="mt-2 text-right p smaller"><small><sup>*</sup>for a minimum of 24 months</small></p>
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

@endsection
