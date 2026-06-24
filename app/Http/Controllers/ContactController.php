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
        // LOG 1 - Pastikan method dipanggil
        Log::info('=== CONTACT FORM START ===');
        Log::info('Request data: ', $request->all());

        // LOG 2 - Cek konfigurasi mail
        Log::info('Mail config check:', [
            'mailer'   => config('mail.default'),
            'host'     => config('mail.mailers.smtp.host'),
            'port'     => config('mail.mailers.smtp.port'),
            'username' => config('mail.mailers.smtp.username'),
            'from'     => config('mail.from.address'),
            'password_length' => strlen(config('mail.mailers.smtp.password') ?? ''),
        ]);

        try {
            // Validasi input
            $validated = $request->validate([
                'name'    => 'required|string|max:100',
                'email'   => 'required|email|max:150',
                'subject' => 'required|string|max:200',
                'message' => 'required|string|min:10|max:2000',
            ], [
                'message.min' => 'Message must be at least 10 characters.',
            ]);

            Log::info('Validation passed');

            // Kirim email
            Mail::to(config('mail.from.address'))->send(new ContactMessage($validated));

            Log::info('=== EMAIL SENT SUCCESSFULLY ===');

            return back()->with('success', '✅ Thanks for your message! I\'ll get back to you within 24 hours.');

        } catch (\Exception $e) {
            // LOG ERROR DETAIL
            Log::error('=== CONTACT FORM ERROR ===');
            Log::error('Error message: ' . $e->getMessage());
            Log::error('Error class: ' . get_class($e));
            Log::error('Error file: ' . $e->getFile() . ':' . $e->getLine());
            Log::error('Stack trace: ' . $e->getTraceAsString());

            return back()
                ->withInput()
                ->with('error', '❌ Failed to send message. Please email me directly at rendra.abe@gmail.com');
        }
    }
}
