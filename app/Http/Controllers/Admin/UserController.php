<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $users = User::simplePaginate(5);
        
        return view('admin.users.all-users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.add-user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $request->validate([
           
        //     'firstname'=> 'required',
        //     'lastname' =>  'required',
        //     'email'   =>  'required',
        //     'password' =>  'required|min:8'
    
        //   ]);



        // $add_user = new User();
        // $add_user->firstname = $request->input('firstname');
        // $add_user->lastname = $request->input('lastname');
        // $add_user->email = $request->input('email');
        // $add_user->subscriber = $request->input('subscriber');
        // $add_user->password = Hash::make($request->input('password'));



    //    $request->validate([
           
    //         'firstname'=> 'required',
    //         'lastname' =>  'required',
    //         'email'   =>  'required',
    //         'password' =>  'required|min:8'
    
         
    //    ]);
          //    Registering user
          $add_user = new User();
          $add_user->firstname = $request->input('firstname');
          $add_user->lastname  = $request->input('lastname');
          $add_user->email     = $request->input('email');
          $add_user->password  = Hash::make($request->input('password'));

        
        if( $add_user->save()){
           
        return redirect()->back()->with('success-message', 'user added successfully');
        }
        
        return redirect()->back()->with('error-message', 'user not added successfully');

        
       
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
        $user = User::find($id);
        return view('admin.users.edit-user', compact('user'));
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

        $update_user = User::find($id);
        $update_user->firstname = $request->input('firstname');
        $update_user->lastname = $request->input('lastname');
        $update_user->email = $request->input('email');
        $update_user->subscriber = $request->input('subscriber');
        
        
        if( $update_user->save()){
           
        return redirect()->back()->with('success-message', 'user updated successfully successfully');
        }
        
        return redirect()->back()->with('error-message', 'user not updated');
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
         
        $user = User::find($id);
        $user->delete();

            
            return redirect()->back()->with('error-message', 'user deleted successfully');

        
    }
}
