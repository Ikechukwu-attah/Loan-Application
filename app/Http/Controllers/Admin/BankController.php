<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bank;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $user = Bank::all();

        return view('admin.banks.all-banks', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.banks.add-bank');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Bank();
        $user->bank_name   =  $request->input('add-bank');

       if($user->save()){

          return redirect()->back()->with('success-message', ' bank name added');

       }
       return redirect()->back()->with('error-message', 'bank name not added');
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
        $user = Bank::find($id);
        return view('admin.banks.edit-bank', compact('user'));
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

        $user = Bank::find($id);
           $user->bank_name = $request->input('add-bank');
    
           if($user->save()){
    
             return redirect()->back()->with('success-message', 'bank name updated');
    
        }
            return redirect()->back()->with('error-message', 'bank name not updated');
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

        $user = Bank::find($id);
        
       if($user->delete()){

            
      return redirect()->back()->with('success-message', 'bankname deleted');
 
      }

     return redirect()->back()->with('error-message',   'bankname not deleted');


    }
}
