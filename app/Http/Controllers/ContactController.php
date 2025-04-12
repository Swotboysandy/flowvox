<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        Mail::raw("Name: {$validated['name']}\nEmail: {$validated['email']}\n\n{$validated['message']}", function ($message) use ($validated) {
            $message->to('sunny@sukan.eu')
                    ->from($validated['email'], $validated['name'])
                    ->subject('New Contact Form Submission');
        });

        return back()->with('success', 'Your message has been sent!');
    }
}
