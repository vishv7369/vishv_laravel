<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;
use App\Models\state;
use App\Models\city;
use App\Models\specialist;
use Hash;

class doctor_controller extends Controller
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
        $special_id_arr=specialist::all();
        $state_id_arr=state::all();
        $city_id_arr=city::all();
        return view('admin.add-doctor',["special_id_arr"=>$special_id_arr,"state_id_arr"=>$state_id_arr,"city_id_arr"=>$city_id_arr]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new doctor;
        
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->short_tittle=$request->short_tittle;
        $data->email=$request->email;
        $data->gender=$request->gender;
        $data->password=Hash::make($request->password);
        $data->dob=$request->dob;
        $data->liacence_no=$request->liacence_no;
        $data->education=$request->education;
        $data->experience=$request->experience;
        $data->hospital_name=$request->hospital_name;
        $data->dr_mobile=$request->dr_mobile;
        $data->office_no=$request->office_no;
        $data->about=$request->about;
        $data->address=$request->address;
        $data->pincode=$request->pincode;
        $data->google_map=$request->google_map;
        $data->day=implode(",",$request->day);
        $data->hospital_time=$request->hospital_time;
        $data->consulting_fees=$request->consulting_fees;
        $data->followup_fees=$request->followup_fees;
        $data->notification=$request->notification;

        $data->specialist_id=$request->specialist_id ;
        $data->state=$request->state;
        $data->city=$request->city;
        $data->area=$request->area;

        // img upload
		$file=$request->file('profile_img');  // get file
		$file_name=time() . "_profile_img." . $request->file('profile_img')->getClientOriginalExtension();// make file name
		$file->move('upload/doctor',$file_name); //file name move upload in public		
		$data->profile_img=$file_name; // file name store in db

        // hospital upload
		$file=$request->file('hospital_img');  // get file
		$file_name=time() . "_hospital_img." . $request->file('hospital_img')->getClientOriginalExtension();// make file name
		$file->move('upload/hospital',$file_name); //file name move upload in public		
		$data->hospital_img=$file_name; // file name store in db

        // visiting card upload
		$file=$request->file('visit_card');  // get file
		$file_name=time() . "_visit_card_img." . $request->file('visit_card')->getClientOriginalExtension();// make file name
		$file->move('upload/visitingcard',$file_name); //file name move upload in public		
		$data->visit_card=$file_name; // file name store in db

        $res=$data->save();
        return redirect('admin-add-doctor')->with('success','Add Doctor Success');

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
