<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use App\Mail\Respond;

class MailController extends Controller
{
    public function batch_mail()
    {
        $status = 'batch';
        $applicants = Registration::all();
        foreach ($applicants as $applicant)
        {
            $is_approved = $applicant->is_approved;
            \Mail::to($applicant->email)->queue(new Respond($applicant, $status, $is_approved));
        }
        return redirect('/console');
    }

    public function eticket_mail()
    {
        $status = 'eticket';
        $applicants = Registration::where('is_paid', 1)->orWhere('is_commit', 1)->get();
        foreach ($applicants as $applicant)
        {
            $is_approved = $applicant->is_approved;
            \Mail::to($applicant->email)->queue(new Respond($applicant, $status, $is_approved));
        }
        return redirect('/console');
    }
}
