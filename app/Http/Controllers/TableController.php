<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index() {
        return view('console.table');
    }
    public function getTable() {
        $registrations = Registration::all();
        return $registrations;
    }
}
