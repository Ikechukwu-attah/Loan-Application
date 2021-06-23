<?php

namespace App\Http\Controllers\Auth2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Address;
use App\Bankdetail;
use App\Takeloan;
use Auth;

class SignupController extends Controller
{



    // Displaying Registeration form
    public function createRegister(){

       return view('signup.register');



    }




   
    public function register(Request $request){

        $request->validate([
           
          'firstname'=> 'required',
          'lastname' =>  'required',
          'email'   =>  'required',
          'password' =>  'required|min:8'
  
        ]);
  
        //    Registering user
        $user_register = new User();
        $user_register->firstname = $request->input('firstname');
        $user_register->lastname  = $request->input('lastname');
        $user_register->email     = $request->input('email');
        $user_register->password  = Hash::make($request->input('password'));
        $user_register->activation_code = mt_rand(100000,999999);
        $code = $user_register->activation_code;
  
        //   checking for duplicate email
        $user_email = $request->input('email');
        $duplicate_email = User::where('email', $user_email)->get();
  
        //   Generating token
        $token = $user_register->createToken('users wills')->accessToken;
          
      
  
        if(count($duplicate_email)>0){
         
          return   'email taken already';
              
          
        };
        
      
        //    saving registered details to datatbase
        if($user_register->save()){
          //  Sending verification code to users email registered account
          Mail::send('verification.user_verification', ['code'=>$code], function ($message) use($user_email){
         
              $message->to($user_email);
              $message->subject('verify your account');
             
          });



        //  saving the users id to the user address contact
          $lastid = $user_register->id;

          $contact = new Address;
          $contact->user_id = $lastid;
          $contact->save();

          $bank_detail = new Bankdetail;
          $bank_detail->user_id = $lastid;
          $bank_detail->save();


          // $loan = new Takeloan;
           // $loan->user_id = $lastid;
          // $loan->amount = 4000;
          // $loan->save();
      

          return ' Succefully Registered';
              
          };
          
          
         return 'Registeration failed';
     
  
      }







    //   Displaying login form

      public function createLogin(){

        return view('signup.login');
 
 
 
     }
 



      //  Creating user login
      public function login(Request $request){

        $request->validate([
              
           'email' => 'required',
           'password' => 'required'

        ]);

        $credentials = [
            'email' => $request->email,
            'password'=> $request->password,
        ];

        
         $user = User::where('email', $request->email )->firstOrFail();

        if(auth()->attempt($credentials)){

          

          return 'Succefully loged in';
              

        }
   
        return  'unauthorized';
   


      }






    
}


$table->id();
$table->integer('user_id')->nullable();;
$table->string('card_fullname')->nullable();
$table->bigInteger('card_number')->nullable();
$table->string('expiring_date')->nullable();
$table->integer('cvv_number')->nullable();
$table->timestamps();