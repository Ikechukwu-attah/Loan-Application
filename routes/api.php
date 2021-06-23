<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::post('register', 'API\SignupController@register');
Route::post('login', 'API\SignupController@login');
Route::post('reset', 'API\ForgotController@reset');
Route::post('forgot', 'API\ForgotController@forgotpassword');
Route::post('activate', 'API\SignupController@activate');
Route::post('address', 'API\SignupController@updateaddress');
Route::post('bankdetail', 'API\SignupController@bankdertailupdate');
Route::post('loan', 'API\LogicController@loanrequest');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



