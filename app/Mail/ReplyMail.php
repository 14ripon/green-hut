<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;

class ReplyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $messageData;
    public $subjectText;
    public $replyMessage;
    public $preferred_time; // formatted time

    public function __construct($messageData, $subjectText, $replyMessage)
    {
        $this->messageData = $messageData;
        $this->subjectText = $subjectText;
        $this->replyMessage = $replyMessage;

        // ✅ Format datetime here
        $this->preferred_time = Carbon::parse($messageData->preferred_time)
            ->format('F d, Y \a\t h:i A');
    }

    public function build()
    {
        return $this->subject($this->subjectText)
                    ->view('emails.contact-reply');
    }
}
