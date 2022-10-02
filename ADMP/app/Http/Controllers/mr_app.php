<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;
use App\Models\companie;
use App\Models\visitor_slots;
use App\Models\mr_appointment;
use Hash;
use session;
use Alert;
use Exception;

class mr_app extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=mr_appointment::join('doctors','doctors.id','=','mr_appointments.doctor_id')
        ->join('visitor_slots','visitor_slots.id','=','mr_appointments.slot_id')
        ->get(['doctors.first_name','doctors.last_name','doctors.profile_img','visitor_slots.start_time','visitor_slots.end_time','visitor_slots.created_at','mr_appointments.*']);
       return view('mr.index',["mrappointment_arr"=>$data]);
    }

    public function mr_appointment()
    {
        $data=mr_appointment::join('mrs','mrs.id','=','mr_appointments.mr_id')
        ->join('visitor_slots','visitor_slots.id','=','mr_appointments.slot_id')
        ->where('doctor_id','=',Session('doctor_id'))
        ->get(['mrs.first_name','mrs.last_name','visitor_slots.start_time','visitor_slots.end_time','mr_appointments.*']);
       return view('doctor.mr-appointments',["mr_appointment_arr"=>$data]);
    }

    public function mrdashboard_appointment()
    {
        $data=mr_appointment::join('mrs','mrs.id','=','mr_appointments.mr_id')
        ->join('visitor_slots','visitor_slots.id','=','mr_appointments.slot_id')
        ->where('doctor_id','=',Session('doctor_id'))
        ->get(['mrs.Manager_name','visitor_slots.start_time','visitor_slots.end_time','mr_appointments.*']);
       return view('mr.mr-dashboard',["companyapp_arr"=>$data]);
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
    public function mr_app_book(Request $request)
    {
        $data=new mr_appointment;
        $data->slot_id=$request->slot_id;
        $data->mr_id=Session('mr_id');
        $data->doctor_id=$request->doctor_id; 
        $data->save();
        Alert::success('Done', 'You\'ve Successfully Add Appointment');
        return back();
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
    public function mr_app_destroy($id)
    { 
       $data=mr_appointment::find($id);
       $data->delete();
        Alert::success('Done', 'You\'ve Successfully Delete Appointment');
        return back();
    }

    public function mr_appointment_destroy($id)
    { 
       $data=mr_appointment::find($id);
       $data->delete();
        Alert::success('Done', 'You\'ve Successfully Delete Appointment');
        return back();
    }
}
