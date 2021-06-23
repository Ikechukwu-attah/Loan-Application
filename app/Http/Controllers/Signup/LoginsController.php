<?php

namespace App\Http\Controllers\Signup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\User;
use App\Address;
use App\Bankdetail;
use App\Takeloan;
use App\Creditcard;
use App\Bankrate;
use App\Setting;
use Auth;

class LoginsController extends Controller
{



    




   
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
         
          return redirect()->back()->with('error-message', 'email already taken');
              
          
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


          // $card = new Creditcard;
          // $card->user_id = $lastid;
          // $card->save();
        

        //  Assign ID TO user_id in settings table
          $user_setting = new Setting;
          $user_setting->user_id = $lastid;
          $user_setting->save();


          

          //  $bank_rate = new Bankrate;
          //  $bank_rate->user_id = $lastid;;
          //  $bank_rate->save();
      

          return redirect()->route('account-activation');
              
          };
          
          
          return redirect()->back()->with('error-message', 'not registered');
     
  
      }







    //   Displaying login form

      public function createsignin(){

        // return view('signup.signIn');
        return view('auth2.signin');
 
 
     }




    //  Displaying Registration form 
       public function createsignup(){
         
        return view('auth2.signup');
        

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

          
          
          return  redirect()->route('home');
              

        }
   
        return  'unauthorized';
   


      }







      public function activate(Request $request){       

        //USER ACCOUNT ACTIVATION.......
            $request->validate([
                'activation_code' => 'required',
            ]);
    
    
            $activation_code = $request->input('activation_code');
            //    checking for users incorrect activation code
            if( !$user = User::where('activation_code', $activation_code)->first()){
                return 'incorrect activation code';
            }
    
            //    users activated
            $user = User::where('activation_code', $activation_code)->first();
            $user->status = 1;
            
    
              if($user->save()){
                // return view('auth2.signin');
                return redirect()->route('sign-in');
              }
    
              // return response()->json([
              //   'message' => 'user not activated'
              // ],200);
    
               
            
    
            
    
        }



     // Display forgot password form

      public function forgot(){

       return view('auth2.forgot-password');


      }





     // Forgot password methode

        public function forgotpassword(Request $request){
        
          $request->validate([
              'email'=>'required',
          ]);
   
          $email = $request->input('email');
          if(User::where('email', $email)->doesntExist()){
         
   
           return 'email does not exist';
   
         }
   
         $token = Str::random(6);
   
         $user = User::where('email', $email)->first();
         $user->password_reset = $token;
         $user->save();
   
   
   
         //email sending to user
       Mail::send('passwordReset.reset_token', ['token'=>$token], function ($message) use($email){
          
           $message->to($email);
           $message->subject('Reset your password');
       });
   
        return 'check your email';
   
       }



   // Display password reset form
  
    public function passswordreset(){

      return view('auth2.reset-password');

    }

       
    public function reset(Request $request){

      $request->validate([
          'password' => 'required',
          'password_reset' => 'required',
      ]);



      $password_reset = $request->input('password_reset');

      $user = User::where('password_reset', $password_reset)->first();
      $user->password = Hash::make($request->input('password'));
   

      if($user->save()){

        return view('auth2.signin');

        
        

      }
   
   
      return 'not succefull';


  }



  public function account_activation(){

   return view('auth2.activate-account');

  }
    
}
    








