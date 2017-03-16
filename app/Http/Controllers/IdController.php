<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use App\Status;

class IdController extends Controller
{
    public function index($token) {
      $applicant = Registration::where('token', $token)->first();
      if ($applicant == null) abort(404);
      return view('id', compact('applicant' ));
    }
}
