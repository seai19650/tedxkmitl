<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('dev', function () {
    return view('index-dev');
});

Route::get('stage', function () {
    return view('mail.mail_stage');
});

Route::get('stage-th', function () {
    return view('mail.mail_stage-th');
});

Route::get('stream', function () {
    return view('mail.mail_stream');
});

Route::get('stream-th', function () {
    return view('mail.mail_stream-th');
});

Route::get('stream-confirm', function () {
    return view('mail.mail_stream_confirm');
});

Route::get('stream-confirm-th', function () {
    return view('mail.mail_stream_confirm-th');
});


Route::get('/success', function () {
    return view('apply-success');
});

// Route::post('/apply', 'RegistrationController@store');

Route::get('/pay/{token}', 'PayController@index');

Route::post('/pay', 'PayController@get_token');

Auth::routes();
Route::get('/home', function (){
    return redirect('/console'); // Redirect to console after login
});
Route::get('/console', 'ConsoleController@index')->middleware('auth')->name('console');;
Route::get('/table', 'TableController@index')->middleware('auth')->name('table');;
Route::get('/status', 'StatusController@index')->middleware('auth')->name('status');;
Route::post('/gettable', 'TableController@getTable');
Route::post('/getanswer', 'TableController@getAnswer');
Route::post('/setapprove', 'TableController@setApprove');

//Route::get('/id/{token}', 'IdController@index');
Route::get('/id/{token}', function($token){
    $applicant = \App\Registration::where('token', $token)->first();
    return view('pre-id')->with('applicant',$applicant);
});
Route::post('/getstatus', 'StatusController@show');
Route::post('/getstatusadmin', 'StatusController@showAdmin');
Route::post('/id/{token}', 'StatusController@verify');
Route::post('/post/{token}', 'StatusController@store');
Route::post('/delete/{token}', 'StatusController@delete');
Route::post('/setaction', 'StatusController@setAction');
Route::get('/live', function (){
    return view('status');
});

Route::get('eticket', function (){
    return view('mail.mail_eticket');
});

Route::post('/getstat', 'ConsoleController@getStat');
Route::post('/gettimestat', 'ConsoleController@getTimeStat');

Route::get('/id/{token}/commit', 'RegistrationController@commit');
Route::get('/id/{token}/come', 'RegistrationController@cum')->middleware('auth');
