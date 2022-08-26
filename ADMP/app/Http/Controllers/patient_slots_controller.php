<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient_slots;
use App\Models\doctor;
use App\Models\patient;
use App\Models\book_by_otp;
use App\Mail\otp;
use Mail;
use Hash;
use session;
use Exception;
use Illuminate\Database\QueryException;


class patient_slots_controller extends Controller
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

     ////////////////////////////////doctor panel///////////////////////////////////////
    public function create()
    {   
        $morningSunday=patient_slots::where('day','=','Sunday')->where('time','=','Morning')->where('doc_id','=',Session('doctor_id'))->get();
        $afternoonSunday=patient_slots::where('day','=','Sunday')->where('time','=','afternoon')->where('doc_id','=',Session('doctor_id'))->get();
        $eveningSunday=patient_slots::where('day','=','Sunday')->where('time','=','evening')->where('doc_id','=',Session('doctor_id'))->get();
        $morningMonday=patient_slots::where('day','=','Monday')->where('time','=','Morning')->where('doc_id','=',Session('doctor_id'))->get();
        $afternoonMonday=patient_slots::where('day','=','Monday')->where('time','=','afternoon')->where('doc_id','=',Session('doctor_id'))->get();
        $eveningMonday=patient_slots::where('day','=','Monday')->where('time','=','evening')->where('doc_id','=',Session('doctor_id'))->get();
        $morningTuesday=patient_slots::where('day','=','Tuesday')->where('time','=','Morning')->where('doc_id','=',Session('doctor_id'))->get();
        $afternoonTuesday=patient_slots::where('day','=','Tuesday')->where('time','=','afternoon')->where('doc_id','=',Session('doctor_id'))->get();
        $eveningTuesday=patient_slots::where('day','=','Tuesday')->where('time','=','evening')->where('doc_id','=',Session('doctor_id'))->get();
        $morningWednesday=patient_slots::where('day','=','Wednesday')->where('time','=','Morning')->where('doc_id','=',Session('doctor_id'))->get();
        $afternoonWednesday=patient_slots::where('day','=','Wednesday')->where('time','=','afternoon')->where('doc_id','=',Session('doctor_id'))->get();
        $eveningWednesday=patient_slots::where('day','=','Wednesday')->where('time','=','evening')->where('doc_id','=',Session('doctor_id'))->get();
        $morningThursday=patient_slots::where('day','=','Thursday')->where('time','=','Morning')->where('doc_id','=',Session('doctor_id'))->get();
        $afternoonThursday=patient_slots::where('day','=','Thursday')->where('time','=','afternoon')->where('doc_id','=',Session('doctor_id'))->get();
        $eveningThursday=patient_slots::where('day','=','Thursday')->where('time','=','evening')->where('doc_id','=',Session('doctor_id'))->get();
        $morningFriday=patient_slots::where('day','=','Friday')->where('time','=','Morning')->where('doc_id','=',Session('doctor_id'))->get();
        $afternoonFriday=patient_slots::where('day','=','Friday')->where('time','=','afternoon')->where('doc_id','=',Session('doctor_id'))->get();
        $eveningFriday=patient_slots::where('day','=','Friday')->where('time','=','evening')->where('doc_id','=',Session('doctor_id'))->get();
        $morningSaturday=patient_slots::where('day','=','Saturday')->where('time','=','Morning')->where('doc_id','=',Session('doctor_id'))->get();
        $afternoonSaturday=patient_slots::where('day','=','Saturday')->where('time','=','afternoon')->where('doc_id','=',Session('doctor_id'))->get();
        $eveningSaturday=patient_slots::where('day','=','Saturday')->where('time','=','evening')->where('doc_id','=',Session('doctor_id'))->get();

        return view('doctor.patient-schedule-timings',[
            'morningSunday'=>$morningSunday,
            'afternoonSunday'=>$afternoonSunday,
            'eveningSunday'=>$eveningSunday,
            'morningMonday'=>$morningMonday,
            'afternoonMonday'=>$afternoonMonday,
            'eveningMonday'=>$eveningMonday,
            'morningTuesday'=>$morningTuesday,
            'afternoonTuesday'=>$afternoonTuesday,
            'eveningTuesday'=>$eveningTuesday,
            'morningWednesday'=>$morningWednesday,
            'afternoonWednesday'=>$afternoonWednesday,
            'eveningWednesday'=>$eveningWednesday,
            'morningThursday'=>$morningThursday,
            'afternoonThursday'=>$afternoonThursday,
            'eveningThursday'=>$eveningThursday,
            'morningFriday'=>$morningFriday,
            'afternoonFriday'=>$afternoonFriday,
            'eveningFriday'=>$eveningFriday,
            'morningSaturday'=>$morningSaturday,
            'afternoonSaturday'=>$afternoonSaturday,
            'eveningSaturday'=>$eveningSaturday,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $time=$request->time;
        $day=$request->day;
        $no_slots=$request->no_slots;
        $min=$request->min;
        $start_time=$request->start_time;
        date_default_timezone_set('asia/calcutta');
        $i=0;
        while($i<$no_slots)
        {   
            $data=new patient_slots;
            $data->time=$time;    
            $data->doc_id=Session('doctor_id');
            $data->day=$day;
            $data->slot_timing=date('H:i',strtotime($min,strtotime($start_time)));
            $start_time=date('H:i',strtotime($min,strtotime($start_time)));
            $data->save();
            $i++;
        }
        return redirect('doctor-patient-schedule-timings')->with('success','Schedule add success');
    }


    /////////////////////////////////////patient panel//////////////////////////////////////////

    public function showpatient(Request $request, $id)
    {
        $doctordata=doctor::find($id);
        $doc_id=$doctordata->id;
        $searchbydate=$request->searchbydate;
        if($searchbydate!="")
        {        
            $timestamp = strtotime($searchbydate);
            $day=date('l', $timestamp); 
            $Morningsearchdate=patient_slots::where('day','=',$day)->where('time','=','Morning')->where('doc_id','=',$doc_id)->get();
            $afternoonsearchdate=patient_slots::where('day','=',$day)->where('time','=','afternoon')->where('doc_id','=',$doc_id)->get();
            $eveningsearchdate=patient_slots::where('day','=',$day)->where('time','=','evening')->where('doc_id','=',$doc_id)->get();
        }
        else
        {
            $current=date('d-m-Y');
            $timestamp = strtotime($current);
            $day=date('l', $timestamp); 
            $Morningsearchdate=patient_slots::where('day','=',$day)->where('time','=','Morning')->where('doc_id','=',$doc_id)->get();
            $afternoonsearchdate = patient_slots::where('day', '=', $day)->where('time', '=', 'afternoon')->where('doc_id', '=', $doc_id)->get();
            $eveningsearchdate=patient_slots::where('day','=',$day)->where('time','=','evening')->where('doc_id','=',$doc_id)->get();
        }

        return view('patient.booking',[
            'Morningsearchdate'=>$Morningsearchdate,
            'afternoonsearchdate'=>$afternoonsearchdate,
            'eveningsearchdate'=>$eveningsearchdate,
            'value'=>$searchbydate,
            'doctordata'=>$doctordata,
            'day'=>$day,
        ]);
    }

    public function book_appointment(Request $request)
    {   
        try {
            $slot_timing=$request->slot_timing;
            $doc_id=$request->doc_id;
            $appointment_date=$request->appointment_date;
            
            $request->Session()->put('slot_timing_session');
            $request->Session()->put('appo_date_session');
            $request->Session()->put('book_doc_session');

            return redirect('book_appointment');
        } catch (Exception $e) 
        {
            return redirect()->route('index');
        }
         
    }

    public function send_otp(Request $request)
    {
        $email=Session('email');

        $otp=rand(111111,999999);
        $request->Session()->put('otp',$otp);
        $data=['otp'=>Session('otp'),'body'=>"For Booking conform OTP first"];
    
        Mail::to($email)->send(new otp($data));
        return back()->with("success","OTP Sent");
            
		
        return redirect('patient.index');
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
