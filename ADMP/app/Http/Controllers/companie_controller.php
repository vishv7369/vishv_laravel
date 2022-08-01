<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companie;
use Hash;
use Session;

class companie_controller extends Controller
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
        return view('admin.add-company');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new companie;

        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->company_name=$request->company_name;
        $data->email=$request->email;
        $data->password=$request->password;
       
        // img upload
		$file=$request->file('profile_img');  // get file
		$file_name=time()."_profile_img.".$request->file('profile_img')->getClientOriginalExtension();// make file name
		$file->move('upload/companyprofile',$file_name); //file name move upload in public		
		$data->profile_img=$file_name; // file name store in db

        // visiting card upload
		$file2=$request->file('visiting_card');  // get file
		$file_name2=time()."_visiting_card_img.".$request->file('visiting_card')->getClientOriginalExtension();// make file name
		$file2->move('upload/visitingcard',$file_name3); //file name move upload in public		
		$data->visiting_card=$file_name2; // file name store in db

        $res=$data->save();
        return redirect('admin.add-company')->with('success','Company add Success'); 
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