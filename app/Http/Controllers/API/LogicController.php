<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Takeloan;
use Carbon\Carbon;


class LogicController extends Controller
{
    //


 public function loanrequest(Request $request){
   $user = new Takeloan();
   $user->requested_amount = $request->input('requested_amount');
   $user->user_id  = $request->input('user_id');
   $user->amount = 4000;
   $date_now = Carbon::now();
   
   
      // $user->disbursement_date = $date_now->addMinutes(5); 
   
   
  //  $user->Repayment_date  = $date_now->addDay(30);
  //  $user->application_date = date('Y-m-d H:i:m');
  //  $user->Disbursement_date = date('Y-m-d H:i:m');
   

   if($user){
    //  $user->Status = 1;
    $user->save();
    

    return response()->json([
      'message'=> 'loan successfully applied'
    ]);

   }


  //  if($user->status == 2){

  //   $user->disbursement_date = $date_now->addMinutes(5);     
  //  }
 







 }

}
