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
    public $status;
    public $is_approved;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($applicant, $status, $is_approved)
    {
        //
        $this->applicant = $applicant;
        $this->status = $status;
        $this->is_approved = $is_approved;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->status == 'normal') {
            return $this->view('mail.mail_stream')
                ->subject('Registration Succeeded!');
        } elseif ($this->status == 'batch') {
            if ($this->is_approved == 1) {
                return $this->view('mail.mail_stage')
                    ->subject('Congratulations! You\'re qualified for TEDxKMITL event');
            } else {
                return $this->view('mail.mail_stream')
                    ->subject('Congratulations, you\'re eligible for the Live Stream room');
            }
        } elseif ($this->status == 'eticket') {
            return $this->view('mail.mail_eticket')
                ->subject('Here is your TEDxKMITL e-ticket');
        } else {
            return view('/');
        }

    }
}
