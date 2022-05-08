@include('admin.layouts.header')
        <div id="main-wrapper">
            @include('admin.layouts.navigation')
            @include('admin.layouts.sidebar')
            <div class="content-wrapper">
                <div class="container-full">
                    <div class="content-header">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <h4 class="page-title">Approved Withdrawals</h4>
                                <div class="d-inline-block align-items-center">
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                            <li class="breadcrumb-item" aria-current="page">Admin</li>
                                            <li class="breadcrumb-item active" aria-current="page">Approved Withdrawals</li>
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
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Withdrawal History</h3>
                                        <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                    </div>
                                <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="table-responsive">
                                        <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                             <thead>
                                                <tr>
                                                    <th class="width_table1">user</th>
                                                    <th class="width_table1">Requested From</th>
                                                    <th class="width_table1">wallet</th>
                                                    <th class="width_table1">wallet Address</th>
                                                    <th class="width_table1">memo Token</th>
                                                    <th class="width_table1">amount</th>
                                                    <th class="width_table1">status</th>
                                                    <th class="width_table1">date</th>
                                                    <th class="width_table1">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($withdrawals as $withdrawal)
                                                <tr>
                                                    <td>
                                                        <h5>{{ $withdrawal->user->name }}</h5>
                                                    </td>
                                                    <td>
                                                        <h5>{{ join(' ', explode('_', $withdrawal->type)) }}</h5>
                                                    </td>
                                                    <td>
                                                        <h5>{{ $withdrawal->user_wallet->admin_wallet->currency }}</h5>
                                                    </td>
                                                    <td>
                                                       {{ $withdrawal->user_wallet->currency_address }} 
                                                    </td>
                                                    <td>
                                                        <h5>{{ $withdrawal->user_wallet->has_memo ? $withdrawal->user_wallet->memo_token ?? 'Empty' : 'No memo' }}</h5>
                                                    </td>
                                                    <td>
                                                       ${{ number_format($withdrawal['amount'], 2) }}
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success text-light badge-pill px-2 py-1">{{ $withdrawal['status'] }}</span>
                                                    </td>
                                                    <td>
                                                       {{ $withdrawal['created_at'] }}
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <button class="btn btn-outline-light" type="button" data-bs-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <form action="" method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $withdrawal['id'] }}">
                                                                    <input type="hidden" name="action" value="delete">
                                                                    <button type="submit" data-action="delete" data-id="{{ $withdrawal['id'] }}" class="dropdown-item" href="#">Delete</button>
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
                                <!-- /.box-body -->
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
