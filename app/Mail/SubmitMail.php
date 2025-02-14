<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubmitMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;

    public $emailSubject,
        $emailParticipantName,
        $emailAgendaName,
        $emailDateAgenda,
        $emailTimeAgenda;

    /**
     * Create a new message instance.
     */
    public function __construct($emailSubject, $emailParticipantName, $emailAgendaName, $emailDateAgenda, $emailTimeAgenda)
    {
        $this->emailSubject = $emailSubject;
        $this->emailParticipantName = $emailParticipantName;
        $this->emailAgendaName = $emailAgendaName;
        $this->emailDateAgenda = $emailDateAgenda;
        $this->emailTimeAgenda = $emailTimeAgenda;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->emailSubject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.submitMail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
