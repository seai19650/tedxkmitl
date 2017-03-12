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
Route::get('/index', function () {
    return view('index');
});

Route::get('/dev', function () {
    return view('index-dev');
});

Route::get('/apply/th', function () {
    return view('register-th');
});

Route::get('/apply', function () {
    abort(404);
});

Route::get('/apply/en', function () {
    return view('register-en');
});

Route::get('/id/{token}', 'IdController@index');

Route::post('/apply', 'RegistrationController@store');

Route::get('/pay/{token}', 'PayController@index');

Route::post('/pay', 'PayController@get_token');

Route::get('/console', function () {
    return view('console.admin');
});

Route::get('/email-confirm', function () {
    return view('email');
});

Route::get('/apply-success', function () {
    return view('apply-success');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
