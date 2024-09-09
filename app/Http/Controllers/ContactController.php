<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\ContactForm;
use App\Mail\NewContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use App\Models\ContactForm;
// use Illuminate\Http\Request;

class ContactController extends Controller
{
   


public function store(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'phone_number' => 'required',
        'message' => 'required',
    ]);
    
    // $contact = ContactForm::get();
    // dd($contact);
    $contactForm = ContactForm::create($validatedData);
    // dd($contactForm);
    // Create a new ContactForm instance and store it in the database
    // $contactForm = new ContactForm();
    // //  dd("123as5");
    // $contactForm->fill($validatedData);
    // $contactForm->save();
    // // dd($contactForm);
    // Send an email notification
    $yourEmail = 'support@hsltravelandtours.com'; // Replace this with your own email address
    
        if ($yourEmail) {
            Mail::to($yourEmail)->send(new NewContactMail($contactForm));
        } else {
            // Handle the case where your email is not configured
            // You can log an error or perform any other action here
        }

    // Redirect back to the form page with a success message
    return redirect()->back()->with('success', 'Form submitted successfully!');
}

}