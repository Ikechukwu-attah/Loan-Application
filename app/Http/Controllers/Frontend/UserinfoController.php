<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Address;
use App\Bankdetail;
use App\Takeloan;
use App\Creditcard;
use App\Bankrate;
use App\Bank;
use Auth;
use DB;
class UserinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('frontend.userinfo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatebasicinfo(Request $request, $id)
    {
        //

        $user = Address::find($id);
        $user->date_of_birth               =   $request->input('dob');
        $user->phone_number                =   $request->input('phone-number');
        $user->marital_status              =   $request->input('marital-status');
       
        if($request->hasFile('images')){

            $request->validate([
                'images' => 'required|image|mimes:jpeg,bmp,png,gif,svg|max:2048' // Only allow .jpg, .bmp and .png .gif .svg file types.
            ]);
           $file = $request->file('images');
           $extension  =  $file->getClientOriginalExtension();
           $filename   =  time() . '.' . $extension;
           $file->move('uploads/profile', $filename);
           $user->avertar  = $filename;

        }
        
        if($user->save()){

            if($user->wasChanged()){

                return redirect()->route('home')->with('success-message', ' updated successfully');  
            }


            return redirect()->route('home')->with('info-message', ' Nothing to update');   
        }
     
        return redirect()->back()->with('error-message', 'not updated');

    }
    public function updatepersonalinfo(Request $request, $id){

        $user = Address::find($id);
        
        $user->LGA                         =   $request->input('LGA');
        $user->residential_address         =   $request->input('address');
        $user->state                       =   $request->input('state');
        $user->employment_status           =   $request->input('employment');
        $user->city                        =   $request->input('city');

        if($user->save()){
            return redirect()->route('home')->with('success-message', ' updated successfully');   
        }
     
        return redirect()->back()->with('error-message', 'not updated');
        
    }

    public function updatecontact(Request $request, $id){

        $user = Address::find($id);

        $user->emergency_fullname          =   $request->input('fullname');
        $user->emergency_relationship      =   $request->input('relationship');
        $user->emergency_fullname1         =   $request->input('fullname1');
        $user->emergency_relationship1     =   $request->input('relationship1');
        $user->emergency_phone_number1     =   $request->input('phonenumber1');
        $user->emergency_address1          =   $request->input('contact-address1');
        $user->emergency_address           =   $request->input('contact-address');
        $user->emergency_phone_number      =   $request->input('phonenumber');

        if($user->save()){
            return redirect()->route('home')->with('success-message', ' updated successfully');   
        }
     
        return redirect()->back()->with('error-message', 'not updated');
    }

    // public function updatecard(Request $request, $id){

    //     $user = Creditcard::find($id);

    //     $user->card_fullname   =      $request->input('card-name');
    //     $user->card_number     =      $request->input('card-number');
    //     $user->expiring_date   =      $request->input('expiry-date');
    //     $user->cvv_number      =      $request->input('cvv');
       
    //     if($user->save()){
    //         return redirect()->back()->with('success-message', ' updated successfully');   
    //     }
     
    //     return redirect()->back()->with('error-message', 'not updated');

    // }

    public function updatebankdetail(Request $request, $id){

        $user = Bankdetail::find($id);

        $user->bank_name        =        $request->input('bank-name');
        $user->account_number   =        $request->input('account');
        $user->BVN              =        $request->input('bvn');
        $user->monthly_income   =        $request->input('income');
         
        if($user->save()){
            return redirect()->route('home')->with('success-message', ' updated successfully');   
        }
     
        return redirect()->back()->with('error-message', 'not updated');
    }

    public function updateloan(Request $request){

        $user   =  new Takeloan();
        $user->user_id = Auth::user()->id;
        $user->amount = 4000;
        $user->repayment_date    =  $request->input('date-repayment');
        $user->requested_amount    =  $request->input('apply-loan');
        
        if($user->save()){
            return redirect()->route('home')->with('success-message', ' loan applied successfully');   
        }
     
        return redirect()->back()->with('error-message', 'not updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DELETING OF CREDIT CARD

        $delete_card = Creditcard::find($id);

        if($delete_card->delete()){

            
        return redirect()->back()->with('error-message', 'Card deleted');

        }
        

    }




    public function basicinfo($id){
       
        $check_active = Takeloan::where('status', '=', '2')->first();
        $user = Address::where('user_id', $id)->first();
      return view('frontend.basicinfo', compact('user', 'check_active'));

    }
    public function personalinfo($id){

        $check_active = Takeloan::where('status', '=', '2')->count();
        $user = Address::where('user_id', $id)->first();
         return view('frontend.personalinfo', compact('user', 'check_active'));

    }
    public function emergencyaddress($id){

        $check_active = Takeloan::where('status', '=', '2')->count();
        $user = Address::where('user_id', $id)->first();
          return view('frontend.emergency-contact', compact('user', 'check_active'));
    }
    public function bankdetail($id){

        $check_active = Takeloan::where('status', '=', '2')->count();
        $users_bank = Bank::all();
        $user = Bankdetail::where('user_id', $id)->first();
          return view('frontend.bankdetails', compact('user', 'users_bank', 'check_active'));
      
    }
    public function card($id){

        $cards = Creditcard::where('user_id', $id)->get();
        return view('frontend.card', compact('cards'));
    }
   
   
   
    public function applyloan(){

    //  $user = Takeloan::where('user_id', $id)->first();

      $basic_info        =   Address::where('user_id', Auth::user()->id)->first();
      $bank_detail       =   Bankdetail::where('user_id', Auth::user()->id)->first();
      $add_card          =   Creditcard::where('user_id', Auth::user()->id)->get();
      $date_repayment    =    Bankrate::all();

      if($basic_info->phone_number == null){
      
        return redirect()->route('basic-info', [Auth::user()->id])->with('error-message', 'Kindly fill the form input');
      }

      if( $basic_info->residential_address == null){
          
        return redirect()->route('personal-info',[Auth::user()->id])->with('error-message', 'Kindly fill the form input');
      }

      if( $basic_info->emergency_fullname == null){
          
        return redirect()->route('emergency-address', [Auth::user()->id])->with('error-message', 'Kindly fill the form input');
      }

      if($bank_detail->account_number == null){
          
          return redirect()->route('bank-detail',[Auth::user()->id])->with('error-message', 'Kindly fill the form input');
      }

      if(count($add_card) < 1){

        

        return redirect()->route('card',[Auth::user()->id])->with('error-message', 'Kindly fill the form input');
      }



     return view('frontend.apply-loan', compact('date_repayment'));

    }

 



    // TOGGLE SWITCH IN LARAVEL STARTS HERE FOR THE FRONT VIEW

    public function atm_toggle($id){

        $loan_status = DB::table('takeloans')
        ->where('user_id', '=', $id)
        ->where(function ($query) {
            $query->where('status', '=', 2)
                  ->orWhere('status', '=', 1);
        })
        ->get();


        $cards = Creditcard::where('user_id', $id)->get();
        return view('frontend.atm_cards', compact('cards','loan_status'));

       

    }


    public function update_atm_toogle(Request $request){

    $atm_card = Creditcard::findOrFail($request->id);
    $atm_card->atm_status = $request->status;
    if($atm_card->save()){
        
    return redirect()->back()->with('success-message', 'card selected');
    }
    
    
    return redirect()->back()->with('error-message', 'card not selected');
}

}
