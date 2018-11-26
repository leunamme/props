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
    return view('index');
});

Route::get('/listings', function () {
    return view('listings');
});

Route::get('/property', function () {
    return view('property');
});


    //==== When signed in ====//
Route::get('/submit-property', function () {
    return view('submit-property');
});

Route::get('/my-properties', function () {
    return view('my-properties');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/page', 'pageController@myfunction');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
