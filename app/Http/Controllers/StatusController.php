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
        if ($data == $profile->lastname) {
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
        $keycard = $request->keycard;
        $post = $request->status;
        $index = Status::where('keycard', $keycard)->first();
        $profile = Registration::where('token', $token)->first();

        if ($index != null && ($index->registration_id == $profile->id)) {
            $index->status = $post;
            $index->keycard = $index->keycard."done";
            $index->save();
            return $post;
        } else {
            return 0;
        }
    }

    public function delete(Request $request, $token, $keycard)
    {
        $target = Status::where('keycard', $keycard."done")->first();
        $profile = Registration::where('token', $token)->first();
        $lastname = $request->del_lastname;
        if ($target == null || $target->registration_id != $profile->id) {
            return $keycard."done";
        } elseif ($lastname == $profile->lastname){
            $target->delete();
            return 1;
        } else {
            return $keycard;
        }
    }
}
