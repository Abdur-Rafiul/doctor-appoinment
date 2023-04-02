<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Department;
use App\Models\Appointment;

class HomeController extends Controller
{

    public function Home(Request $req)
    {

        $appointments = Appointment::orderBy('id', 'desc')->simplePaginate(10);
         return view('appoinment.home',compact('appointments'));

    }

    public function department(Request $req)
    {

        $department_id = $req->input('department_id');
        $doctor = Doctor::where('department_id', $department_id)->get();


        return $doctor;

    }

    public function doctor(Request $req)
    {

        $doctor_id = $req->input('doctor_id');
        $doctor = Doctor::where('id', $doctor_id)->get();
        return $doctor;


    }



}
