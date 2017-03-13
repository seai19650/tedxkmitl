<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class TableController extends Controller
{
    public function index() {
        return view('console.table');
    }
    public function getTable() {
        $registrations = Registration::all();
        foreach ($registrations as $key => $value) {
            $registrations[$key]['time'] = $registrations[$key]->created_at->diffForHumans();
        }
        return $registrations;
    }
    public function readTime() {

    }
}
