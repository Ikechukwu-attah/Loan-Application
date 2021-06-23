<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Creditcard;
use Auth;
use Paystack;
use DB;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

         if($paymentDetails['data']['status'] == 'success'){

           $user = new Creditcard();
           $user->status                   =     $paymentDetails['data']['status'] ;
           $user->authorization_code       =      $paymentDetails['data']['authorization']['authorization_code'];
           $user->channel                  =      $paymentDetails['data']['authorization']['channel'];
           $user->exp_month                =      $paymentDetails['data']['authorization']['exp_month'];
           $user->exp_year                 =      $paymentDetails['data']['authorization']['exp_year'];
           $user->card_type                =      $paymentDetails['data']['authorization']['card_type'];
           $user->last4                    =      $paymentDetails['data']['authorization']['last4'];
           $user->user_id                  =      Auth::user()->id;
           $user->save();
           return redirect()->back()->with('success-message', 'payment was succesful');


         }

         return redirect()->back()->with('error-message', 'payment was not succesful');
        // return 'payment made succesfully';

        // dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }




     public function repayment(Request $request){
        // $paymentDetails =  DB::table('creditcards')->where('user_id', Auth::user()->id)->first();
        // $authorizationCode  =  $paymentDetails->authorization_code;
         
        $amount =  $request->input('loan-amount') * 100;
        $loan_id = $request->input('loan-id');
        $authorizationCode = $request->input('auth_code');
        

        $url = "https://api.paystack.co/transaction/charge_authorization";
       
        
        $fields = [
          'email' => Auth::user()->email,
          'amount' => $amount,
          "authorization_code" => $authorizationCode
        ];
        $fields_string = http_build_query($fields);
        //open connection
        $ch = curl_init();
      
        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          "Authorization: Bearer sk_test_d93e63e53ce847ecc5d35cbcbd25119530fa4707",
          "Cache-Control: no-cache",
        ));
        
        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
        
        //execute post
        $result = curl_exec($ch);
        // dd($result);

        $formatted_result = json_decode($result,true);

        if (array_key_exists('data', $formatted_result) && array_key_exists('status', $formatted_result['data']) && ($formatted_result['data']['status'] === 'success')) {
			
          $update_loan = DB::table('takeloans')
          ->where('id', $loan_id)
          ->update(['status' => 3]);
             if($update_loan){

              return redirect()->route('home')->with('success-message', 'repayment was succesful');
             }else{
              return redirect()->route('home')->with('error-message', 'Failed to update');
             }

     
			
        }
        
        
          

        else{


          return redirect()->route('home')->with('error-message', 'Failed to charge card, Try again');
        
           

        }


     }


}