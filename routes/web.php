<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('home');
});


Route::get('/alumni-register', function () {
    return view('register');
});


Route::get('/student-register', function () {
    return view('stdregister');
});

Route::get('/alumni-login', function () {
    return view('login');
});


Route::get('/student-login', function () {
    return view('stdlogin');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/for-fresher', function () {
    return view('fresher');
});

Route::get('/user-profile-1', function () {
    return view('profile');
});

Route::get('/alumni-directory', function () {
    return view('alumnidirectory');
});

Route::get('/for-experience', function () {
    return view('experience');
});


Route::get('/event', function () {
    return view('event');
});


Route::get('/job-offer', function () {
    return view('joboffer');
});

Route::get('/student-directory', function () {
    return view('stdntdirectory');
});

Route::get('/student-profile-1', function () {
    return view('stdntprofile');
});
