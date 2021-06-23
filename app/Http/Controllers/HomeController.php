<?php

namespace App\Http\Controllers;
use Auth;
use App\Address;
use App\Takeloan;
use DB;

// use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $id = Auth::user()->id;
        $photo = Address::find($id);
        // $loan_count = Takeloan::where('user_id', $id )->whereNotIn('status', [1, 2])->count();
        $loan_count = DB::table('takeloans')
           ->where('user_id', '=', $id)
           ->where(function ($query) {
               $query->where('status', '=', 2)
                     ->orWhere('status', '=', 1);
           })
           ->count();
          

        // $loan_status = Takeloan::where('user_id', $id)->get();
        // $balance = Takeloan::where('user_id' '=' $id)->sum('balance');



        $loan_status = DB::table('takeloans')
        ->where('user_id', '=', $id)
        ->where(function ($query) {
            $query->where('status', '=', 2)
                  ->orWhere('status', '=', 1);
        })
        ->get();





        return view('home', compact('loan_count', 'loan_status', 'photo'));
    }
}
