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

/**
 * Route for: localhost/userlisting/public/
 */
Route::get('/', function () {
    return view('pages.home');
});

/**
 * Route for: localhost/userlisting/public/contact
 */
Route::get('/contact', 'FeedbacksController@index');

/**
 * Route for: localhost/userlisting/public/responses/list
 */
Route::get('/responses/list', 'FeedbacksController@show');

/**
 * Route for contact form submit event.
 */
Route::post('/contact/submit', 'FeedbacksController@store');

