<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $departments = Department::all();
        $doctors = Doctor::all();
        return view('appoinment.create',compact('departments','doctors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = $request->date;
        $appointment_no = $request->appointment_no;
        $doctor_id = $request->doctor;
        $fee = $request->fee;
        $patient_phone = $request->patient_phone;
        $patient_name = $request->patient_name;
        $paid_amount = $request->paid_amount;

        $appointment = new Appointment();
        $appointment->doctor_id =$doctor_id;
        $appointment->appointment_no =$appointment_no;
        $appointment->appointment_date =$date;
        $appointment->patient_name =  $patient_name;
        $appointment->patient_phone=$patient_phone;
        $appointment->total_fee =$fee;
        $appointment->paid_amount =$paid_amount;
        $appointment->save();
        return redirect()->route('appointment.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
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
        $appointment = Appointment::find($id);
        if(is_null($appointment)){
            return redirect()->route('appoint.home');
        }

        $appointment->delete();
        return redirect()->route('appointment.home');
    }
}
