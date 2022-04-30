@include('user.layouts.header')
        <div id="main-wrapper">
            @include('user.layouts.navigation')
            @include('user.layouts.sidebar')
            <div class="page-wrapper">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-light">Withdrawals</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                            <li class="breadcrumb-item active">Withdrawals</li>
                        </ol>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div>
                                <ul class="nav nav-pills m-t-30 m-b-30">
                                    <li class=" nav-item"> <a href="#pending" class="nav-link text-light active" data-toggle="tab" aria-expanded="false">Pending</a> </li>
                                    <li class="nav-item"> <a href="#approved" class="nav-link text-light" data-toggle="tab" aria-expanded="false">Approved</a> </li>
                                    <li class="nav-item"> <a href="#denied" class="nav-link text-light" data-toggle="tab" aria-expanded="true">Denied</a> </li>
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
                                                                            <th>status</th>
                                                                            <th>Requested from</th>
                                                                            <th>currency</th>
                                                                            <th>user wallet address</th>
                                                                            <th>user wallet Memo</th>
                                                                            <th>date</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($approved_withdrawals as $approved_withdrawal)
                                                                        <tr>
                                                                            <td>
                                                                                {{ $approved_withdrawal['transaction_hash'] }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $approved_withdrawal['amount'] }}
                                                                            </td>
                                                                            <td>
                                                                                <?php 
                                                                                    $status = $approved_withdrawal['status'] == 'accepted' ? 'success' : ( $approved_withdrawal['status'] == 'pending' ? 'primary' : 'danger');
                                                                                ?>
                                                                                <span class="badge badge-pill py-1 px-2 badge-{{ $status }}"> {{ $approved_withdrawal['status'] }} </span>
                                                                            </td>
                                                                            <td>
                                                                                {{ join(' ', explode('_', $approved_withdrawal->type)) }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $approved_withdrawal->user_wallet->admin_wallet->currency }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $approved_withdrawal->user_wallet->currency_address }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $approved_withdrawal->user_wallet->memo_token }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $approved_withdrawal['created_at'] }}
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
                                                                            <th>status</th>
                                                                            <th>Requested from</th>
                                                                            <th>currency</th>
                                                                            <th>user wallet address</th>
                                                                            <th>user wallet Memo</th>
                                                                            <th>date</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($denied_withdrawals as $denied_withdrawal)
                                                                        <tr>
                                                                            <td>
                                                                                {{ $denied_withdrawal['transaction_hash'] }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $denied_withdrawal['amount'] }}
                                                                            </td>
                                                                            <td>
                                                                                <?php 
                                                                                    $status = $denied_withdrawal['status'] == 'accepted' ? 'success' : ( $denied_withdrawal['status'] == 'pending' ? 'primary' : 'danger');
                                                                                ?>
                                                                                <span class="badge badge-pill py-1 px-2 badge-{{ $status }}"> {{ $denied_withdrawal['status'] }} </span>
                                                                            </td>
                                                                            <td>
                                                                                {{ join(' ', explode('_', $denied_withdrawal->type)) }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $denied_withdrawal->user_wallet->admin_wallet->currency }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $denied_withdrawal->user_wallet->currency_address }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $denied_withdrawal->user_wallet->memo_token }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $denied_withdrawal['created_at'] }}
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
                    {{-- <div class="row">
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
                                                    <th>status</th>
                                                    <th>Requested from</th>
                                                    <th>currency</th>
                                                    <th>date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($approved_withdrawals as $approved_withdrawal)
                                                <tr>
                                                    <td>
                                                        {{ $pending_withdrawal['transaction_hash'] }}
                                                    </td>
                                                    <td>
                                                        {{ $pending_withdrawal['amount'] }}
                                                    </td>
                                                    <td>
                                                        <?php 
                                                            $status = $withdrawal['status'] == 'accepted' ? 'success' : ( $withdrawal['status'] == 'pending' ? 'primary' : 'danger');
                                                        ?>
                                                        <span class="badge badge-pill py-1 px-2 badge-{{ $status }}"> {{ $withdrawal['status'] }} </span>
                                                    </td>
                                                    <td>
                                                        {{ join(' ', explode('_', $withdrawal->type)) }}
                                                    </td>
                                                    <td>
                                                        {{ $withdrawal['currency'] }}
                                                    </td>
                                                    <td>
                                                        {{ $withdrawal['date'] }}
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                @include('user.layouts.footer')
            </div>
        </div>
        @include('user.layouts.general-scripts')
        <script src="www.amcharts.com/lib/3/amcharts.js"></script>
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
        <script src="{{  asset('assets/js/admin.faqs.js') }}"></script>
    </body>
</html>
