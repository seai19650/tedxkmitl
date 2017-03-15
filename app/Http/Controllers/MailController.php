<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use App\Mail\Respond;

class MailController extends Controller
{
    public function index() {
        return view('console.mail');
    }
    public function batch_mail()
    {
        $status = 'batch';
        $applicants = Registration::all();
        foreach ($applicants as $applicant)
        {
            \Mail::to($applicant->email)->send(new Respond($applicant, $status));
        }
        return redirect('/login');
    }
}
