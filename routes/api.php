<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/poem/{id}', 'PoemsController@getPoem');
Route::get('/poems', 'PoemsController@getPoemsCount');

// send email
Route::get('/sendEmail/{recipient}/{subject/{body}', 'MailController@sendEmail');
