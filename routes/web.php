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

Route::get('/about', function () {
    return view('about');
});


// ----- Auth Routes ----- //
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('references', 'ReferenceController');

Route::resource('customers', 'CustomerController');

Route::resource('billings', 'BillingController');
