<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use Session;
use Redirect;
use Sentinel;
use Alert;

class ApplicantController extends Controller
{
    public function __construct() 
    {
        $this->middleware('sentinel');
    }    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.join');
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
        $new_apply = new Applicant;
        $new_apply->user_id = $request->id;
        $new_apply->name = $request->name;
        $new_apply->email = $request->email;
        $new_apply->contact = $request->contact;
        $new_apply->address = $request->address;


        $destinationPath = 'uploads';
        $generateName = md5(uniqid(mt_rand(), true).microtime(true));
        
        $file = $request->file('cv'); 
        $fileName = $destinationPath . '_' .  $generateName . '.' . $file->getClientOriginalExtension();
        $file->move($destinationPath,$fileName); 
        $new_apply->file = $fileName;
            $new_apply->status = "unread";
            $new_apply->save();
            
        Alert::success('Success, Thanks you');
        return Redirect::to('/join'); 

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
    public function update(Request $request, $id)
    {
        //
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
