<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Rules\NoHtml;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMessage;
use App\Rules\GoogleRecaptcha;
 
class ContactController extends Controller{
     
    public function index (){

        $pagetitle = 'Contact';

        return view('contact.contact', [
            'pagetitle' => $pagetitle,
        ]);
    }
 
    public function store(Request $request){
 
        // validate fields
        $this->validate($request, [
            'name' => ['required', 'string', new NoHtml],
            'email' => ['required', 'email', new NoHtml],
            'subject' => ['required', 'string', new NoHtml],
            'message' => ['required', 'string', new NoHtml],
            'g-recaptcha-response' => ['required', new GoogleRecaptcha]
        ]);
 
        Mail::send( new ContactFormMessage() );

        // redirect to contact form with message
        session()->flash('success', 'Message is sent! We will get back to you soon!');
 
        return redirect()->back();
 
    }
 
}