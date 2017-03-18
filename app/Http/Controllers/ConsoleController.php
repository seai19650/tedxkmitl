<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Registration;

class ConsoleController extends Controller
{
    public function index() {
        $now = Carbon::now();
        $end = Carbon::parse('2017-03-21 00:00:00');
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
    public function getAgeStat() {
        $data = Registration::select('age', 'gender')->get()->groupBy('age');
        $max = Registration::max('age');
        $min = Registration::min('age');
        $age = [];
        $male = [];
        $female = [];
        foreach (range($min, $max) as $index) {
            if (isset($data[$index])) {
                $age[] = $index;
                $male[] = $data[$index]->where('gender', 'male')->count();
                $female[] = $data[$index]->where('gender', 'female')->count();
            } else {
                $age[] = $index;
                $male[] = 0;
                $female[] = 0;
            }
        }
        return compact('age', 'male', 'female');
    }
    public function getTimeStat() {
        $data = Registration::pluck('created_at');
        return $data;
    }
    public function getTime() {
        return Carbon::now();
    }
}
