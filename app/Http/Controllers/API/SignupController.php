<?php

namespace App\Http\Controllers\API;

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
    //
    
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
         
          return response()->json([
              'message'=>'email taken already'
          ]);
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
      

          return response()->json([
            'message_registration'=>'success',
            'token1' => $token, 
            'message' => 'activation code sent to your  email',
            
        ]);
              
          };
          
          
         return response()->json(['message' => 'failed']);
     
  
      }


    //  updating users information after registration 
      public function updateaddress(Request $request){
       
        $user_id = $request->input('user_id');
         
        $contact = Address::where('user_id', $user_id)->first();

        $contact->residential_address = $request->input('residential_address');
        $contact->LGA = $request->input('LGA');
        $contact->state = $request->input('state');
        $contact->marital_status = $request->input('marital_status');
        $contact->emergency_name = $request->input('emergency_name');
        $contact->emergency_address = $request->input('emergency_address');
        $contact->emergency_phone_number = $request->input('emergency_phone_number');

        $contact->save();

        return response()->json([
          'message' => 'contact address successfully updated'
        ]);


        return response()->json([
          'message' => 'contact address not successfully updated'
        ]);
        


      }




      // updating users bank detail after registration 
           public function bankdertailupdate(Request $request){
             $user_id = $request->input('user_id');
             
             $bank_user = Bankdetail::where('user_id', $user_id)->first();
             $bank_user->employment_status = $request->input('employment_status');
             $bank_user->bank_name = $request->input('bank_name');
             $bank_user->account_number = $request->input('account_number');
             $bank_user->BVN            = $request->input('BVN');
             $bank_user->credit_card    = $request->input('credit_card');
             $bank_user->monthly_income  = $request->input('monthly_income');

             $bank_user->save();

        return response()->json([
          'message' => 'user bank details successfully updated'
        ]);


        return response()->json([
          'message' => 'user bank details not successfully updated'
        ]);
        



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

            $token = auth()->user()->createToken('weblinks')->accessToken;

            return response()->json([
                'token' => $token,
                'message' => 'successfully logged in',
                'data' => [
                  'user' =>$user,
                  'data2' => $user->address,
                  'data3' => $user->bankdetail
                ]
                

            ], 200);

          }
     
          return response()->json([
              'message' => 'unathourized',
          ], 400); 
     


        }



        public function activate(Request $request){       

            //USER ACCOUNT ACTIVATION.......
                $request->validate([
                    'activation_code' => 'required',
                ]);
        
        
                $activation_code = $request->input('activation_code');
                //    checking for users incorrect activation code
                if( !$user = User::where('activation_code', $activation_code)->first()){
                    return response()->json([
                        'message' => 'incorrect token'
                    ]);
                }
        
                //    users activated
                $user = User::where('activation_code', $activation_code)->first();
                $user->status = 1;
                
        
                  if($user->save()){
                    return response()->json([
                        'message' => 'user successfully activated'
                    ],200);
                  }
        
                  return response()->json([
                    'message' => 'user not activated'
                  ],200);
        
                   
                
        
                
        
            }



}
