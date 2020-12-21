<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailBag;

    public function __construct($mailBag)
    {
        $this->mailBag = $mailBag;
    }


    public function build()
    {
        return $this->from('apple@apple.com')->view('mail.show'); // Da chi parte la mail
    }
}
