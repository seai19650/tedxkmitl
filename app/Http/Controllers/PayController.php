<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Registration;
use App\Transaction;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

class PayController extends Controller
{
    public function index($token) {
        $applicant = Registration::where('token', $token)->first();
        if ($applicant == null) abort(404);
        return view('pay', compact('applicant'));
    }

    public function get_token(Request $request) {
        $token = $request->input('token');
        $omise_token = $request->input('omiseToken');
        $key = env('OMISE_PRIVATE_KEY', false);
        if (!$key) return '<pre>OMISE_PRIVATE_KEY NOT FOUND in envronment</pre>';
        $client = new \GuzzleHttp\Client();
        $price = array('student' => '25000', 'general' => '50000', 'angel' => '100000');
        try {
            $respond = $client->post('https://api.omise.co/charges',
                [
                    'auth' => [$key, ''],
                    'form_params' => [
                        'amount' => '10000',
                        'currency' => 'thb',
                        'card' => $omise_token]
                ]);
        } catch (RequestException $e) {
            $err = json_decode($e->getResponse()->getBody());
            return '<pre>'.$err->message.'<br>Your card has not been charged yet. Please try again.'.'</pre>';
        }
        // If charge success, store transaction to db and change is_paid to 1
        $res = json_decode($respond->getBody());
        $transaction = new Transaction;
        $transaction->omise_transaction_id = $res->transaction;
        $transaction->omise_charge_id = $res->id;
        $transaction->registration_id = Registration::where('token', $token)->first()->id;
        $transaction->save();
        Registration::where('token', $token)->first()->update(['is_paid' => true]);
        return 'success';

    }
}
