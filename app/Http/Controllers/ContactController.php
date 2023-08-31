<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        $formData = $request->all();

        // Validate the form data here if needed
        // ...

        // Send the email using the Mail facade
        Mail::to('vitezkojampek@gmail.com')->send(new ContactFormMail($formData));

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}