<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doc_fav_medicine;
use App\Models\medicine;
use App\Models\division;
use session;

class doc_fav_medicines_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //////////////////////////////admin panel/////////////////////////////////////////////

    public function adminmedicinemanage()
    {
        $medicine=medicine::all();
        return view('admin.medicine',["medicine"=>$medicine]);
    }
    /////////////////////////////doctor Panel////////////////////////////////////////////////
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=medicine::all();
        $fetch=doc_fav_medicine::where("doctor_id","=",Session('doctor_id'))->get();
        return view('doctor.my-medicine',["medicine_arr"=>$data,"medi_arr"=>$fetch]);
    }

    /***
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function addlistmedicine(Request $request)
    {
        $data=$request->validate([
            'medicine_name'=>'required',
            
        ]);
        $data=new doc_fav_medicine;
        $data->medicine_name=$request->medicine_name;
        $data->doctor_id=session('doctor_id');
        $data->save();
        return redirect('/doctor-my-medicine')->with('success','Medicine Add Success');
    }

    public function addmedicine(Request $request)
    {
        $data=$request->validate([
            'medicine_name1'=>'required',
            
        ]);
        $data=new doc_fav_medicine;
        $data->medicine_name=$request->medicine_name1;
        $data->doctor_id=session('doctor_id');
        $data->save();
        return redirect('/doctor-my-medicine')->with('succes','Medicine Add Success');
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
        $data=doc_fav_medicine::find($id);
        $data->delete();
        return redirect('/doctor-my-medicine')->with("suc"," deleted successfully");
        
    }

    ////////////////////////////////////company panel///////////////////////////////////////////////////
    public function companymedicinecreate()
    {
        $medicine=medicine::where('company_id','=',Session('company_id'))->get();
       return view('company.medicine-manager',["medicine"=>$medicine]);
    }

   
    public function companyaddmedicine(Request $request)
    {
        $data=$request->validate([
            'medicine_name'=>'required',
            
        ]);
        $data=new medicine;
        $data->medicine_name=$request->medicine_name;
        $data->company_id=session('company_id');
        $data->save();
        return redirect('/company-medicine-manager')->with('success','Medicine Add Success');
    }

    public function companymedicinedelete($id)
    {
        $data=medicine::find($id);
        $data->delete();
        return redirect('/company-medicine-manager')->with("suc"," deleted successfully");
    }

    public function companydivisioncreate()
    {
        $division=division::where('company_id','=',Session('company_id'))->get();
        return view('company.divisions-manager',["division"=>$division]);
    }


    public function companyadddivision(Request $request)
    {
        $data=$request->validate([
            'division_name'=>'required',
            
        ]);
        $data=new division;
        $data->division_name=$request->division_name;
        $data->company_id=session('company_id');
        $data->save();
        return redirect('/company-divisions-manager')->with('succes','Division Add Success');
    }

    public function companydivisiondelete($id)
    {
        $data=division::find($id);
        $data->delete();
        return redirect('/company-divisions-manager')->with("succ"," deleted successfully");
    }

  //////////////////////////////////////////manager panel///////////////////////////////////////////
  
  public function managermedicinecreate()
    {
        $medicine=medicine::where('created_by','=',Session('manager_id'))->get();
       return view('manager.medicine-manager',["medicine"=>$medicine]);
    }

   
    public function manageraddmedicine(Request $request)
    {
        $data=$request->validate([
            'medicine_name'=>'required',
            
        ]);
        $data=new medicine;
        $data->medicine_name=$request->medicine_name;
        $data->created_by=Session('manager_id');
        $data->save();
        return redirect('/manager-medicine-manager')->with('success','Medicine Add Success');
    }

    public function managermedicinedelete($id)
    {
        $data=medicine::find($id);
        $data->delete();
        return redirect('/manager-medicine-manager')->with("suc"," deleted successfully");
    }

    
}
