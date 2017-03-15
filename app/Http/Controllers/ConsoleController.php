<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class ConsoleController extends Controller
{
    public function index() {
        // doing some statistic and compact to view
        return view('console/dashboard');
    }
}
