<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Respond extends Mailable
{

    use Queueable, SerializesModels;

    public $applicant;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($applicant)
    {
        //
        $this->applicant = $applicant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email');
    }
}
