<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;
use App\Models\companie;
use App\Models\visitor_slots;
use App\Models\manager_appointment;
use Hash;
use session;
use Alert;
use Exception;

class manager_app extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=manager_appointment::join('doctors','doctors.id','=','manager_appointments.doctor_id')
        ->join('visitor_slots','visitor_slots.id','=','manager_appointments.slot_id')
        ->get(['doctors.first_name','doctors.last_name','doctors.profile_img','visitor_slots.start_time','visitor_slots.end_time','visitor_slots.created_at','manager_appointments.*']);
       return view('manager.index',["myappointment_arr"=>$data]);
    }

    public function manager_appointment()
    {
        $data=manager_appointment::join('managers','managers.id','=','manager_appointments.manager_id')
        ->join('visitor_slots','visitor_slots.id','=','manager_appointments.slot_id')
        ->where('doctor_id','=',Session('doctor_id'))
        ->get(['managers.Manager_name','visitor_slots.start_time','visitor_slots.end_time','manager_appointments.*']);
       return view('doctor.manager-appointments',["managerappointment_arr"=>$data]);
    }

    public function managerdashboard_appointment()
    {
        $data=manager_appointment::join('managers','managers.id','=','manager_appointments.company_id')
        ->join('visitor_slots','visitor_slots.id','=','manager_appointments.slot_id')
        ->where('doctor_id','=',Session('doctor_id'))
        ->get(['managers.Manager_name','visitor_slots.start_time','visitor_slots.end_time','manager_appointments.*']);
       return view('manager.manager-dashboard',["companyapp_arr"=>$data]);
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
    public function manager_app_book(Request $request)
    {
        $data=new manager_appointment;
        $data->slot_id=$request->slot_id;
        $data->manager_id=Session('manager_id');
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
    public function manager_app_destroy($id)
    { 
       $data=manager_appointment::find($id);
       $data->delete();
        Alert::success('Done', 'You\'ve Successfully Delete Appointment');
        return back();
    }

    public function appointment_destroy($id)
    { 
       $data=manager_appointment::find($id);
       $data->delete();
        Alert::success('Done', 'You\'ve Successfully Delete Appointment');
        return back();
    }
}
