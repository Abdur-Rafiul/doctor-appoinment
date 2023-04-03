@extends('commons.app')

@section('content')


    <div class="row d-flex">
        <div class="col-md-4">
            <div class="card mt-5">
                <div class="card-header text-white" style="background: #16263d">
                  <h2>New Doctor</h2>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{route('doctor.store')}}">
                    @csrf
                    <div class="form-group">
                      <label for="name">Name (*)</label>
                      <input type="text" class="form-control" name="name" id="name" required/>
                    </div>

                    <div class="form-group">
                      <label for="phone">Phone (*)</label>
                      <input type="text" class="form-control" name="phone" id="phone" required/>
                    </div>

                    <div class="form-group">
                      <label for="fee">Fee (*)</label>
                      <input type="number" class="form-control" name="fee" id="fee" required/>
                    </div>

                    <div class="form-group">
                      <label for="fee">Department (*)</label>
                      <select name="department" class="form-control">
                        <option value="">Please Select Department *</option>
                         @foreach ($departments as $department)

                         <option value="{{$department->id}}">{{$department->name}}</option>


                         @endforeach
                      </select>
                    </div>



                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                  </form>
                </div>
              </div>
          </div>

        <div class="col-md-8 p-0">
            <div class="card mt-5">
                <div class="card-header" style="background: #16263d">
                  <h2 class="float-left text-white">Doctor List</h2>

                </div>
                <div class="card-body">
                    <table id="dataTable" class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Fee</th>
                            <th scope="col">Department</th>
                            <th scope="col" style="width: 150px">Action</th>
                          </tr>
                        </thead>
                        <tbody>


                        @foreach ($doctors as $doctor)
                            <tr>
                              <th scope="row">{{ $loop->index+1 }}</th>
                              <td>{{ $doctor->name }}</td>
                              <td>{{ $doctor->phone }}</td>
                              <td>{{ $doctor->fee }}</td>
                              <td>{{ $doctor->department->name }}</td>



                              <td>
                                  <a style="width:60px" class="btn btn-sm btn-outline-success" href="{{ route('doctor.edit', $doctor->id) }}">Edit</a>

                                  <form action="{{ route('doctor.destroy', $doctor->id) }}" method="post" class="form-custom-inline">
                                    @csrf
                                    @method('delete')
                                    <button style="width:60px" class="btn btn-sm btn-outline-danger"  type="submit">Delete</button>
                                  </form>

                              </td>
                            </tr>
                          @endforeach

                        </tbody>
                      </table>

                </div>
              </div>
        </div>
        </div>
    </div>



@endsection

@section('script')

<script>
     $(document).ready(function(){

$('#dataTable').DataTable();

$('.dataTables_length').addClass('bs-select');
});
</script>


@endsection
