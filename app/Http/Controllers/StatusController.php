<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;
use App\Registration;
use Response;
use Illuminate\Support\Str;

class StatusController extends Controller
{

    public function verify(Request $request, $token)
    {
        $data = $request->lastname;
        $profile = Registration::where('token', $token)->first();
        if (Str::lower($data) == Str::lower($profile->lastname)) {
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

    public function delete(Request $request, $token)
    {
        $keycard = $request->keycard;
        $sp_token = $request->sp_token;
        $target = Status::where('keycard', $keycard."done")->first();
        $stack = Status::where('keycard', $sp_token)->first();
        $profile = Registration::where('token', $token)->first();
        if ($target == null || $target->registration_id != $profile->id || $stack == null) {
            return 0;
        } else {
            $target->delete();
            return 'del';
        }
    }

    public function show()
    {
        $output = Status::where('status', '!=', null)->get();
        $output = json_decode($output, true);

        return Response::json($output);
    }
}
