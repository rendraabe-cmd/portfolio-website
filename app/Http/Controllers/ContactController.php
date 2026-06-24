<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            // Gunakan Mail::raw atau html() agar kompatibel dengan semua driver
            Mail::html("
                <h3>New Message from Portfolio</h3>
                <p><strong>Name:</strong> {$validated['name']}</p>
                <p><strong>Email:</strong> {$validated['email']}</p>
                <p><strong>Message:</strong><br>{$validated['message']}</p>
            ", function ($message) use ($validated) {
                $message->to('rendra.abe@gmail.com')
                        ->subject('New Contact: ' . $validated['subject']);
            });

            return back()->with('success', "Thanks for your message! I'll get back to you within 24 hours.");

        } catch (\Exception $e) {
            // Log error agar kita bisa trace di Render Application Logs
            Log::error('Mail Error: ' . $e->getMessage());

            return back()->with('error', "Error: " . $e->getMessage());
        }
    }
}
