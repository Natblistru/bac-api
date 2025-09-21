<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;
// (opțional) dacă vrei să trimiți pe coadă:
// use Illuminate\Contracts\Queue\ShouldQueue;

class ForgotPasswordMail extends Mailable /* implements ShouldQueue */
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Forgot Password',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.forgot',
            with: [
                'user' => $this->user,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
