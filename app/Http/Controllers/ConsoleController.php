<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class ConsoleController extends Controller
{
    public function index() {
        return view('console.index');
    }
}
