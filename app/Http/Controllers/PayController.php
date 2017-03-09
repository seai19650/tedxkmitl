<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class PayController extends Controller
{
    public function index($token) {
       return view('pay');
    }
}
