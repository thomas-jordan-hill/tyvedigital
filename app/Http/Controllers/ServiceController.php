<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index (){

        $pagetitle = 'Services';

        return view('services.index', [
            'pagetitle' => $pagetitle,
        ]);
    }

    public function websites (){

        $pagetitle = 'Websites';

        return view('services.websites', [
            'pagetitle' => $pagetitle,
        ]);
    }

    public function findingnewleads (){

        $pagetitle = 'Finding new leads';

        return view('services.finding-new-leads', [
            'pagetitle' => $pagetitle,
        ]);
    }

    public function printdesign (){

        $pagetitle = 'Print design';

        return view('services.print-design', [
            'pagetitle' => $pagetitle,
        ]);
    }

    public function emailengagement (){

        $pagetitle = 'Email engagament';

        return view('services.email-engagement', [
            'pagetitle' => $pagetitle,
        ]);
    }

    public function capturingdata (){

        $pagetitle = 'Capturing data';

        return view('services.capturing-data', [
            'pagetitle' => $pagetitle,
        ]);
    }

    public function growthseo (){

        $pagetitle = 'Growth & SEO';

        return view('services.growth-seo', [
            'pagetitle' => $pagetitle,
        ]);
    }

    public function learndigital (){

        $pagetitle = 'Digital consultation';

        return view('pages.learn-digital', [
            'pagetitle' => $pagetitle,
        ]);
    }

    public function contact (){

        $pagetitle = 'Contact';

        return view('contact.contact', [
            'pagetitle' => $pagetitle,
        ]);
    }

    public function whatwedo (){

        $pagetitle = 'What We Do';

        return view('pages.what-we-do', [
            'pagetitle' => $pagetitle,
        ]);
    }

    public function aboutus (){

        $pagetitle = 'About Us';

        return view('pages.about-us', [
            'pagetitle' => $pagetitle,
        ]);
    }

    public function freedigitalreview (){

        $pagetitle = 'Free Digital Review';

        return view('pages.free-digital-review', [
            'pagetitle' => $pagetitle,
        ]);
    }

    public function privacypolicy (){

        $pagetitle = 'Privacy Policy';

        return view('pages.privacy', [
            'pagetitle' => $pagetitle,
        ]);
    }

    public function cookiepolicy (){

        $pagetitle = 'Cookie Policy';

        return view('pages.cookiepolicy', [
            'pagetitle' => $pagetitle,
        ]);
    }


    
}
