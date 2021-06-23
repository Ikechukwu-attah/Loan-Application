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

Auth::routes();

Route::middleware(['auth'])->group(function () {
    //

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/admin-db','Admin\AdminController@index')->name('admin-db');
    Route::get('/users','Admin\UserController@index')->name('users');
    Route::get('/add-user', 'Admin\UserController@create')->name('add-user');
    Route::post('/add', 'Admin\UserController@store')->name('add');
    Route::get('/edit-user/{id}', 'Admin\UserController@edit')->name('edit-user');
    Route::post('/update-user/{id}', 'Admin\UserController@update')->name('update-user');
    Route::get('delete-user/{id}', 'Admin\UserController@destroy')->name('delete-user');
    
 
  
    
//    INTEREST RATE ROUTE
    Route::get('/all-interest', 'Admin\BankrateController@index')->name('all-interest');
    Route::get('/add-interest', 'Admin\BankrateController@create')->name('add-interest');
    Route::get('/edit-interest/{id}', 'Admin\BankrateController@edit')->name('edit-interest');
    Route::post('/save-interest', 'Admin\BankrateController@store')->name('save-interest');
    Route::post('/update-interest/{id}', 'Admin\BankrateController@update')->name('update-interest');
    Route::get('/delete-interest/{id}', 'Admin\BankrateController@destroy')->name('delete-interest');


    // BANK NAME ROUTE

    Route::get('/add-bank', 'Admin\BankController@create')->name('add-bank');
    Route::get('/all-banks', 'Admin\BankController@index')->name('all-banks');
    Route::get('/edit-bank/{id}', 'Admin\BankController@edit')->name('edit-bank');
    Route::post('/save-bank', 'Admin\BankController@store')->name('save-bank');
    Route::post('/update-bank/{id}', 'Admin\BankController@update')->name('update-bank');
    Route::get('/delete-bank/{id}', 'Admin\BankController@destroy')->name('delete-bank');




    Route::get('/status/{id}', 'Admin\AdminController@edit')->name('status');
    Route::post('status-update/{id}', 'Admin\AdminController@update')->name('status-update');
    Route::get('/delete-loan/{id}', 'Admin\AdminController@destroy')->name('delete-loan');
    
    Route::get('/active-loan', 'Admin\AdminController@active')->name('active-loan');
    Route::get('/pending-loan', 'Admin\AdminController@pending')->name('pending-loan');
    Route::get('/all-loans', 'Admin\AdminController@loan')->name('all-loan');
    Route::get('/overdue-loans', 'Admin\AdminController@overdue')->name('overdue-loan');


    // FRONTEND USERS ROUTES ARE BELOW.

    Route::get('/userinfo', 'Frontend\UserinfoController@create')->name('userinfo');





    // GENERAL SETTINGS OF THE WEBSITE


    Route::get('/edit-settings/{id}', 'Admin\SettingController@edit')->name('site-setting');
    Route::post('/upade-settings/{id}', 'Admin\SettingController@update')->name('update-settings');


    
    
   
//   USERINFO ROUTE.
// get methode.....
Route::get('/basic-info/{id}', 'Frontend\UserinfoController@basicinfo')->name('basic-info');
Route::get('/personal-info/{id}', 'Frontend\UserinfoController@personalinfo')->name('personal-info');
Route::get('/bank-detail/{id}', 'Frontend\UserinfoController@bankdetail')->name('bank-detail');
Route::get('/card/{id}', 'Frontend\UserinfoController@card')->name('card');
Route::get('/emergency-contact/{id}','Frontend\UserinfoController@emergencyaddress')->name('emergency-address');
Route::get('/apply-loan', 'Frontend\UserinfoController@applyloan')->name('apply-loan');
Route::get('/forgotpassword', 'Signup\LoginsController@forgot')->name('forgotpassword');
Route::get('/password-reset', 'Signup\LoginsController@passswordreset')->name('password-reset');


// Post methode .......
Route::post('/update-basicinfo/{id}', 'Frontend\UserinfoController@updatebasicinfo')->name('update-basicinfo');
Route::post('/update-personalinfo/{id}', 'Frontend\UserinfoController@updatepersonalinfo')->name('update-personalinfo');
Route::post('/update-contact/{id}', 'Frontend\UserinfoController@updatecontact')->name('update-contact');
Route::post('/update-card/{id}', 'Frontend\UserinfoController@updatecard')->name('update-card');
Route::post('/update-bankdetail/{id}', 'Frontend\UserinfoController@updatebankdetail')->name('update-bankdetail');
Route::post('/update-loan', 'Frontend\UserinfoController@updateloan')->name('update-loan');
Route::post('/activate-account', 'Signup\LoginsController@activate')->name('activate-account');
Route::post('/forgot-password', 'Signup\LoginsController@forgotpassword')->name('forgot-password');
Route::post('/reset', 'Signup\LoginsController@reset')->name('reset');
Route::get('/account-activation', 'Signup\LoginsController@account_activation')->name('account-activation');


// PAYMENT ROUTE/PAYSTACK
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback')->name('initial-pay');
Route::post('/repay', 'PaymentController@repayment')->name('repay');



// DELETE CREDIT CARD

Route::get('/delete-creditCard/{id}', 'Frontend\UserinfoController@destroy')->name('delete-creditCard');

// TOGGLE CREDIT CARD 

Route::get('/toggle-atm/{id}', 'Frontend\UserinfoController@atm_toggle')->name('toggle-atm');
Route::get('/select-card/update', 'Frontend\UserinfoController@update_atm_toogle')->name('choose.card');
        


});




 // LOGIN ROUTES BELOW
 Route::get('/sign-in', 'Signup\LoginsController@createsignin')->name('sign-in');
 Route::get('/sign-up', 'Signup\LoginsController@createsignup')->name('sign-up');
 Route::post('/user-register', 'Signup\LoginsController@register')->name('register-user');
 Route::post('/user-login', 'Signup\LoginsController@login')->name('user-login');
 
    

