<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bankrate;

class BankrateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $user = Bankrate::all();

        return view('admin.Interest.all-interest-rate', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

      return view('admin.Interest.add-interest-rate');
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

        $user = new Bankrate();
        $user->interest_rate    =      $request->input('add-interest');
        $user->repayment_date   =      $request->input('add-repaymentdate');
        $user->week_days        =      $request->input('add-weekdays');
        

        if($user->save()){

            return redirect()->back()->with('success-message', 'Interest rate added');

        }
        return redirect()->back()->with('error-message', 'Interest rate not added');
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

       $user = Bankrate::find($id);
       return view('admin.Interest.edit-interest-rate', compact('user'));




    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
      $user = Bankrate::find($id);
      $user->interest_rate    =      $request->input('add-interest');
      $user->repayment_date   =      $request->input('add-repaymentdate');
      $user->week_days        =      $request->input('add-weekdays');

      if($user->save()){

        return redirect()->back()->with('success-message', 'Interest rate updated');

    }
    return redirect()->back()->with('error-message', 'Interest rate not updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = Bankrate::find($id);
        
        if($user->delete()){

            
        return redirect()->back()->with('success-message', 'Interest rate deleted');
 
        }

        return redirect()->back()->with('error-message', 'Interest rate not deleted');

    }







    // repayment date  method

    //  public function all_repayment_date(){


    //     $user = Bankrate::all();

    //     return view('admin.repaymentDate.all_repayment_date', compact('user'));

    //  }



    //  public function create_bank(){


    //     return view('admin.repaymentDate.add_repayment_date');

    //  }




    //  public function edit_bank($id){

    //     $user = Bankrate::find($id);
    //     return view('admin.repaymentDate.edit_repayment_date', compact('user'));
 

    //  }
     

    //  public function store_bank(Request $request){

    //     $user = new Bankrate();
    //     $user->bank_name   =  $request->input('add-bank');

    //     if($user->save()){

    //         return redirect()->back()->with('success-message', ' bank name added');

    //     }
    //     return redirect()->back()->with('error-message', 'bank name not added');
    //  }

    //  public function update_bank(Request $request, $id){

        
    //     $user = Bankrate::find($id);
    //   $user->bank_name = $request->input('add-bank');

    //   if($user->save()){

    //     return redirect()->back()->with('success-message', 'bank name updated');

    // }
    //     return redirect()->back()->with('error-message', 'bank name not updated');




    //  }


    //  public function destory_bank($id){


    //     $user = Bankrate::find($id);
        
    //     if($user->delete()){

            
    //     return redirect()->back()->with('success-message', 'Interest rate deleted');
 
    //     }

    //     return redirect()->back()->with('error-message', 'Interest rate not deleted');



    //  }



}
