<?php

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
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/dev', function () {
    return view('index-dev');
});

Route::get('/id/{token}', 'IdController@index');

// Route::get('/register', function () {
//     return view('register');
// });

Route::resource('/register', 'RegistrationController');
