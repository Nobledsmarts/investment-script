@include('user.layouts.header')
        <div id="main-wrapper">
            @include('user.layouts.navigation')
            @include('user.layouts.sidebar')
            <div class="content-wrapper">
                <div class="container-full">
                    <div class="content-header">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <h4 class="page-title">Withdrawals</h4>
                                <div class="d-inline-block align-items-center">
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                            <li class="breadcrumb-item" aria-current="page">User</li>
                                            <li class="breadcrumb-item active" aria-current="page">Withdrawals</li>
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
                                        <h3 class="box-title">Withdrawal History</h3>
                                        <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                    </div>
                                <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="table-responsive">
                                        <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                            <thead>
                                                                        <tr>
                                                                            <th>transaction Hash</th>
                                                                            <th>amount ($)</th>
                                                                            <th>status</th>
                                                                            <th>Requested from</th>
                                                                            <th>currency</th>
                                                                            <th>user wallet address</th>
                                                                            <th>user wallet Memo</th>
                                                                            <th>date</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($pending_withdrawals as $pending_withdrawal)
                                                                        <tr>
                                                                            <td>
                                                                                {{ $pending_withdrawal['transaction_hash'] }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $pending_withdrawal['amount'] }}
                                                                            </td>
                                                                            <td>
                                                                                <?php 
                                                                                    $status = $pending_withdrawal['status'] == 'accepted' ? 'success' : ( $pending_withdrawal['status'] == 'pending' ? 'primary' : 'danger');
                                                                                ?>
                                                                                <span class="badge badge-pill py-1 px-2 badge-{{ $status }}"> {{ $pending_withdrawal['status'] }} </span>
                                                                            </td>
                                                                            <td>
                                                                                {{ join(' ', explode('_', $pending_withdrawal->type)) }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $pending_withdrawal->user_wallet->admin_wallet->currency }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $pending_withdrawal->user_wallet->currency_address }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $pending_withdrawal->user_wallet->memo_token }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $pending_withdrawal['created_at'] }}
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
  @include('user.layouts.footer')
        @include('user.layouts.general-scripts')
       
    </body>
</html>
