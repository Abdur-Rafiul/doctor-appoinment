@extends('layouts.app')

@section('content')

<div id="wrapper">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header text-white" style="background: #16263d">
                      <h2 class="float-left">Appointment List</h2>
                      <form class="" action="{{ route('appointment.search') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="search">Appointment No or Appointment Date or Doctor Id No or Patient Name or Patient Phone</label>
                            <input class="form-control me-2" id="search" name="search" type="search" placeholder="" aria-label="Search">
                            <button class="btn btn-danger text-white mt-2" type="submit">Search</button>

                        </div>
                      </form>
                      <h2 class="float-right">
                          <a href="{{ route('appointment.create') }}" class="text-white btn btn-outline-primary">+ New Appointment</a>
                      </h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Appointment Date</th>
                                <th scope="col">Appointment No</th>
                                <th scope="col">Doctor Name</th>
                                <th scope="col">Doctor Phone</th>
                                <th scope="col">Doctor Fee</th>
                                <th scope="col">Patient Name</th>
                                <th scope="col">Patient Phone</th>
                                <th scope="col">Paid Amount</th>
                                <th scope="col" style="width: 150px">Action</th>
                              </tr>
                            </thead>
                            <tbody>

                              @foreach ($appointments as $appointment)
                                <tr>
                                  <th scope="row">{{ $loop->index+1 }}</th>

                                  <td>{{$appointment->appointment_date}}</td>
                                  <td>{{$appointment->appointment_no}}</td>
                                  <td>{{$appointment->doctor->name}}</td>
                                  <td>{{$appointment->doctor->phone}}</td>
                                  <td>{{$appointment->doctor->fee}}</td>
                                  <td>{{$appointment->patient_name}}</td>
                                  <td>{{$appointment->patient_phone}}</td>
                                  <td>{{$appointment->paid_amount}}</td>
                                  <td>

                                      <form action="{{ route('appointment.destroy', $appointment->id) }}" method="post" class="form-custom-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm btn-outline-danger"  type="submit">Delete</button>
                                      </form>

                                  </td>
                                </tr>
                              @endforeach

                            </tbody>
                          </table>
                          <div class="d-flex justify-content-center">
                            {{ $appointments->links() }}
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>



@endsection
