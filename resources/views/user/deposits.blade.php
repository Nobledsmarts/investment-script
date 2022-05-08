@include('user.layouts.header')
        <div id="main-wrapper">
            @include('user.layouts.navigation')
            @include('user.layouts.sidebar')
            <div class="content-wrapper">
                <div class="container-full">
                    <div class="content-header">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <h4 class="page-title">Deposits</h4>
                                <div class="d-inline-block align-items-center">
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                            <li class="breadcrumb-item" aria-current="page">User</li>
                                            <li class="breadcrumb-item active" aria-current="page">Deposits</li>
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
                                                                            <th>transaction Hash</th>
                                                                            <th>amount ($)</th>
                                                                            <th>plan</th>
                                                                            <th>status</th>
                                                                            <th>currency</th>
                                                                            <th>date</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($all_deposits as $pending_deposit)
                                                                        <tr>
                                                                            <td>
                                                                                {{ $pending_deposit['transaction_hash'] }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $pending_deposit['amount'] }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $pending_deposit->plan->name }}
                                                                            </td>
                                                                            <?php 
                                                                                    $status = $pending_deposit['status'] == 'accepted' ? 'success' : ( $pending_deposit['status'] == 'pending' ? 'primary' : 'danger');
                                                                                ?>
                                                                            <td>
                                                                                <span class="badge badge-pill py-1 px-2 badge-{{ $status }}"> {{ $pending_deposit['status'] }} </span>
                                                                            </td>
                                                                            <td>
                                                                                {{ $pending_deposit->wallet->currency }} 
                                                                            </td>
                                                                            <td>
                                                                                {{ $pending_deposit['created_at'] }}
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
