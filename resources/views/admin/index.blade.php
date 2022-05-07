@include('admin.layouts.header')
        <div id="main-wrapper">
            @include('admin.layouts.navigation')
            @include('admin.layouts.sidebar')
            <div class="content-wrapper">
                <div class="container-full">
                     <div class="content-header">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <h4 class="page-title">Home</h4>
                                <div class="d-inline-block align-items-center">
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                            <li class="breadcrumb-item" aria-current="page">Admin</li>
                                            <li class="breadcrumb-item active" aria-current="page">Home</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Main content -->
                    <section class="content">			
                        <div class="row">
                        <div class="col-md-3">
                            <div class="box p-30">
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
                            <div class="box p-30">
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
                            <div class="box p-30">
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
                            <div class="box p-30">
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
                            <div class="box p-30">
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
                            <div class="box p-30">
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
                            <div class="box p-30">
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
                            <div class="box p-30">
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
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">News Letter</h4>
                                </div>
                                <div class="box-body">
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
                                            <button type="submit" class="btn btn-primary btn-block waves-effect waves-light ww-100 m-r-10">Submit</button>
                                        </div>
                                    </form>
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
    </body>
</html>
