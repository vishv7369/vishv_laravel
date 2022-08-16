<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;
use Hash;

class patient_controller extends Controller
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
        return view('patient.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new patient;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);

        $res=$data->save();
        return redirect('login');
    }

    /*-----patient login-----*/

    public function patientlog(Request $request)
    {
        return view('patient.login');
    }

    public function patientlogin(Request $request)
    {
        $data=patient::where("email","=",$request->email)->first();
        if($data)
        {
            if(Hash::check($request->password, $data->password))
           {
               $status=$data->status;
               if($status=="Unblock")
               {
                   $request->Session()->put('patient_id',$data->id);
                   $request->Session()->put('email',$data->email);
                   return redirect('/index');
               }
               else
               {
                return redirect('/login')->with('fail','Login Failed due to Blocked User');
               }
           }
           else
           {
            return redirect('/login')->with('fail','Login Failed due to Wrong Password');
           }
        }
        else
        {
         return redirect('/login')->with('fail','Login Failed due to Wrong user');
        }
    }

    public function patientlogout()
    {
        Session()->pull('patient_id');
        Session()->pull('email');
        Session()->pull('profile_img');
        return redirect('/login');
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
    public function edit()
    {
        $data=patient::where("id","=",session('patient_id'))->first();
        return view('patient.profile-settings',["fetch"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $patient_id)
    {
        $data=patient::where("id","=",session('patient_id'))->first();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->gender=$request->gender;
        $data->mobileno=$request->mobileno;
        $old_img=$data->profile_img;
        //$request->Session()->put('profile_img',$data->profile_img);
         //img upload
         if($request->hasFile('profile_img'))
         {
             $file=$request->file('profile_img');  // get file
             $file_name=time() . "_profile_img." . $request->file('profile_img')->getClientOriginalExtension();// make file name
             $file->move('upload/patient',$file_name); //file name move upload in public		
             $data->profile_img=$file_name; // file name store in db
             //unlink('upload/doctor/'.$old_img);
         }

         $data->save();
		return redirect('/edit')->with('success','Update Success');
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
