<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');