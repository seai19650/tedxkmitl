<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;
use App\Registration;

class StatusController extends Controller
{

    public function verify(Request $request, $token)
    {
        $data = $request->lastname;
        $profile = Registration::where('token', $token)->first();
        if ($data == $profile->lastname){
            $post = new Status;
            $post->registration_id = $profile->id;
            $post->keycard = $post->keycard();
            $post->save();
            return $post->keycard;
        } else {
            return 0;
        }

    }

    public function store(Request $request, $token)
    {
        $post = Status::where('keycard', $keycard)->first();
        $post->registration_id = $id;
        $post->status = $request->status;
        $post->keycard = null;
        $post->save();
        return redirect('/');
    }
}
