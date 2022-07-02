<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/site.css')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        })
    </script>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">

            <div class="list-group list-group-flush">

                <a href="#" class="sidebar-heading">
                    <img src="https://cdn-icons-png.flaticon.com/512/7926/7926414.png"
                        width="48px"alt=""> Current Case</a>                 
                <br>
                <a href="{{route("cases.index")}}" class="sidebar-heading">
                    <img src="https://cdn-icons-png.flaticon.com/512/2927/2927067.png"
                        width="48px"alt=""> Case History</a>
                <br>
                <a href="#" class="sidebar-heading">
                    <img src="https://cdn-icons-png.flaticon.com/512/4696/4696488.png"
                        width="48px"alt=""> Simulation</a>

                {{-- <a href="{{ route('case.index') }}" class="list-group-item list-group-item-action bg-light">OMNI</a> --}}
            </div>
        </div>



        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-primary" id="menu-toggle">Menu</button>
            </nav>
            <div class="container-fluid">
                <main class="py-4">
                    @yield('content')
                </main>

                @yield('script')
            </div>
        </div>

    </div>


</body>

</html>
