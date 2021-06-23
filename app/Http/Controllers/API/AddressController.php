<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Address;

class AddressController extends Controller
{
    // 

    public function userinfo(Request $request){

        $request->validate([

         'residential_address' => 'required',
         'LGA'                 => 'required',
         'state'               => 'required',
         'marital_status'      => 'required',
         'emergency_name'      => 'required',
         'emergency_address'   => 'required',
         'emergency_phone_number' => 'required'

        ]);




      $info = new Address();

      $info->residential_address = $request->input('residential_address');
      $info->LGA                =  $request->input('LGA');
      $info->state              =  $request->input('marital_status');
      $info->emergency_name     =  $request->input('emergency_name');
      $info->emergency_address  =  $request->input('emergency_address');
      $info->emergency_phone_number = $request->input('emergency_phone_number');

       if($info->save()){

          return response()->json([
              'message' => 'users info successfully saved'
          ]);

       }

       return response()->json([
           'message'  => 'users not successfully saved'
       ]);




    }


    public function userupdate(Request $request, $id){
     
      $user =  Address::findOrFail($id);


    }
}
