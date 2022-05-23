@extends("layout.app-main")

@section("title", "AMS | dashboard")

@section("dependencies")

    {{-- DASHBOARD css --}}
    <link rel="stylesheet" href="{{ asset("css/dashboard/dashboard.css") }}">

@stop

@section("content")
    <div class="d-block w-100 h-100">
        <!-- dahboard main content -->
        <div class="container-fluid">
            <!-- label -->
            <span class="dashboard__dashboard-header-label d-block px-0 py-3 text-muted" role="text">{{ __("Dashboard") }}</span>
            
            <div class="row row-cols-2 row-cols-sm-0 g-3">
                
                {{-- TODO: Implement!! --}}
                
                @switch($id = Auth::user()->accesslevel_id)
                    @case(1)
                        @break
                    @case(4)
                    @case(5)
                    @case(13)   {{-- =============== REQUISITIONER ========= --}}
                        {{-- 
                            NOTE: tanawa sa accesslevel table unsay id
                                 4 := PROVINCIAL OFFICER
                                 5 := FOCAL
                                13 := STAFF
                        --}}

                        @if($id != 4)
                            <div class="col col-sm-auto col-md-3">
                                {{-- messages --}}
                                <div class="dashboard__dashboard-tile dashboard__tile-blue d-block position-relative shadow-lg">
                                    <div class="d-block position-absolute w-100 h-100" style="inset: 0 !important;">
                                        <div class="d-flex flex-column-reverse flex-lg-column flex-column align-items-center align-items-lg-start justify-content-center px-2 px-lg-3 w-100 h-100">
                                            <span class="dashboard__dashboard-tile-title d-block w-100 text-center text-lg-start" role="text">{{ __("MESSAGES") }}</span>
                                            <div class="d-flex flex-row flex-nowrap align-items-center justify-content-center justify-content-lg-between w-100">
                                                <span class="dashboard__dashboard-tile-value d-block w-100 text-truncate text-center text-lg-start" role="text">
                                                    0
                                                </span>
                                                <i class="dashboard__tile-icon text-muted opacity-25 fa-solid fa-users"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="col col-sm-auto col-md-3">
                            {{-- messages --}}
                            <div class="dashboard__dashboard-tile dashboard__tile-blue d-block position-relative shadow-lg">
                                <div class="d-block position-absolute w-100 h-100" style="inset: 0 !important;">
                                    <div class="d-flex flex-column-reverse flex-lg-column flex-column align-items-center align-items-lg-start justify-content-center px-2 px-lg-3 w-100 h-100">
                                        <span class="dashboard__dashboard-tile-title d-block w-100 text-center text-lg-start" role="text">{{ __("MESSAGES") }}</span>
                                        <div class="d-flex flex-row flex-nowrap align-items-center justify-content-center justify-content-lg-between w-100">
                                            <span class="dashboard__dashboard-tile-value d-block w-100 text-truncate text-center text-lg-start" role="text">
                                                0
                                            </span>
                                            <i class="dashboard__tile-icon text-muted opacity-25 fa-solid fa-users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-sm-auto col-md-3">
                            {{-- purchase request list --}}
                            <div class="dashboard__dashboard-tile dashboard__tile-pink d-block position-relative shadow-lg">
                                <div class="d-block position-absolute w-100 h-100" style="inset: 0 !important;">
                                    <div class="d-flex flex-column-reverse flex-lg-column flex-column align-items-center align-items-lg-start justify-content-center px-2 px-lg-3 w-100 h-100">
                                        <span class="dashboard__dashboard-tile-title d-block w-100 text-center text-lg-start opacity-100" role="text">{{ __("PR LIST") }}</span>
                                        <div class="d-flex flex-row flex-nowrap align-items-center justify-content-center justify-content-lg-between w-100">
                                            <span class="dashboard__dashboard-tile-value d-block w-100 text-truncate text-center text-lg-start opacity-100" role="text">
                                                {{ App\Models\PrForm::countRows() }}
                                            </span>
                                            <i class="dashboard__tile-icon text-muted opacity-25 fa-solid fa-rectangle-list"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-sm-auto col-md-3">
                            {{-- Purchase items  --}}
                            <div class="dashboard__dashboard-tile dashboard__tile-green d-block position-relative shadow-lg bg-light">
                                <div class="d-block position-absolute w-100 h-100" style="inset: 0 !important;">
                                    <div class="d-flex flex-column-reverse flex-lg-column flex-column align-items-center align-items-lg-start justify-content-center px-2 px-lg-3 w-100 h-100">
                                        <span class="dashboard__dashboard-tile-title d-block w-100 text-center text-lg-start" role="text">{{ __("ITEMS LIST") }}</span>
                                        <div class="d-flex flex-row flex-nowrap align-items-center justify-content-center justify-content-lg-between w-100">
                                            <span class="dashboard__dashboard-tile-value d-block w-100 text-truncate text-center text-lg-start" role="text">
                                                {{ App\Models\ItemList::countRows() }}
                                            </span>
                                            <i class="dashboard__tile-icon text-muted opacity-25 fa-solid fa-clipboard"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @break
                        @case(8)   {{-- ================= BAC Chairman ========= --}}
                        {{-- 
                            NOTE: tanawa sa accesslevel table unsay id
                                 8 := BAC Chairman
                        --}}
                        @if($id != 8)
                        <div class="col col-sm-auto col-md-3">
                                {{-- messages --}}
                                <div class="dashboard__dashboard-tile dashboard__tile-blue d-block position-relative shadow-lg">
                                    <div class="d-block position-absolute w-100 h-100" style="inset: 0 !important;">
                                        <div class="d-flex flex-column-reverse flex-lg-column flex-column align-items-center align-items-lg-start justify-content-center px-2 px-lg-3 w-100 h-100">
                                            <span class="dashboard__dashboard-tile-title d-block w-100 text-center text-lg-start" role="text">{{ __("MESSAGES") }}</span>
                                            <div class="d-flex flex-row flex-nowrap align-items-center justify-content-center justify-content-lg-between w-100">
                                                <span class="dashboard__dashboard-tile-value d-block w-100 text-truncate text-center text-lg-start" role="text">
                                                    0
                                                </span>
                                                <i class="dashboard__tile-icon text-muted opacity-25 fa-solid fa-users"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="col col-sm-auto col-md-3">
                            {{-- messages --}}
                            <div class="dashboard__dashboard-tile dashboard__tile-blue d-block position-relative shadow-lg">
                                <div class="d-block position-absolute w-100 h-100" style="inset: 0 !important;">
                                    <div class="d-flex flex-column-reverse flex-lg-column flex-column align-items-center align-items-lg-start justify-content-center px-2 px-lg-3 w-100 h-100">
                                        <span class="dashboard__dashboard-tile-title d-block w-100 text-center text-lg-start" role="text">{{ __("MESSAGES") }}</span>
                                        <div class="d-flex flex-row flex-nowrap align-items-center justify-content-center justify-content-lg-between w-100">
                                            <span class="dashboard__dashboard-tile-value d-block w-100 text-truncate text-center text-lg-start" role="text">
                                                0
                                            </span>
                                            <i class="dashboard__tile-icon text-muted opacity-25 fa-solid fa-users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @break
                        @case(9)   {{-- ================= Canvasser ========= --}}
                        {{-- 
                            NOTE: tanawa sa accesslevel table unsay id
                                 9 := Canvasser
                        --}}
                        @if($id != 9)
                        <div class="col col-sm-auto col-md-3">
                                {{-- messages --}}
                                <div class="dashboard__dashboard-tile dashboard__tile-blue d-block position-relative shadow-lg">
                                    <div class="d-block position-absolute w-100 h-100" style="inset: 0 !important;">
                                        <div class="d-flex flex-column-reverse flex-lg-column flex-column align-items-center align-items-lg-start justify-content-center px-2 px-lg-3 w-100 h-100">
                                            <span class="dashboard__dashboard-tile-title d-block w-100 text-center text-lg-start" role="text">{{ __("MESSAGES") }}</span>
                                            <div class="d-flex flex-row flex-nowrap align-items-center justify-content-center justify-content-lg-between w-100">
                                                <span class="dashboard__dashboard-tile-value d-block w-100 text-truncate text-center text-lg-start" role="text">
                                                    0
                                                </span>
                                                <i class="dashboard__tile-icon text-muted opacity-25 fa-solid fa-users"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="col col-sm-auto col-md-3">
                            {{-- messages --}}
                            <div class="dashboard__dashboard-tile dashboard__tile-blue d-block position-relative shadow-lg">
                                <div class="d-block position-absolute w-100 h-100" style="inset: 0 !important;">
                                    <div class="d-flex flex-column-reverse flex-lg-column flex-column align-items-center align-items-lg-start justify-content-center px-2 px-lg-3 w-100 h-100">
                                        <span class="dashboard__dashboard-tile-title d-block w-100 text-center text-lg-start" role="text">{{ __("MESSAGES") }}</span>
                                        <div class="d-flex flex-row flex-nowrap align-items-center justify-content-center justify-content-lg-between w-100">
                                            <span class="dashboard__dashboard-tile-value d-block w-100 text-truncate text-center text-lg-start" role="text">
                                                0
                                            </span>
                                            <i class="dashboard__tile-icon text-muted opacity-25 fa-solid fa-users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @break
                    @case(11)   {{-- ================= Budgetofficer ========= --}}
                        {{-- 
                            NOTE: tanawa sa accesslevel table unsay id
                                 11 := BUDGET OFFICER
                        --}}
                        @if($id != 11)
                        <div class="col col-sm-auto col-md-3">
                                {{-- messages --}}
                                <div class="dashboard__dashboard-tile dashboard__tile-blue d-block position-relative shadow-lg">
                                    <div class="d-block position-absolute w-100 h-100" style="inset: 0 !important;">
                                        <div class="d-flex flex-column-reverse flex-lg-column flex-column align-items-center align-items-lg-start justify-content-center px-2 px-lg-3 w-100 h-100">
                                            <span class="dashboard__dashboard-tile-title d-block w-100 text-center text-lg-start" role="text">{{ __("MESSAGES") }}</span>
                                            <div class="d-flex flex-row flex-nowrap align-items-center justify-content-center justify-content-lg-between w-100">
                                                <span class="dashboard__dashboard-tile-value d-block w-100 text-truncate text-center text-lg-start" role="text">
                                                    0
                                                </span>
                                                <i class="dashboard__tile-icon text-muted opacity-25 fa-solid fa-users"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="col col-sm-auto col-md-3">
                            {{-- messages --}}
                            <div class="dashboard__dashboard-tile dashboard__tile-blue d-block position-relative shadow-lg">
                                <div class="d-block position-absolute w-100 h-100" style="inset: 0 !important;">
                                    <div class="d-flex flex-column-reverse flex-lg-column flex-column align-items-center align-items-lg-start justify-content-center px-2 px-lg-3 w-100 h-100">
                                        <span class="dashboard__dashboard-tile-title d-block w-100 text-center text-lg-start" role="text">{{ __("MESSAGES") }}</span>
                                        <div class="d-flex flex-row flex-nowrap align-items-center justify-content-center justify-content-lg-between w-100">
                                            <span class="dashboard__dashboard-tile-value d-block w-100 text-truncate text-center text-lg-start" role="text">
                                                0
                                            </span>
                                            <i class="dashboard__tile-icon text-muted opacity-25 fa-solid fa-users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @break
                    @case(14)   {{-- ================= ADMIN ================= --}}
                        {{-- 
                            NOTE: tanawa sa accesslevel table unsay id
                                14 := ADMIN
                        --}}
                    
                        <div class="col col-sm-auto col-md-3">
                            {{-- users --}}
                            <div class="dashboard__dashboard-tile dashboard__tile-blue d-block position-relative shadow-lg">
                                <div class="d-block position-absolute w-100 h-100" style="inset: 0 !important;">
                                    <div class="d-flex flex-column-reverse flex-lg-column flex-column align-items-center align-items-lg-start justify-content-center px-2 px-lg-3 w-100 h-100">
                                        <span class="dashboard__dashboard-tile-title d-block w-100 text-center text-lg-start" role="text">{{ __("TOTAL NUMBER OF USERS") }}</span>
                                        <div class="d-flex flex-row flex-nowrap align-items-center justify-content-center justify-content-lg-between w-100">
                                            <span class="dashboard__dashboard-tile-value d-block w-100 text-truncate text-center text-lg-start" role="text">
                                                {{ App\Models\UserVerificationDetails::countVerifiedUsers() }}
                                            </span>
                                            <i class="dashboard__tile-icon text-muted opacity-25 fa-solid fa-users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-sm-auto col-md-3">
                            {{-- Purchase items  --}}
                            <div class="dashboard__dashboard-tile dashboard__tile-pink d-block position-relative shadow-lg bg-light">
                                <div class="d-block position-absolute w-100 h-100" style="inset: 0 !important;">
                                    <div class="d-flex flex-column-reverse flex-lg-column flex-column align-items-center align-items-lg-start justify-content-center px-2 px-lg-3 w-100 h-100">
                                        <span class="dashboard__dashboard-tile-title d-block w-100 text-center text-lg-start" role="text">{{ __("TOTAL NUMBER OF ITEMS") }}</span>
                                        <div class="d-flex flex-row flex-nowrap align-items-center justify-content-center justify-content-lg-between w-100">
                                            <span class="dashboard__dashboard-tile-value d-block w-100 text-truncate text-center text-lg-start" role="text">
                                                {{ App\Models\ItemList::countRows() }}
                                            </span>
                                            <i class="dashboard__tile-icon text-muted opacity-25 fa-solid fa-clipboard"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-sm-auto col-md-3">
                            {{-- requisitioners --}}
                            <div class="dashboard__dashboard-tile dashboard__tile-green d-block position-relative shadow-lg bg-light">
                                <div class="d-block position-absolute w-100 h-100" style="inset: 0 !important;">
                                    <div class="d-flex flex-column-reverse flex-lg-column flex-column align-items-center align-items-lg-start justify-content-center px-2 px-lg-3 w-100 h-100">
                                        <span class="dashboard__dashboard-tile-title d-block w-100 text-center text-lg-start" role="text">{{ __("TOTAL NUMBER OF REQUISITIONER") }}</span>
                                        <div class="d-flex flex-row flex-nowrap align-items-center justify-content-center justify-content-lg-between w-100">
                                            <span class="dashboard__dashboard-tile-value d-block w-100 text-truncate text-center text-lg-start" role="text">
                                                {{ App\Models\UserVerificationDetails::countRequisitioner() }}
                                            </span>
                                            <i class="dashboard__tile-icon text-muted opacity-50 fa-solid fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-sm-auto col-md-3">
                            {{-- purchase request --}}
                            <div class="dashboard__dashboard-tile dashboard__tile-light-green d-block position-relative shadow-lg">
                                <div class="d-block position-absolute w-100 h-100" style="inset: 0 !important;">
                                    <div class="d-flex flex-column-reverse flex-lg-column flex-column align-items-center align-items-lg-start justify-content-center px-2 px-lg-3 w-100 h-100">
                                        <span class="dashboard__dashboard-tile-title d-block w-100 text-center text-lg-start opacity-100" role="text">{{ __("TOTAL NUMBER OF PR FORM") }}</span>
                                        <div class="d-flex flex-row flex-nowrap align-items-center justify-content-center justify-content-lg-between w-100">
                                            <span class="dashboard__dashboard-tile-value d-block w-100 text-truncate text-center text-lg-start opacity-100" role="text">
                                                {{ App\Models\PrForm::countRows() }}
                                            </span>
                                            <i class="dashboard__tile-icon text-muted opacity-25 fa-solid fa-rectangle-list"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-sm-auto col-md-3">
                            {{-- job order --}}
                            <div class="dashboard__dashboard-tile dashboard__tile-purple d-block position-relative shadow-lg">
                                <div class="d-block position-absolute w-100 h-100" style="inset: 0 !important;">
                                    <div class="d-flex flex-column-reverse flex-lg-column flex-column align-items-center align-items-lg-start justify-content-center px-2 px-lg-3 w-100 h-100">
                                        <span class="dashboard__dashboard-tile-title d-block w-100 text-center text-lg-start opacity-100" role="text">{{ __("TOTAL NUMBER OF JO FORM") }}</span>
                                        <div class="d-flex flex-row flex-nowrap align-items-center justify-content-center justify-content-lg-between w-100">
                                            <span class="dashboard__dashboard-tile-value d-block w-100 text-truncate text-center text-lg-start opacity-100" role="text">
                                                {{ App\Models\JoForm::countRows() }}
                                            </span>
                                            <i class="dashboard__tile-icon text-muted opacity-25 fa-solid fa-helmet-safety"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @break
                    @default
                        {{-- debug pag walay access level --}}
                        <div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <h1 class="display-3">Invalid Accesslevel := {{ Auth::user()->accesslevel_id }}</h1>
                                <p class="lead">Wala pa na implement gooys!</p>
                                <hr class="my-2">
                                <p>TBD</p>
                                <p class="lead">
                                    <a class="btn btn-primary btn-lg" href="{{ url("/login") }}" role="button">{{ __("Login") }}</a>
                                </p>
                            </div>
                        </div>
                        @break
                @endswitch

            </div>
            
        </div>
    </div>
@stop

@section("javascript")

    {{-- DASHBOARD js --}}
    <script type="text/javascript" src="{{ asset("js/dashboard/dashboard.js") }}"></script>
   
@stop



