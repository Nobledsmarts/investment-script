@include('admin.layouts.header')
        <div id="main-wrapper">
            @include('admin.layouts.navigation')
            @include('admin.layouts.sidebar')
            <div class="page-wrapper">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-light">Approved Withdrawals</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                            <li class="breadcrumb-item active">Approved Withdrawals</li>
                        </ol>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            @include('admin.layouts.errors')
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                    <div class="table-responsive m-t-10">
                                        <table id="record-table" class="display record-table record-export nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
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
                                                            <button class="btn btn-outline-dark" type="button" data-toggle="dropdown">
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
                            </div>
                        </div>
                    </div>
                    
                </div>
                @include('admin.layouts.footer')
            </div>
        </div>
        @include('admin.layouts.general-scripts')
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
        <script src="{{  asset('assets/js/admin.pending-deposits.js') }}"></script>
    </body>
</html>
