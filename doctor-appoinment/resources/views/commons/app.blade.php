<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css'>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/datatables-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <title>@yield('title')
    </title>
    <!-- ✅ Load CSS file for jQuery ui  -->
    <link
        href="https://code.jquery.com/ui/1.12.1/themes/ui-lightness/jquery-ui.css"
        rel="stylesheet"
    />

    <!-- ✅ load jQuery ✅ -->
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"
    ></script>

    <!-- ✅ load jquery UI ✅ -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
        integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>
    <style>
        .error{
            color: #FF0000;
        }
    </style>
</head>

<body>




<div class="container-fluid p-0 m-0">
    @include('commons.header')
    <div class="container">
        @yield('content')
    </div>

    @include('commons.footer')

</div>


{{--<script src="{{asset('js/jquery-3.5.1.js')}}"></script>--}}
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/datatables.min.js')}}"></script>
<script src="{{asset('js/datatables-select.min.js')}}"></script>

<script src="{{asset('js/axios.min.js')}}"></script>
<script src="{{asset('js/toastr.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>





@yield('script')


</body>

</html>
