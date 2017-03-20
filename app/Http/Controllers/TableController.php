<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class TableController extends Controller
{
    public function index() {
        return view('console/table');
    }
    public function getTable() {
        $config = config('ajax');
        $registrations = Registration::all();
        $registrations = Registration::select(...$config['selection'])->get();
        foreach ($registrations as $key => $value) {
            $registrations[$key]['time'] = $registrations[$key]->created_at->diffForHumans();
        }
        return $registrations;
    }
    public function getAnswer(Request $request) {
        $registration = Registration::find($request->id);
        $answers = $registration->answers;
        $array = [];
        foreach ($answers as $answer) {
            $question = $answer->question;
            $array[$question->id] = [
                'question' => $question->en_question,
                'answer' => $answer->answer
            ];
        }
        return $array;
    }
    public function setApprove(Request $request) {
        $application = Registration::find($request->id);
        $application->is_approved = $request->state;
        $application->save();
        return $application->is_approved;
    }
}
