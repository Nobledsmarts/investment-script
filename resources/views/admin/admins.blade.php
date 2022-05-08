@include('admin.layouts.header')
        <div id="main-wrapper">
            @include('admin.layouts.navigation')
            @include('admin.layouts.sidebar')
            <div class="content-wrapper">
                <div class="container-full">
                    <div class="content-header">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <h4 class="page-title">Site Admins</h4>
                                <div class="d-inline-block align-items-center">
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                            <li class="breadcrumb-item" aria-current="page">Admin</li>
                                            <li class="breadcrumb-item active" aria-current="page">Site Admins</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Main content -->
                    <section class="content">			
                        <div class="row">
                           
                            <div class="col-12">
                                 @include('admin.layouts.errors')
                                <div class="box">
                                <div class="box-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                        {{-- <button class="btn btn-rounded btn-primary add-plan">Add Member</button> --}}
                                    </div>
                                    <div class="table-responsive m-t-10">
                                        <table id="record-table" class="display record-table record-export nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>username</th>
                                                    <th>is admin</th>
                                                    <th>email</th>
                                                    <th>Referred By</th>
                                                    <th>firstname</th>
                                                    <th>middlename</th>
                                                    <th>lastname</th>
                                                    <th>invested</th>
                                                    <th>current invested</th>
                                                    <th>deposit balance</th>
                                                    <th>referral bonus</th>
                                                    <th>total withdrawn</th>
                                                    <th>Reg Date</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($admins as $site_user)
                                                    <tr class="background_white">
                                                        <td>
                                                            <h5>{{ $site_user['name'] }}</h5>
                                                        </td>
                                                        <td>
                                                            <h5>{{ $site_user['is_admin'] ? 'True' : 'False'}}</h5>
                                                        </td>
                                                       
                                                        <td>
                                                            <h5>{{ $site_user['email'] }}</h5>
                                                        </td>
                                                        
                                                         <td>
                                                            <h5>{{ $site_user->referrer }}</h5>
                                                        </td>
                                                        <td>
                                                            <h5>{{ $site_user['firstname'] }}</h5>
                                                        </td>
                                                        <td>
                                                            <h5>{{ $site_user['middlename'] }}</h5>
                                                        </td>
                                                        <td>
                                                            <h5>{{ $site_user['lastname'] }}</h5>
                                                        </td>
                                                        <td>
                                                            <h5>{{ $site_user['invested'] ? 'True' : 'False'}}</h5>
                                                        </td>
                                                        <td>
                                                            ${{ number_format($site_user['currently_invested'], 2) }}
                                                        </td>
                                                        <td>
                                                            ${{ number_format($site_user['deposit_balance'], 2) }}
                                                        </td>
                                                        <td>
                                                            ${{ number_format($site_user['referral_bonus'], 2) }}
                                                        </td>
                                                        <td>
                                                            ${{ number_format($site_user['total_withdrawn'], 2) }}
                                                        </td>
                                                        <td>
                                                            {{ $site_user['created_at'] }}
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="dropdown">
                                                                <button class="btn btn-outline-light" type="button" data-bs-toggle="dropdown">
                                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <form action="" method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="id" value="{{ $site_user['id'] }}">
                                                                        <input type="hidden" name="action" value="view">
                                                                        <input type="hidden" name="view" value="members">
                                                                        <button type="submit" data-action="delete" data-id="{{ $site_user['id'] }}" class="dropdown-item" href="#">View</button>
                                                                    </form>
                                                                    <form action="" method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="id" value="{{ $site_user['id'] }}">
                                                                        <input type="hidden" name="action" value="verify">
                                                                        <input type="hidden" name="view" value="members">
                                                                        <button type="submit" data-action="delete" data-id="{{ $site_user['id'] }}" class="dropdown-item" href="#">Verify</button>
                                                                    </form>
                                                                    <form action="" method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="id" value="{{ $site_user['id'] }}">
                                                                        <input type="hidden" name="action" value="suspend">
                                                                        <input type="hidden" name="view" value="members">

                                                                        <button type="submit" data-action="delete" data-id="{{ $site_user['id'] }}" class="dropdown-item" href="#">Suspend</button>
                                                                    </form>
                                                                    <form action="" method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="id" value="{{ $site_user['id'] }}">
                                                                        <input type="hidden" name="action" value="{{ $site_user['is_admin'] ? 'remove' : 'make'}}Admin">
                                                                        <input type="hidden" name="view" value="members">
                                                                        <button type="submit" data-action="delete" data-id="{{ $site_user['id'] }}" class="dropdown-item" href="#">{{ $site_user['is_admin'] ? 'Remove' : 'Make'}} Admin</button>
                                                                    </form>
                                                                    <form action="" method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="id" value="{{ $site_user['id'] }}">
                                                                        <input type="hidden" name="action" value="{{ $site_user['permission'] == '2' ? 'remove' : 'make'}}Moderator">
                                                                        <input type="hidden" name="view" value="members">
                                                                        <button type="submit" data-action="delete" data-id="{{ $site_user['id'] }}" class="dropdown-item" href="#">{{ $site_user['permission'] == '2' ? 'Remove' : 'Make'}} Moderator</button>
                                                                    </form>
                                                                </div>
                                                            </div>
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

		            </section>
		<!-- /.content -->
	            </div>
        </div>
  @include('admin.layouts.footer')
        @include('admin.layouts.general-scripts')
        <script src="{{  asset('assets/js/fn.js') }}"></script>
        <script src="{{  asset('assets/js/main.js') }}"></script>
        <script src="{{  asset('assets/js/admin.pending-deposits.js') }}"></script>
       
    </body>
</html>
