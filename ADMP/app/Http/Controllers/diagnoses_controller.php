<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;
use App\Models\diagnoses;
use App\Models\prescriptions;
use App\Models\patient;
use App\Models\appointments;
use App\Models\doc_fav_medicine;
use Hash;
use session;
use Alert;
use Exception;

class diagnoses_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$diagnoses_arr=appointments::join('diagnoses','diagnoses.appoinment_id','=','appointments.id')->get();
        print_r($diagnoses_arr);
        exit();
        return view('doctor.add-prescription',["diagnoses_arr"=>$diagnoses_arr]);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $app_data=appointments::find($id)->first();
        $patient_id=$app_data->patient_id;
        $pdata=appointments::join('patients','patients.id','=','appointments.patient_id')->where('patient_id','=',$patient_id)->first();
        $pdiagnoses=diagnoses::where('appoinment_id','=',$id)->get();
        $pprescriptions=prescriptions::where('appoinment_id','=',$id)->get();
        $doc_fav_medicine=doc_fav_medicine::where('doctor_id','=',Session('doctor_id'))->get();
        return view('doctor.add-prescription',["app_data"=>$app_data,"pdata"=>$pdata,"pdiagnoses"=>$pdiagnoses,"pprescriptions"=>$pprescriptions,"doc_fav_medicine"=>$doc_fav_medicine]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function diagnosis_store(Request $request, $id)
    {
        $data=new diagnoses;
        $data->problems=$request->problems;
        $data->diagnosis=$request->diagnosis;
        $data->care_suggestion=$request->care_suggestion;
        $data->reports=$request->reports;
        $data->appoinment_id=$request->appoinment_id;
        $data->patient_id=$request->patient_id;
        $res=$data->save();
        return back();
    }

    public function prescription_store(Request $request, $id)
    {
        $data=new prescriptions;
        $data->medicine_name=$request->medicine_name;
        $data->medicine_Quantity=$request->medicine_Quantity;
        $data->medicine_take_Days=$request->medicine_take_Days;
        $data->medicine_take_Time=implode(",",$request->medicine_take_Time);
        $data->medicine_dose=$request->medicine_dose; 
        $data->appoinment_id=$request->appoinment_id;
        $data->patient_id=$request->patient_id;
        $res=$data->save();
        return back();
    }

    public function invoice_view($id)
    {
        $app_data=appointments::find($id)->first();
        $patient_id=$app_data->patient_id;
        $patient_data=patient::where('id','=',$id)->first();
        $doctor_data=doctor::where('id','=',Session('doctor_id'))->first();
        $diagnoses_data=diagnoses::where('appoinment_id','=',$id)->get();
        $prescriptions_data=prescriptions::where('appoinment_id','=',$id)->get();
        return view('doctor.invoice-view',["app_data"=>$app_data,"patient_data"=>$patient_data,"doctor_data"=>$doctor_data,"diagnoses_data"=>$diagnoses_data,"prescriptions_data"=>$prescriptions_data]);
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
