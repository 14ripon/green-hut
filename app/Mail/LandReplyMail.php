<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class LandReplyMail extends Mailable
{
    public $subjectText;
    public $messageText;
    public $land;

    public function __construct($subjectText, $messageText, $land)
    {
        $this->subjectText = $subjectText;
        $this->messageText = $messageText;
        $this->land = $land;
    }

    public function build()
    {
        return $this->subject($this->subjectText)
                    ->view('emails.land-reply');
    }
}
