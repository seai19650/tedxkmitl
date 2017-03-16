<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;
use App\Registration;

class StatusController extends Controller
{

    public function verify(Request $request)
    {
//        $lastname = Registration::where('token', $token)->value('lastname');
//        $applicant = Registration::where('token', $token)->first();

    }

    public function store(Request $request, $token)
    {
        $id = Registration::where('token', $token)->value('id');
        $status = new Status;
        $status->registration_id = $id;
        $status->status = $request->status;
        $status->save();
        return redirect('/');
    }
}
