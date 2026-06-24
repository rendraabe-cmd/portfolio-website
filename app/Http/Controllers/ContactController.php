<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:150',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|min:10|max:2000',
        ], [
            'message.min' => 'Message must be at least 10 characters.',
        ]);

        try {
            // Kirim email ke diri sendiri
            Mail::to(config('mail.from.address'))->send(new ContactMessage($validated));

            return back()->with('success', '✅ Thanks for your message! I\'ll get back to you within 24 hours.');
        } catch (\Exception $e) {
            Log::error('Contact form error: ' . $e->getMessage());

            return back()
                ->withInput()
                ->with('error', '❌ Failed to send message. Please email me directly at rendra.abe@gmail.com');
        }
    }
}
