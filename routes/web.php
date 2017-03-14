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

Route::get('/success', function () {
    return view('apply-success');
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

Route::get('/email-confirm', function () {
    return view('email');
});

Auth::routes();
Route::get('/home', function (){
    return redirect('/console'); // Redirect to console after login
});
Route::get('/console', 'ConsoleController@index')->middleware('auth')->name('console');;
Route::get('/table', 'TableController@index')->middleware('auth')->name('table');;
Route::post('/gettable', 'TableController@getTable');


