<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient_slots;
use App\Models\doctor;
use Hash;
use session;

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function showpatient(Request $request, $id)
    {
        $data=doctor::find($id);
        $doc_id=$data->id;
        
        
        $morningSunday=patient_slots::where('day','=','Sunday')->where('time','=','Morning')->where('doc_id','=',$doc_id)->get();
        $afternoonSunday=patient_slots::where('day','=','Sunday')->where('time','=','afternoon')->where('doc_id','=',$doc_id)->get();
        $eveningSunday=patient_slots::where('day','=','Sunday')->where('time','=','evening')->where('doc_id','=',$doc_id)->get();
        $morningMonday=patient_slots::where('day','=','Monday')->where('time','=','Morning')->where('doc_id','=',$doc_id)->get();
        $afternoonMonday=patient_slots::where('day','=','Monday')->where('time','=','afternoon')->where('doc_id','=',$doc_id)->get();
        $eveningMonday=patient_slots::where('day','=','Monday')->where('time','=','evening')->where('doc_id','=',$doc_id)->get();
        $morningTuesday=patient_slots::where('day','=','Tuesday')->where('time','=','Morning')->where('doc_id','=',$doc_id)->get();
        $afternoonTuesday=patient_slots::where('day','=','Tuesday')->where('time','=','afternoon')->where('doc_id','=',$doc_id)->get();
        $eveningTuesday=patient_slots::where('day','=','Tuesday')->where('time','=','evening')->where('doc_id','=',$doc_id)->get();
        $morningWednesday=patient_slots::where('day','=','Wednesday')->where('time','=','Morning')->where('doc_id','=',$doc_id)->get();
        $afternoonWednesday=patient_slots::where('day','=','Wednesday')->where('time','=','afternoon')->where('doc_id','=',$doc_id)->get();
        $eveningWednesday=patient_slots::where('day','=','Wednesday')->where('time','=','evening')->where('doc_id','=',$doc_id)->get();
        $morningThursday=patient_slots::where('day','=','Thursday')->where('time','=','Morning')->where('doc_id','=',$doc_id)->get();
        $afternoonThursday=patient_slots::where('day','=','Thursday')->where('time','=','afternoon')->where('doc_id','=',$doc_id)->get();
        $eveningThursday=patient_slots::where('day','=','Thursday')->where('time','=','evening')->where('doc_id','=',$doc_id)->get();
        $morningFriday=patient_slots::where('day','=','Friday')->where('time','=','Morning')->where('doc_id','=',$doc_id)->get();
        $afternoonFriday=patient_slots::where('day','=','Friday')->where('time','=','afternoon')->where('doc_id','=',$doc_id)->get();
        $eveningFriday=patient_slots::where('day','=','Friday')->where('time','=','evening')->where('doc_id','=',$doc_id)->get();
        $morningSaturday=patient_slots::where('day','=','Saturday')->where('time','=','Morning')->where('doc_id','=',$doc_id)->get();
        $afternoonSaturday=patient_slots::where('day','=','Saturday')->where('time','=','afternoon')->where('doc_id','=',$doc_id)->get();
        $eveningSaturday=patient_slots::where('day','=','Saturday')->where('time','=','evening')->where('doc_id','=',$doc_id)->get();

        
        
        
        $searchbydate=$request->searchbydate;
        if($searchbydate != "")
        {        
            $timestamp = strtotime($searchbydate);
            $day=date('l', $timestamp); 
            $slotbydate=patient_slots::where('day','=','morningWednesday')->get();
        }
        else
        {
            $current=date('d-m-Y');
           // $day=date('l', $current);
            $slotbydate=patient_slots::where('day','=','morningWednesday')->get();
        }

        return view('patient.booking',[
            'data'=>$data,
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
            'slotbydate'=>$slotbydate,
            'value'=>$searchbydate
        ]);
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
