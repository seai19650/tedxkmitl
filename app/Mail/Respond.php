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
    public function __construct($applicant, $status)
    {
        //
        $this->applicant = $applicant;
        $this->status = $status;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->status == 'normal') {
            return $this->view('email')
                ->subject('Registration Succeeded!');
        } elseif ($this->status == 'batch') {
            return $this->view('email')
                ->subject('Congratulations! A seat is reserved for you.');
        } else {
            return redirect('/');
        }

    }
}
