<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class PayController extends Controller
{
    public function index($token) {
        $applicant = Registration::where('token', $token)->first();
        if ($applicant == null) abort(404);
       return view('pay', compact('applicant'));
    }

    public function get_token(Request $request) {
        dd($request);
    }
}
