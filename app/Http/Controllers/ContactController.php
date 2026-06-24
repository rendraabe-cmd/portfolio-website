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
            // Kita kirim emailnya KE DIRI SENDIRI (rendra.abe@gmail.com)
            // Karena Resend Free Tier membatasi pengiriman hanya ke email terdaftar.
            Mail::send([], [], function ($message) use ($validated) {
                $message->to('rendra.abe@gmail.com') // <--- WAJIB EMAIL KAMU
                        ->subject('New Contact Form: ' . $validated['subject'])
                        ->from(config('mail.from.address'), config('mail.from.name'))
                        ->htmlContent("
                            <h3>New Message from Portfolio</h3>
                            <p><strong>Name:</strong> {$validated['name']}</p>
                            <p><strong>Email:</strong> {$validated['email']}</p>
                            <p><strong>Message:</strong><br>{$validated['message']}</p>
                        ");
            });

            return back()->with('success', "Thanks for your message! I'll get back to you within 24 hours.");

        } catch (\Exception $e) {
            Log::error('Resend Error: ' . $e->getMessage());

            return back()->with('error', "Sorry, there was an error. Please try again later.");
        }
    }
}
