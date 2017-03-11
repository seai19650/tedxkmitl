<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class PayController extends Controller
{
    public function index($token) {
        $applicant = Registration::where('token', $token)->first();
        if ($applicant == null) abort(404);
       return view('pay', compact('applicant'));
    }

    public function get_token(Request $request) {
        $omise_token = $request->input('omiseToken');
        $key = "skey_test_578ip3jv9xxj0hdbfkz";
        $client = new \GuzzleHttp\Client();
        $res = $client->post( 'https://api.omise.co/charges',
            [
                'auth' => [$key, ''],
                'form_params' => [
                    'amount' => '10000',
                    'currency' => 'thb',
                    'card' => $omise_token]
            ]
            );
        return '<pre>'.$res->getBody().'</pre>';
    }
}
