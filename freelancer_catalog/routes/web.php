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

Route::get('/', 'OfferController@latest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('offers', 'OfferController');

Route::resource('/accounts', "AccountsController");

Route::resource('offers.other', "Offer\OtherController");

Route::resource('profile', "ProfileController");

Route::get('/profile/{profile}', 'ProfileController@show');

Route::resource('offers.assignments', 'Offer\AssignmentController');
