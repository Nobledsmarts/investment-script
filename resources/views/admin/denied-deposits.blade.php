@include('admin.layouts.header')
        <div id="main-wrapper">
            @include('admin.layouts.navigation')
            @include('admin.layouts.sidebar')
            <div class="content-wrapper">
                <div class="container-full">
                    <div class="content-header">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <h4 class="page-title">Denied Deposits</h4>
                                <div class="d-inline-block align-items-center">
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                            <li class="breadcrumb-item" aria-current="page">Admin</li>
                                            <li class="breadcrumb-item active" aria-current="page">Denied Deposits</li>
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
                                <div class="box">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Deposit History</h3>
                                        <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                    </div>
                                <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="table-responsive">
                                        <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                          <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Type</th>
                                                    <th>Plan</th>
                                                    <th>Wallet</th>
                                                    <th>Amount</th>
                                                    <th>Transaction Hash</th>
                                                    <th>Status</th>
                                                    <th>Date</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($deposits as $deposit)
                                                <tr>
                                                    <td>{{ $deposit->user->name }}</td>
                                                    <td>{{ $deposit->reinvestment ? 'Reinvestment' : 'Deposit' }}</td>
                                                    <td>{{ isset($deposit->plan->name) ? $deposit->plan->name : 'null' }}</td>
                                                    <td>{{ $deposit->wallet->currency }}</td>
                                                    <td>${{ $deposit['amount'] }}</td>
                                                    <td>{{ $deposit['transaction_hash'] }}</td>
                                                    <td>
                                                        <span class="badge badge-dark text-light badge-pill px-2 py-1"> {{ $deposit['status'] }} </span>
                                                    </td>
                                                    <td>{{ $deposit['created_at'] }}</td>
                                                    <td class="text-center">
                                                      <div class="dropdown">
                                                            <button class="btn btn-outline-dark" type="button" data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                
                                                                <form action="" method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $deposit['id'] }}">
                                                                    <input type="hidden" name="action" value="approve">
                                                                    <button type="submit" data-action="delete" data-id="{{ $deposit['id'] }}" class="dropdown-item" href="#">Approve</button>
                                                                </form>
                                                                <form action="" method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $deposit['id'] }}">
                                                                    <input type="hidden" name="action" value="deny">
                                                                    <button type="submit" data-action="delete" data-id="{{ $deposit['id'] }}" class="dropdown-item" href="#">Deny</button>
                                                                </form>
                                                                <form action="" method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $deposit['id'] }}">
                                                                    <input type="hidden" name="action" value="delete">
                                                                    <button type="submit" data-action="delete" data-id="{{ $deposit['id'] }}" class="dropdown-item" href="#">Delete</button>
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
