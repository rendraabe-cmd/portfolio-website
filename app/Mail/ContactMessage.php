<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public string $contactName;
    public string $contactEmail;
    public string $contactSubject;
    public string $contactMessage;

    /**
     * Create a new message instance.
     */
    public function __construct(array $data)
    {
        $this->contactName = $data['name'];
        $this->contactEmail = $data['email'];
        $this->contactSubject = $data['subject'];
        $this->contactMessage = $data['message'];
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [
                new Address($this->contactEmail, $this->contactName),
            ],
            subject: '🚀 Portfolio Contact: ' . $this->contactSubject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
        );
    }
}
