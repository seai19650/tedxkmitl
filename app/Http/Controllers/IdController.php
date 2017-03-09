<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class IdController extends Controller
{
    public function index($token) {
      $applicant = Registration::where('token', $token)->first();
      if ($applicant == null) abort(404);
      dd($applicant);
      return view('id', compact('applicant'));
    }
}
