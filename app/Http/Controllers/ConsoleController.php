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
            'dayleft' => $dayleft,
            'came_live' => Registration::where('is_come', 1)->where('is_approved', 1)->count(),
            'came_stream' => Registration::where('is_come', 1)->where('is_approved', 0)->count()
        ];
        return view('console/dashboard', compact('stat'));
    }

    public function getStat() {
        $invited = Registration::where('is_approved', 1);
        $data = $invited->select('age', 'gender')->get()->groupBy('gender');
        $ageStat = $this->getAgeStat($data);
        $age_line = $this->getAgeLine($ageStat);
        $gender_count = $this->getGenderCount($ageStat);
        return compact('age_line', 'gender_count');
    }

    public function getAgeLine($ageStat) {
        $age = [];
        $male = [];
        $female = [];
        $unisex = [];
        $max = max(
            $ageStat['male']->keys()->max(),
            $ageStat['female']->keys()->max(),
            $ageStat['unisex']->keys()->max()
        );
        $min = min(
            $ageStat['male']->keys()->min(),
            $ageStat['female']->keys()->min(),
            $ageStat['unisex']->keys()->min()
        );
        foreach (range($min, $max) as $index) {
            $age[] = $index;
            $male[] = $this->getValue($ageStat['male'], $index);
            $female[] = $this->getValue($ageStat['female'], $index);
            $unisex[] = $this->getValue($ageStat['unisex'], $index);
        }
        return compact('age', 'male', 'female', 'unisex');
    }

    public function getValue($array, $key) {
        if (isset($array[$key])) {
            return $array[$key];
        } else {
            return 0;
        }
    }

    public function getGenderCount($ageStat) {
        $male = $ageStat['male']->sum();
        $female = $ageStat['female']->sum();
        $unisex = $ageStat['unisex']->sum();
        return compact('male', 'female', 'unisex');
    }

    public function getAgeStat($data) {
        $male = $data['male']->groupBy('age');
        $female = $data['female']->groupBy('age');
        $unisex = $data['unisex']->groupBy('age');
        $male = $male->map(function ($item, $key) {
            return $item->count();
        });
        $female = $female->map(function ($item, $key) {
            return $item->count();
        });
        $unisex = $unisex->map(function ($item, $key) {
            return $item->count();
        });
        return compact('male', 'female', 'unisex');
    }

    public function getTimeStat() {
        $data = Registration::pluck('created_at');
        return $data;
    }

    public function getTime() {
        return Carbon::now();
    }
}
