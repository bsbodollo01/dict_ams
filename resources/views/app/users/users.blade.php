



@extends(
    'layout.app-main', 
    [
        'accesslevelid' => $LoggedUserInfo['accesslevel_id'], // para sa sidebar
        'username'      => $LoggedUserInfo['username']        // para sa topbar
    ]
)

@section('title', 'AMS | users')

@section('dependencies')

    {{-- users css --}}
    <link rel="stylesheet" href="{{ asset('css/components/global/pr-and-jo/pr-and-jo.css') }}">

    {{-- datatable css --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    
@stop

@section('content')
    <div class="d-block py-5">
        <div class="container-xxl py-2 rounded-2 shadow-lg">
            <table id="users__user-table" class="table table-striped w-100">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Name</th>
                        <th class="text-center" scope="col">Designation</th>
                        <th class="text-center" scope="col">Accesslevel</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody style="max-height: 400px !important; overflow-y: auto !important;">
                    @foreach(App\Models\UserVerificationDetails::getAllUsers() as $user)
                        <tr>
                            <td data-order="{{ $user['verificationstatus_id'] }}" style="vertical-align: middle !important;">{{ $user['lastname'] .', ' . $user['firstname'] . ' ' .$user['middleinitial'] }}</td>
                            <td style="vertical-align: middle !important;">{{ App\Models\Designation::getDesignationById($user['designation_id']) }}</td>
                            <td style="vertical-align: middle !important;">{{ App\Models\Accesslevel::getAccesslevelById($user['accesslevel_id']) }}</td>
                            <td class="text-center">
                                
                                <div class="dropdown">
                                    <button id="action-user-{{ $user['user_id'] }}" class="btn btn-sm 
                                        @if(strcmp($user['verificationstatus_id'], '1') === 0) 
                                            btn-danger 
                                        @else 
                                            btn-success 
                                        @endif dropdown-toggle rounded-0" 
                                        
                                        type="button"
                                        data-bs-toggle="dropdown" 
                                        aria-expanded="false">
                                        action
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="action-user-{{ $user['user_id'] }}">
                                        @switch($user['verificationstatus_id'])
                                            @case(1)
                                                <li><a class="dropdown-item" href="#" onclick="javascript:">accept</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="javascript:">decline</a></li>
                                                @break
                                            @default
                                                <li><a class="dropdown-item" href="#" onclick="javascript:">delete</a></li>
                                                @break
                                        @endswitch
                                    </ul>
                                </div>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    {{-- datatable js --}}
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(() => {
            $('#users__user-table').DataTable();
        });
    </script>
@stop








