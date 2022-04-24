@include('admin.layouts.header')
        <div id="main-wrapper">
            @include('admin.layouts.navigation')
            @include('admin.layouts.sidebar')
            <div class="page-wrapper">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-light">Dashboard</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>

                <div class="container-fluid">
                    @include('admin.layouts.errors')
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card p-30">
                                <div class="media">
                                    <div class="media-left meida media-middle">
                                        <span><i class="ti-user f-s-40 color-primary"></i></span>
                                    </div>
                                    <div class="media-body text-right">
                                        <h4>{{ $total_users }}</h4>
                                        <p class="m-b-0">Total Member</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-30">
                                <div class="media">
                                    <div class="media-left meida media-middle">
                                        <span><i class="ti-server f-s-40 color-success"></i></span>
                                    </div>
                                    <div class="media-body text-right">
                                        <h4>${{ number_format($currently_invested, 2) }}</h4>
                                        <p class="m-b-0">Currently Invested</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-30">
                                <div class="media">
                                    <div class="media-left meida media-middle">
                                        <span><i class="ti-server f-s-40 color-warning"></i></span>
                                    </div>
                                    <div class="media-body text-right">
                                        <h4>${{ number_format($total_deposited, 2) }}</h4>
                                        <p class="m-b-0">Total Deposited</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-30">
                                <div class="media">
                                    <div class="media-left meida media-middle">
                                        <span><i class="ti-stats-up f-s-40 color-danger"></i></span>
                                    </div>
                                    <div class="media-body text-right">
                                        <h4>{{ $pending_deposits }}</h4>
                                        <p class="m-b-0">Pending Deposit</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-30">
                                <div class="media">
                                    <div class="media-left meida media-middle">
                                        <span><i class="ti-server f-s-40 color-danger"></i></span>
                                    </div>
                                    <div class="media-body text-right">
                                        <h4>${{ number_format($total_withdrawn, 2) }}</h4>
                                        <p class="m-b-0">Total Withdrawn</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-30">
                                <div class="media">
                                    <div class="media-left meida media-middle">
                                        <span><i class="ti-bar-chart f-s-40 color-danger"></i></span>
                                    </div>
                                    <div class="media-body text-right">
                                        <h4>{{ $pending_withdrawals }}</h4>
                                        <p class="m-b-0">Pending Withdrawal</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-30">
                                <div class="media">
                                    <div class="media-left meida media-middle">
                                        <span><i class="ti-briefcase f-s-40 color-info"></i></span>
                                    </div>
                                    <div class="media-body text-right">
                                        <h4>{{ $running_investments }}</h4>
                                        <p class="m-b-0">Running Investments</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card p-30">
                                <div class="media">
                                    <div class="media-left meida media-middle">
                                        <span><i class="ti-bar-chart f-s-40 color-success"></i></span>
                                    </div>
                                    <div class="media-body text-right">
                                        <h4>{{ $total_paid }}</h4>
                                        <p class="m-b-0">Total Paid</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">News Letter</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form p-t-20 p-5" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label class="control-label">Select Users</label>
                                            <select multiple class="form-control" name="receivers[]">
                                                @foreach($users as $user)
                                                    <option data-balance="{{ $user['deposit_balance'] }}" value="{{ $user['email'] }}">{{ $user['name'] }}</option>
                                                @endforeach
                                            </select> 
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Subject</label>
                                            <div class="input-group">
                                                <input type="text" name="subject" class="form-control" id="email" placeholder="Enter subject">
                                                <div class="input-group-addon form-addon-icon"><i class="ti-email"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="amount">Content</label>
                                            <textarea name="message" rows="10" style="width:100%"></textarea>
                                        </div>
                                        <div class="text-left">
                                            <button type="submit" class="btn btn-dark btn-block waves-effect waves-light m-r-10">Submit</button>
                                        </div>
                                    </form>
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
