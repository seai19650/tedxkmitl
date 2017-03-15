<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use App\Status;

class IdController extends Controller
{
    public function index($token) {
      $applicant = Registration::where('token', $token)->first();
      $exist = Status::where('registration_id', $applicant->id)->first();
      if ($applicant == null) abort(404);
      if ($exist == null) {
          $accessed = 0;
      } else {
          $accessed = 1;
      }
      return view('id', compact('applicant', 'accessed'));
    }
}
