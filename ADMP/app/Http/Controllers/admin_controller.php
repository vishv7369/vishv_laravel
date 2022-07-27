<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Hash;
use Session;

class admin_controller extends Controller
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
        //
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

    public function adminlogin(Request $request)
    {
        return view('admin.login');
    }

    public function addminlogin(Request $request)
    {
       $data=_admin::where("email","=",$request->email)->first();
       if($data)
       {
           if(Hash::check($request->password, $data->password))
           {
               $status=$data->status;
               if($status=="Unblock")
               {
                   $request->Session()->put('admin_id',$data->id);
                   $request->Session()->put('email',$data->email);
                   return redirect('/admin');
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

    public function adminlogout()
    {
        Session()->pull('admin_id');
        Session()->pull('email');
        return redirect('/login');
    }

}

