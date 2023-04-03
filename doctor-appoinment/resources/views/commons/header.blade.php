<div class="container-fluid m-0 p-0">


    <nav style="background: #0d6efd" class="navbar navbar-expand-lg">

        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand " href="{{ route('appointment.home') }}"><img style="width: 130px" class=""
                    src="/photo/logo.png" alt=""></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page"
                            href="{{ route('appointment.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('doctor.index') }}">Doctor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('appointment.create') }}" tabindex="-1"
                            aria-disabled="false">Appoinment</a>
                    </li>
                </ul>
                <div class="d-flex">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @guest
                                @if (Route::has('login'))
                                    <a href="{{ route('login') }}"
                                        class="text-sm text-white text-gray-700 underline">Login</a>
                                @endif

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="ml-4 text-white text-sm text-gray-700 underline">Register</a>
                                @endif
                            @else
                                <li class="py-0 dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="p-0 dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</div>
