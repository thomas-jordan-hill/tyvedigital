<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharityWorkController extends Controller
{
        public function index (){

        $pagetitle = 'Charity work';

        return view('pages.charity-work', [
            'pagetitle' => $pagetitle,
        ]);
    }
}
