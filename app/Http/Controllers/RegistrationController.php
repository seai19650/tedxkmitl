<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\Registration;
use App\Mail\Respond;


class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $applicant = new Registration;
        $applicant->fill($request->all());
        $applicant->token = $applicant->random_gen();
        $applicant->save();

        $status = 'normal';
        $is_approve = 0;
        \Mail::to($applicant->email)->send(new Respond($applicant, $status, $is_approve));
        foreach ($request->input('question') as $key => $value) {
            $answer = new Answer;
            $answer->registration_id = $applicant->id;
            $answer->question_id = $key;
            $answer->answer = $value;
            $answer->save();
        }
        return redirect('/success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function commit($token) {
        $applicant = Registration::where('token', $token)->first();
        $applicant->is_commit = 1;
        $applicant->save();
        return view('reserved');
    }
}
