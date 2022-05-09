@include('admin.layouts.header')
        <div id="main-wrapper">
            @include('admin.layouts.navigation')
            @include('admin.layouts.sidebar')
            <div class="content-wrapper">
                <div class="container-full">
                    <div class="content-header">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <h4 class="page-title">Confirm CI Credit</h4>
                                <div class="d-inline-block align-items-center">
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                            <li class="breadcrumb-item" aria-current="page">Admin</li>
                                            <li class="breadcrumb-item active" aria-current="page">Confirm CI Credit</li>
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
                                        <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                        <div class="table-responsive m-t-10">
                                            <table id="record-table" class="display record-table record-export nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Credited By</th>
                                                        <th>To User</th>
                                                        <th>Amount</th>
                                                        <th>Status</th>
                                                        <th>Date</th>
                                                        <th>action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($funds as $fund)
                                                    <tr class="background_white">
                                                        <td>
                                                            {{ $fund->user->name }}
                                                        </td>
                                                        <td>
                                                            {{ $fund->receiver->name }}
                                                        </td>
                                                        <td>
                                                            ${{ $fund['amount'] }}
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-pill badge-light text-dark py-1 py-2">pending</span>
                                                        </td>
                                                        <td>
                                                            {{ $fund['created_at'] }}
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="dropdown">
                                                                <button class="btn btn-outline-light" type="button" data-bs-toggle="dropdown">
                                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <form action="" method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="id" value="{{ $fund['id'] }}">
                                                                        <input type="hidden" name="action" value="approve">
                                                                        <button type="submit" data-action="delete" data-id="{{ $fund['id'] }}" class="dropdown-item" href="#">Approve</button>
                                                                    </form>
                                                                    <form action="" method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="id" value="{{ $fund['id'] }}">
                                                                        <input type="hidden" name="action" value="deny">
                                                                        <button type="submit" data-action="delete" data-id="{{ $fund['id'] }}" class="dropdown-item" href="#">Deny</button>
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
