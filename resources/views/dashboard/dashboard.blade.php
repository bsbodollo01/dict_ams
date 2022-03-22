@extends('layout.app-main')

@section('title', 'AMS | dashboard')

@section('dependencies')
    <link rel="stylesheet" href="{{ asset('css/dashboard/dashboard.css') }}">
@stop


@section('content')
    <div class="d-block w-100 h-100">
        <!-- label -->
        <span class="d-block text-muted px-2 px-md-5 py-4" role="text" style="font-size: 1.6em;">Dashboard</span>
        <!-- dahboard main content -->
        <div class="container-fluid">
            <div class="row row-cols-2 row-cols-md-0 px-2 px-md-5 py-4">
                <!-- trap user type here! -->
                @if ($access_level_id === 1)
                    <!-- if admin -->
                    <div class="col-6 col-md-3 m-0 p-2 p-md-0">
                        <div class="dashboard-tile tile-blue-variant d-block position-relative my-0 mx-auto mx-lg-0 bg-light shadow-lg">

                        </div>
                    </div>
                    <div class="col-6 col-md-3 m-0 p-2 p-md-0">
                        <div class="dashboard-tile tile-green-variant d-block position-relative my-0 mx-auto mx-lg-0 bg-light shadow-lg">

                        </div>
                    </div>
                    <div class="col-6 col-md-3 m-0 p-2 p-md-0">
                        <div class="dashboard-tile tile-light-blue-variant d-block position-relative my-0 mx-auto mx-lg-0 bg-light shadow-lg">

                        </div>
                    </div>
                    <div class="col-6 col-md-3 m-0 p-2 p-md-0">
                        <div class="dashboard-tile tile-light-green-variant d-block position-relative my-0 mx-auto mx-lg-0 bg-light shadow-lg">

                        </div>
                    </div>
                @elseif ($access_level_id === 2)
                    <!-- if supply officer or others -->
                    <div class="col-md-3 bg-dark">A</div>
                    <div class="col-md-3 bg-primary">B</div>
                    <div class="col-12 col-md-3 bg-warning">C</div>
                @endif
            </div>
            
        </div>
    </div>
@stop

@section('javascript')
    <!-- fontawesome -->
    <script type="text/javascript" src="https://kit.fontawesome.com/0ad786b032.js" crossorigin="anonymous"></script>
@stop