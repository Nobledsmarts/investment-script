@include('user.layouts.header')
        <div id="main-wrapper">
            @include('user.layouts.navigation')
            @include('user.layouts.sidebar')
            <div class="page-wrapper">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-light">Inactive Deposits</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                            <li class="breadcrumb-item active">Inactive Deposits</li>
                        </ol>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            @include('user.layouts.errors')
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                    <div class="table-responsive m-t-10">
                                        <table id="record-table" class="display record-table record-export nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Hash</th>
                                                    <th>Amount USD</th>
                                                    <th>Plan</th>
                                                    <th>Wallet Used</th>
                                                    <th>Remaining Duration (days)</th>
                                                    <th>Play</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($deposits as $deposit)
                                                <tr class='deposit-row'>
                                                    <td>{{ $deposit['created_at'] }}</td>
                                                    <td class="success">{{ $deposit['transaction_hash'] }}</td>
                                                    <td><i class="cc {{ strtoupper($deposit->user_wallet->admin_wallet->currency_symbol) }}"></i> {{ number_format($deposit['amount'] , 2) }}</td>
                                                    <td>{{ $deposit->plan->name }}</td>
                                                    <td>{{ strtoupper($deposit->user_wallet->admin_wallet->currency_symbol) }}</td>
                                                    <td>{{ $deposit['remaining_duration'] }}</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-outline-dark" type="button" data-toggle="dropdown">
                                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <form action="" method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $deposit['id'] }}">
                                                                    <input type="hidden" name="action" value="play">
                                                                    <button type="submit" data-action="delete" data-id="{{ $deposit['id'] }}" class="dropdown-item" href="#">Play</button>
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
