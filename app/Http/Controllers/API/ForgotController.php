<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Str;
use App\User;
use Auth;


class ForgotController extends Controller
{
    //

    public function forgotpassword(Request $request){
        
       $request->validate([
           'email'=>'required',
       ]);

       $email = $request->input('email');
       if(User::where('email', $email)->doesntExist()){
      

        return response()->json([
            'message' => 'User dosent exist'
        ]);

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

     return response()->json([
         'message' => 'check your email'
     ]);

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

          return response()->json([
              'message' => 'password successfully updated',
          ]);

          
          return response()->json([
              'message' => 'password not succesfully updated'
          ]);


        }
     
     



    }
}
