
<div class="container-fluid m-0 p-0">


<nav style="background: #0d6efd" class="navbar navbar-expand-lg">

    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand " href="{{route('appointment.home')}}"><img style="width: 130px" class="" src="/photo/logo.png" alt=""></a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="{{route('appointment.home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('doctor.index')}}">Doctor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('appointment.create')}}" tabindex="-1" aria-disabled="false">Appoinment</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
</div>
