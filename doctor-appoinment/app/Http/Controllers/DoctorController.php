<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Doctor;

class DoctorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
        $doctors = Doctor::all();
        return view('doctor.home',compact('departments','doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $fee = $request->fee;
        $department_id = $request->department;

        $doctor = new Doctor();

        $doctor->department_id = $department_id;
        $doctor->name = $name;
        $doctor->phone = $phone;
        $doctor->fee = $fee;
        $doctor->save();
        return redirect()->route('doctor.index');
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
        $doctor = Doctor::find($id);
        $departments = Department::all();
        if(is_null($doctor)){
            return redirect()->route('doctor.index');
        }
        return view('doctor.edit', compact('doctor','departments'));
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
        $doctor = Doctor::find($id);
        if(is_null($doctor)){
            return redirect()->route('doctor.index');
        }



        $doctor->department_id = $request->department;
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->fee = $request->fee;
        //dd($doctor->name);
        $doctor->save();
        return redirect()->route('doctor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        if(is_null($doctor)){
            return redirect()->route('doctor.index');
        }

        $doctor->delete();
        return redirect()->route('doctor.index');
    }
}
