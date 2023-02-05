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
                                        <hr class="d-none d-sm-inline-block" style="width: 200px; max-width: 200px; background-color: #D0DAFF!important;">
                                        <h4 class="d-none d-sm-inline-block mb-0 mr-4 my-auto colour3"><small style="font-size: 70%;">A 360<sup><small>o</small></sup> review of your businesses presence online, including nexts steps. Start your year off in the right way</small></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->
                
                <!-- Services - Nav -->
                <div class="col-11 mt-0 mt-sm-4 mx-auto" id="frequently-asked-questions">
                    <div class="row">

                        <div class="col-12 background-colour3 rounded-lg">
                            <div class="row">
                                <div class="col-12 col-sm-6 d-flex p-0">
                                    <div class="mt-auto text-center">
                                        <div class="card-body">
                                            <img style="max-width: 750px;" class="w-100 px-4 pb-0 pt-4" src="/storage/images/tyvedigital-freedigitalreview-signupform-title.png">
                                            <img style="max-width: 500px;" class="d-none d-sm-block w-100 px-4 py-0" src="/storage/images/tyvedigital-freedigitalreview-homepage-1.png">
                                        </div>
                                    </div>
                                </div>    
                                <!-- Begin Mailchimp Signup Form -->
                                <div id="mc_embed_signup" class="col-12 col-sm-6 p-4">
                                    <form action="https://tyvedigital.us7.list-manage.com/subscribe/post?u=ed4a6722b9db621b13b781173&amp;id=268ed0bc60&amp;v_id=4503&amp;f_id=00d8eee3f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                        <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                                        <div class="mc-field-group">
                                            <label for="mce-FNAME">First Name </label>
                                            <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                                            <span id="mce-FNAME-HELPERTEXT" class="helper_text"></span>
                                        </div>
                                        <div class="mc-field-group">
                                            <label for="mce-LNAME">Last Name </label>
                                            <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                                            <span id="mce-LNAME-HELPERTEXT" class="helper_text"></span>
                                        </div>
                                        <div class="mc-field-group">
                                            <label for="mce-EMAIL">Email Address <span class="asterisk">*</span></label>
                                            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" required>
                                            <span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
                                        </div>
                                        <div class="mc-field-group size1of2">
                                            <label for="mce-PHONE">Phone Number </label>
                                            <input type="text" name="PHONE" class="" value="" id="mce-PHONE">
                                            <span id="mce-PHONE-HELPERTEXT" class="helper_text"></span>
                                        </div>
                                        <div class="mc-field-group">
                                            <label for="mce-BIZNAME">Your Business Name <span class="asterisk">*</span></label>
                                            <input type="text" value="" name="BIZNAME" class="" id="mce-BIZNAME" required>
                                            <span id="mce-BIZNAME-HELPERTEXT" class="helper_text"></span>
                                        </div>
                                        <div class="mc-field-group">
                                            <label for="mce-BIZWEBSITE">Your Business Website </label>
                                            <input type="url" value="" name="BIZWEBSITE" class=" url" id="mce-BIZWEBSITE">
                                            <span id="mce-BIZWEBSITE-HELPERTEXT" class="helper_text"></span>
                                        </div>
                                        <div id="mergeRow-gdpr" class="mergeRow gdpr-mergeRow content__gdprBlock mc-field-group">
                                            <div class="content__gdpr">
                                                <fieldset class="mc_fieldset gdprRequired mc-field-group" name="interestgroup_field">
                                                <label class="checkbox subfield" for="gdpr_68739"><input style="width: 15px; margin-right: 10px; vertical-align: middle; display: inline-block;" type="checkbox" id="gdpr_68739" name="gdpr[68739]" value="Y" class="av-checkbox gdpr"><span style="vertical-align: middle;">I confirm I want to be contacted by tyve DIGITAL and tyve GROUP for marketing purposes.<sup>*</sup></span> </label>
                                                </fieldset>
                                            </div>
                                            <div class="content__gdprLegal">
                                            <small><sup>*</sup>We use Mailchimp to send our Marketing comms, by subscribing you are agreeing to the terms of our <a href="/privacy-policy/">Privacy Policy</a>. Offer ends 26<sup>th</sup> February 2023 at 23:59. You can unsubscribe at any time by clicking the link in the footer of our emails.</small>
                                            </div>
                                        </div>
                                        <div hidden="true"><input type="hidden" name="tags" value="7738715"></div><!--6927323-->
                                            <div id="mce-responses" class="clear">
                                                <div class="response" id="mce-error-response" style="display:none"></div>
                                                <div class="response" id="mce-success-response" style="display:none"></div>
                                            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ed4a6722b9db621b13b781173_268ed0bc60" tabindex="-1" value=""></div>
                                            <div class="clear"><input type="submit" value="Subscribe & Claim FREE Review" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                            </div>
                                    </form>
                                </div>
                                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';fnames[6]='MMERGE6';ftypes[6]='radio';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                                <!--End mc_embed_signup-->
                            </div>
                        </div>
                        <div class="col-12 p-0 mt-3 mb-5">
                            <div class="row">
                                <div class="col">
                                    <p class="card-title colour3 mb-0"><small style="font-size: 66%;">The 'FREE Digital Review' is completed only if 'we' (tyve DIGITAL) believe it is originally requested in genuine attempt to engage with our team and learn more about your digital space. An initial online check will be done to ensure you are a real person.</small></p>
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
