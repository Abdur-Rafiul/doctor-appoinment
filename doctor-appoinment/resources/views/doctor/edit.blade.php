@extends('commons.app')

@section('content')
<div id="wrapper">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <div class="card mt-5">
                  <div class="card-header text-white" style="background: #16263d">
                    <h2>Edit Doctor - {{ $doctor->name }}</h2>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="{{ route('doctor.update', $doctor->id) }}">
                      @csrf
                      @method('put')

                      <div class="form-group">
                        <label for="name">Name (*)</label>
                        <input type="text" value="{{$doctor->name}}" class="form-control" name="name" id="name" required/>
                      </div>

                      <div class="form-group">
                        <label for="phone">Phone (*)</label>
                        <input type="text" value="{{$doctor->phone}}" class="form-control" name="phone" id="phone" required/>
                      </div>

                      <div class="form-group">
                        <label for="fee">Fee (*)</label>
                        <input type="text" value="{{$doctor->fee}}" class="form-control" name="fee" id="fee" required/>
                      </div>

                      <div class="form-group">
                        <label for="fee">Department (*)</label>
                        <select name="department" class="form-control">
                          <option value="{{$doctor->department->id}}">{{$doctor->department->name}}</option>
                           @foreach ($departments as $department)

                           <option value="{{$department->id}}">{{$department->name}}</option>


                           @endforeach
                        </select>
                      </div>



                      <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                          <option value="Available" {{ $doctor->status === "Available" ? "selected" : "" }}>Available</option>
                          <option value="Not Available" {{ $doctor->status === "Not Available" ? "selected" : "" }}>Not Available</option>
                        </select>
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
