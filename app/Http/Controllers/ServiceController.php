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

        $pagetitle = 'Services';

        return view('services.websites', [
            'pagetitle' => $pagetitle,
        ]);
    }

    public function designer (){

        $pagetitle = 'Services';

        return view('services.designer', [
            'pagetitle' => $pagetitle,
        ]);
    }

    public function contact (){

        $pagetitle = 'Contact';

        return view('contact.contact', [
            'pagetitle' => $pagetitle,
        ]);
    }

    
}
