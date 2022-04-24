@include('user.layouts.header')
        <div id="main-wrapper">
            @include('user.layouts.navigation')
            @include('user.layouts.sidebar')
            <div class="page-wrapper">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-light">Deposits</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                            <li class="breadcrumb-item active">Deposits</li>
                        </ol>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div>
                                <ul class="nav nav-pills m-t-30 m-b-30">
                                    <li class=" nav-item"> <a href="#pending" class="nav-link active" data-toggle="tab" aria-expanded="false">Pending</a> </li>
                                    <li class="nav-item"> <a href="#approved" class="nav-link" data-toggle="tab" aria-expanded="false">Approved</a> </li>
                                    <li class="nav-item"> <a href="#denied" class="nav-link" data-toggle="tab" aria-expanded="true">Denied</a> </li>
                                </ul>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content br-n pn">
                                        <div id="pending" class="tab-pane active">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                                            <div class="table-responsive m-t-10">
                                                                <table id="record-table" class="display record-table record-export nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
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
                                                                        @foreach ($pending_deposits as $pending_deposit)
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
                                                                                {{ $pending_deposit->user_wallet->admin_wallet->currency }}
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
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div id="approved" class="tab-pane">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                                            <div class="table-responsive m-t-10">
                                                                <table id="record-table" class="display record-table record-export nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
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
                                                                        @foreach ($approved_deposits as $approved_deposit)
                                                                        <tr>
                                                                            <td>
                                                                                {{ $approved_deposit['transaction_hash'] }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $approved_deposit['amount'] }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $approved_deposit->plan->name }}
                                                                            </td>
                                                                            <?php 
                                                                                    $status = $approved_deposit['status'] == 'accepted' ? 'success' : ( $approved_deposit['status'] == 'pending' ? 'primary' : 'danger');
                                                                                ?>
                                                                            <td>
                                                                                <span class="badge badge-pill py-1 px-2 badge-{{ $status }}"> {{ $approved_deposit['status'] }} </span>
                                                                            </td>
                                                                            <td>
                                                                                {{ $approved_deposit->user_wallet->admin_wallet->currency }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $approved_deposit['created_at'] }}
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
                                        </div>
                                        <div id="denied" class="tab-pane">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                                            <div class="table-responsive m-t-10">
                                                                <table id="record-table" class="display record-table record-export nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
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
                                                                        @foreach ($denied_deposits as $denied_deposit)
                                                                        <tr>
                                                                            <td>
                                                                                {{ $denied_deposit['transaction_hash'] }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $denied_deposit['amount'] }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $denied_deposit->plan->name }}
                                                                            </td>
                                                                            <?php 
                                                                                    $status = $denied_deposit['status'] == 'accepted' ? 'success' : ( $denied_deposit['status'] == 'pending' ? 'primary' : 'danger');
                                                                                ?>
                                                                            <td>
                                                                                <span class="badge badge-pill py-1 px-2 badge-{{ $status }}"> {{ $denied_deposit['status'] }} </span>
                                                                            </td>
                                                                            <td>
                                                                                {{ $denied_deposit->user_wallet->admin_wallet->currency }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $denied_deposit['created_at'] }}
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                @include('user.layouts.footer')
            </div>
        </div>
        @include('user.layouts.general-scripts')
        <script src="{{  asset('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js') }}"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js') }}"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js') }}"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js') }}"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js') }}"></script>
        <script src="{{  asset('assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js') }}"></script>
        <script src="{{  asset('assets/js/custom.min.js') }}"></script>
        <script src="{{  asset('assets/js/fn.js') }}"></script>
        <script src="{{  asset('assets/js/main.js') }}"></script>
        <script src="{{ asset('assets/js/user.records.js') }}"></script>
    </body>
</html>
