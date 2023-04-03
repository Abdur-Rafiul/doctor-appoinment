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
        $date = date("Y-m-d");
        $date = (string)$date;

        // dd($date);
        $count = Appointment::where('doctor_id',$doctor_id)->where('appointment_date',$date)->count();
        if($count == 2){

            return $count;
        }else{

            return $doctor;

        }




    }

    public function AppointmentSearch(Request $request){

        $appointments=Appointment::where('appointment_no','LIKE','%'.$request->search."%")
       ->orWhere('appointment_date','LIKE','%'.$request->search.'%')
       ->orWhere('doctor_id','LIKE','%'.$request->search.'%')
       ->orWhere('patient_name','LIKE','%'.$request->search.'%')
       ->orWhere('patient_name','LIKE','%'.$request->search.'%')
       ->orWhere('patient_phone','LIKE','%'.$request->search.'%')
        ->simplePaginate(5);

        return view('appoinment.home',compact('appointments'));

    }


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $appointments = Appointment::orderBy('id', 'desc')->simplePaginate(10);
        return view('appoinment.home',compact('appointments'));
    }


}
