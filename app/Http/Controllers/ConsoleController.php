<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Registration;

class ConsoleController extends Controller
{
    public function index() {
        $now = Carbon::now();
        $end = Carbon::parse('2017-03-20 00:00:00');
        $dayleft = $end->diffInDays($now);

        $stat = [
            'total' => Registration::all()->count(),
            'invite' => Registration::where('is_approved', 1)->count(),
            'paid' => Registration::where('is_paid', 1)->count(),
            'male' => Registration::where('gender', 'male')->count(),
            'female' => Registration::where('gender', 'female')->count(),
            'dayleft' => $dayleft
        ];
        return view('console/dashboard', compact('stat'));
    }
    public function getTime() {
        return Carbon::now();
    }
}
