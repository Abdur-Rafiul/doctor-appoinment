@extends('layouts.app')

@section('content')

<div id="wrapper">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
              <div class="card mt-5">
                  <div class="card-header text-white" style="background: #16263d">
                    <h2>New Appointment</h2>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="{{route('appointment.store')}}">
                      @csrf
                      <div class="form-group">
                        <label for="date">Name</label>
                        <input type="date" class="date form-control" name="date" id="date" required/>
                      </div>

                      <div class="form-group">
                        <label for="appointment_no">Appointment No</label>
                        <input type="text" class="appointment_no form-control" name="appointment_no" id="appointment_no" required/>
                      </div>

                      <div class="form-group">
                        <label for="name">Select Department</label>
                        <select name="department" class="form-control department">
                            <option value="">Please Select Department *</option>
                             @foreach ($departments as $department)

                             <option value="{{$department->id}}">{{$department->name}}</option>


                             @endforeach

                          </select>
                      </div>

                      <div class="form-group">
                        <label for="name">Select Doctor</label>
                        <select name="doctor" class="doctor form-control">

                            <option value="">Please Select Doctor *</option>


                          </select>
                      </div>

                      <div class="form-group">
                        <label for="fee">Fee</label>
                        <input type="number" readonly class="form-control fee" name="fee" id="fee" required/>

                      </div>


                      <h5 class="mt-3">Patient Information</h5>
                      <div class="form-group">
                        <label for="patient-name">Name</label>
                        <input type="text" class="patient-name form-control" name="patient_name" id="patient-name" required/>
                      </div>

                      <div class="form-group">
                        <label for="patient-phone">Phone</label>
                        <input type="text" class="patient-phone form-control" name="patient_phone" id="patient-phone" required/>
                      </div>

                      <h5 class="mt-3">Payment</h5>

                      <div class="form-group">
                        <label for="total-amount">Total Amount</label>
                        <input type="number" class="total-amount form-control" name="total_amount" id="total-amount" required/>
                      </div>

                      <div class="form-group">
                        <label for="paid-amount">Paid Amount</label>
                        <input type="number" class="paid-amount form-control" name="paid_amount" id="paid-amount" required/>
                      </div>


                      <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
