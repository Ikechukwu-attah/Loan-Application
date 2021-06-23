<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;


class SettingController extends Controller
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

        $user =  Setting::where('user_id', $id)->first();

        return view('admin.generalsettings.basic_settings', compact('user'));

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
         
        $user_setting =  Setting::find($id);
        $user_setting->site_name  = $request->input('site-name');
        $user_setting->footer     = $request->input('site-footer');

        if($request->hasFile('site-logo')){

            $request->validate([
                'site-logo' => 'required|image|mimes:jpeg,bmp,png,gif,svg|max:2048' // Only allow .jpg, .bmp and .png .gif .svg file types.
            ]);
           $file = $request->file('site-logo');
           $extension  =  $file->getClientOriginalExtension();
           $filename   =  time() . '.' . $extension;
           $file->move('uploads/profile', $filename);
           $user_setting->logo = $filename;

        }




        if($request->hasFile('background-image')){

            $request->validate([
                'background-image' => 'required|image|mimes:jpeg,bmp,png,gif,svg|max:2048' // Only allow .jpg, .bmp and .png .gif .svg file types.
            ]);
           $file = $request->file('background-image');
           $extension  =  $file->getClientOriginalExtension();
           $filename   =  time() . '.' . $extension;
           $file->move('uploads/profile', $filename);
           $user_setting->background_header  = $filename;

        }

        
        if($user_setting->save()){
            return redirect()->back()->with('success-message', ' updated successfully');   
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
        //
    }
}
