@include('user.layouts.header')
        <div id="main-wrapper">
            @include('user.layouts.navigation')
            @include('user.layouts.sidebar')
            <div class="content-wrapper">
                <div class="container-full">
                    <div class="content-header">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <h4 class="page-title">Quick Withdrawals</h4>
                                <div class="d-inline-block align-items-center">
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                            <li class="breadcrumb-item" aria-current="page">Mod</li>
                                            <li class="breadcrumb-item active" aria-current="page">Quick Withdrawals</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Main content -->
                    <section class="content">			
                       <div class="row">
                        <div class="col-2"></div>
                        <div class="col-12 col-md-8">
                            @include('user.layouts.errors')
                            <div class="box">
                                <div class="box-body">
                                    <form class="form p-t-20 p-5" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="username">User Name</label>
                                            <div class="input-group">
                                                <input type="text" name="name" class="form-control" id="username" placeholder="Username">
                                                <div class="input-group-addon form-addon-icon"><i class="ti-user"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <div class="input-group">
                                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                                                <div class="input-group-addon form-addon-icon"><i class="ti-email"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="amount">Amount</label>
                                            <div class="input-group">
                                                <input type="number" name="amount" class="form-control" id="amount" placeholder="Amount">
                                                <div class="input-group-addon form-addon-icon"><i class="ti-user"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="wallet_address">Wallet Address</label>
                                            <div class="input-group">
                                                <input type="text" name="wallet_address" class="form-control" id="wallet_address" placeholder="Enter wallet address">
                                                <div class="input-group-addon form-addon-icon"><i class="ti-lock"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="batch">Transaction Batch</label>
                                            <div class="input-group">
                                                <input type="text"  name="transaction_batch" class="form-control" id="batch" placeholder="Enter Transaction Batch">
                                                <div class="input-group-addon form-addon-icon"><i class="ti-lock"></i></div>
                                            </div>
                                        </div>
                                        <div class="text-left">
                                            <button type="submit" class="btn btn-primary ww-100 btn-block waves-effect waves-light m-r-10">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
		            </section>
		<!-- /.content -->
	            </div>
        </div>
  @include('user.layouts.footer')
        @include('user.layouts.general-scripts')
        <script src="{{  asset('assets/js/fn.js') }}"></script>
        <script src="{{  asset('assets/js/main.js') }}"></script>
        <script src="{{  asset('assets/js/user.pending-deposits.js') }}"></script>
       
    </body>
</html>
