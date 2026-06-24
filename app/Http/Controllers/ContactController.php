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

            // Kirim email
            Mail::to(config('mail.from.address'))->send(new ContactMessage($validated));

            return back()->with('success', '✅ Thanks for your message! I\'ll get back to you within 24 hours.');

        } catch (\Exception $e) {
            // DEBUG MODE: Tampilkan error langsung di browser
            $debugInfo = [
                'ERROR_MESSAGE' => $e->getMessage(),
                'ERROR_CLASS'   => get_class($e),
                'ERROR_FILE'    => $e->getFile() . ':' . $e->getLine(),
                'MAIL_HOST'     => config('mail.mailers.smtp.host'),
                'MAIL_PORT'     => config('mail.mailers.smtp.port'),
                'MAIL_USERNAME' => config('mail.mailers.smtp.username'),
                'MAIL_PASSWORD_LENGTH' => strlen(config('mail.mailers.smtp.password') ?? ''),
                'MAIL_ENCRYPTION' => config('mail.mailers.smtp.encryption'),
                'MAIL_FROM'     => config('mail.from.address'),
            ];

            Log::error('Contact form error: ' . json_encode($debugInfo));

            // Tampilkan error langsung di browser (sementara untuk debug)
            $errorMessage = "<pre style='background:#fee; padding:20px; border:2px solid red; font-family:monospace;'>";
            $errorMessage .= "<strong>🔴 DEBUG ERROR DETAILS:</strong>\n\n";
            foreach ($debugInfo as $key => $value) {
                $errorMessage .= "<strong>$key:</strong> $value\n";
            }
            $errorMessage .= "\n<strong>STACK TRACE:</strong>\n" . $e->getTraceAsString();
            $errorMessage .= "</pre>";

            return back()
                ->withInput()
                ->with('error', $errorMessage);
        }
    }
}
