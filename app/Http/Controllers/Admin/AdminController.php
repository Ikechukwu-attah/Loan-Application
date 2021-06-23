<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Takeloan;
use Carbon\Carbon;
use App\Bankrate;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $count_loans = Takeloan::count();
       
        $all_approved = Takeloan::where('status', '=', '2')->count();
        $all_pending = Takeloan::where('status', '=', '1')->count();
        $all_overdue = Takeloan::where('status', '=', '4')->count();
        

        return view('admin.dashboard', compact('count_loans',
                                               'all_approved',
                                               'all_pending','all_overdue'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $user = Takeloan::find($id);
        $interest =  Bankrate::all();
        return view('admin.loan.loan-status', compact('user', 'interest'));
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

        $status_user = Takeloan::find($id);
        $status_user->status = $request->input('status');
        $status_user->interest_rate = $request->input('interest');
       
        if($status_user->status == 2){
            $status_user->disbursement_date = Carbon::now();
            $check_date = Carbon::now();
            $future_date = $check_date->addDays($status_user->repayment_date);
            $status_user->repayment_date  =  $future_date;
    
            
            // // $status_user->repayment_date = $future_date;
   
        }

        if( $status_user->save()){
           
            return redirect()->back()->with('success-message', 'status updated successfully successfully');
          
        } 
            return redirect()->back()->with('error-message', 'status not updated');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loan = Takeloan::find($id);
       $loan->delete();
       return redirect()->back()->with('error-message', 'loan deleted successfully');
    }


//   LOAN STATUS DISPLAY


   public function loan(){
    $all_loans  =  Takeloan::all();
    return view('admin.loan.all-loans', compact('all_loans'));
   }




   public function active(){
    
    $active_loans = Takeloan::where('status', '2')->simplePaginate(5);
    
    return view('admin.loan.active-loan', compact('active_loans'));

   }



   public function pending(){
    
    $pending_loans = Takeloan::where('status', '1')->simplePaginate(5);
    return view('admin.loan.pending-loan', compact('pending_loans'));

   }

   public function overdue(){
       $overdue_loans   = Takeloan::where('status', '4')->simplePaginate(5);
       return view('admin.loan.overdue-loan', compact('overdue_loans'));
   }





}
