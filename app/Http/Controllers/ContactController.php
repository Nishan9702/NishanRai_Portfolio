<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\User;

class ContactController extends Controller
{
    /**
     * Show the contact form page.
     */
    public function show(): \Illuminate\View\View
    {
        return view('contact');
    }

    /**
     * Handle the contact form submission.
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validated = Validator::make($request->all(), [
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ])->validate();

        // Send mail to site owner (config mailer should be set in .env)
        Mail::to(config('mail.from.address'))->send(new ContactFormMail($validated));

        return Redirect::back()->with('status', 'Your message has been sent!');
    }
}
