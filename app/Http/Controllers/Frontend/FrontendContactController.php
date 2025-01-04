<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class FrontendContactController extends Controller
{
    public function index(){
        return view('frontend.pages.contact');
    }

    public function contactStore(Request $request){
        $request->validate([
            'your_name' => ['required', 'max:255'],
            'your_email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'max:255'],
            'message' => ['required'],
        ]);

        $contactForm = new ContactForm();
        $contactForm->your_name = $request->your_name;
        $contactForm->your_email = $request->your_email;
        $contactForm->subject = $request->subject;
        $contactForm->message = $request->message;
        $contactForm->save();

        toastr()->success('Your Message has Been Sent.');
        return redirect()->back();
    }
}
