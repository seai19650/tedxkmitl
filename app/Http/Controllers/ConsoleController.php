<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsoleController extends Controller
{
    public function index() {
        return view('console.index');
    }
    public function table() {
        return view('console.table');
    }
    public function getTable() {

    }
}
