@include('user.layouts.header')
        <div id="main-wrapper">
            @include('user.layouts.navigation')
            @include('user.layouts.sidebar')
            <div class="content-wrapper">
                <div class="container-full">
                    <div class="content-header">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <h4 class="page-title">Deposit</h4>
                                <div class="d-inline-block align-items-center">
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                            <li class="breadcrumb-item" aria-current="page">User</li>
                                            <li class="breadcrumb-item active" aria-current="page">Deposit</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Main content -->
                    <section class="content">			
                        
                        
                        <div class="row">
                            @foreach ($plans as $plan)
                        <div class="col-lg-4 col-md-6">
                            <div class="box box-hover-shadow no-shadow">
                                <div class="box-header with-border" style="background : #1f47a9">
                                    <h4 class="box-title text-capitalize"><strong>{{ $plan['name'] }} Plan</strong> </h4>
                                </div>
                                <div class="box-body">
                                    <!-- <h4 class="box-title">{{ $plan['name'] }} Plan</h4> -->
                                    <div style="text-align: center">
                                    <!-- <i data-feather="at-sign"></i> -->
                                        <h5 style="font-size: 35px; color:rgb(255, 255, 255)" class="mt-3 mb-3">${{ number_format($plan['minimum_amount'], 2) }}</h5>
                                        <p class="h5 plan-details"> Minimum Amount </p>
                                        <div class="divider"></div>
                                        <h5 style="font-size: 35px; color:rgb(255, 255, 255)" class="mt-3 mb-3">${{ number_format($plan['maximum_amount'], 2) }}</h5>
                                        <p class="h5 plan-details"> Maximum Amount </p>
                                        <div class="divider"></div>
                
                                        <h5 style="font-size: 25px; color:rgb(255, 255, 255)" class="mt-3 mb-3">{{ $plan['interest_rate'] }}%</h5>
                                        <p class="h5 plan-details"> Returns Daily For {{ $plan['duration'] }} days </p>
                                        <div class="divider"></div>

                                        <h5 style="font-size: 25px; color:rgb(255, 255, 255)" class="mt-3 mb-3">{{ $plan['referral_bonus'] }}%</h5>
                                        <p class="h5 plan-details"> Referral Bonus </p>
                                        <div class="divider"></div>

                                        <div class="">
                                           
                                            <div class="plan-btn-cont">
                                                <a href="javascript:void(0)" data-return="{{ $plan['interest_rate'] }}" 
                                                data-child_plan_id="{{ $plan['id'] }}" data-plan="{{ $plan['id'] }}" 
                                                data-min="{{ $plan['minimum_amount'] }}" data-max="{{ $plan['maximum_amount'] }}" class="btn btn-danger btn-rounded deposit-btn">Invest</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div>

		            </section>
		<!-- /.content -->
	            </div>
        </div>
         <div class="modal fade" id="deposit-modal">
            <h4 class="modal-title text-dark">Deposit To Plan</h4>
            <div class="modal-body">
                <form class="page-form deposit-form" action="">
                    <div class="form-group icon_form comments_form">
                        <div class="payment_gateway_wrapper ww-100 plan-wrapper">
                            <select required class="select-plan ww-100 form-control bg-light text-dark" name="child_plan_id" id="select-plan">
                                <option data-display="Select Plan">Select Plan</option>
                                @foreach ($plans as $plan)
                                <option data-return="{{ $plan['interest_rate'] }}" 
                                data-child_plan_id="{{ $plan['id'] }}" data-plan="{{ $plan['id'] }}" 
                                data-min="{{ $plan['minimum_amount'] }}" data-max="{{ $plan['maximum_amount'] }}" value="{{ $plan['id'] }}">{{ $plan['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group icon_form comments_form">
                        <input required type="number" class="form-control require bg-light text-dark" name="amount" placeholder="Enter Amount">
                    </div>
                    <div class="form-group icon_form comments_form">
                        <div class="payment_gateway_wrapper ww-100">
                            <select required class="ww-100 form-control bg-light text-dark" name="user_wallet_id">
                                <option data-display="Select Currency">Select Currency</option>
                                @foreach ($wallets as $wallet)
                                <option value="{{ $wallet['id'] }}" data-symbol="{{ $wallet->admin_wallet->currency_symbol }}">{{ $wallet->admin_wallet->currency }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-dark rounded-btn ww-100">
                            <span class="form-loading d-none px-5">
                                <i class="fa fa-sync fa-spin"></i>
                            </span>
                            <span class='submit-text'>
                                Make Deposit
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    
        <div class="modal fade" id="success-modal">
            <h4 class="modal-title text-uppercase text-dark"><b class="text-uppercase deposit-wallet"></b> DEPOSIT</h4>
            <div class="modal-body font-weight-bold">
                <div align="center"> Deposit exactly <b class="text-warning deposit-amount">$0.9999</b> <b class="text-uppercase deposit-wallet"></b></div>
                <div align="center" class="py-2">
                    Scan Wallet Address
                </div>
                <div align="center">
                    <div class="d-inline-flex p-1 border wallet-qrcode"></div>
                </div>
                <div align="center" class="py-2">
                    or copy From Input
                </div>
                <div class="input-group mb-3">
                    <input type="text" id="clip-input" class="clip-input bg-light text-dark form-control" value="wallet address">
                    <div class="input-group-append">
                        <button data-clipboard-target="#clip-input" class="clipboard-btn btn btn-dark" type="submit">
                            <i class="fa fa-clipboard"></i>
                        </button>
                    </div>
                </div>
                <div class='memo-cont'>
                    <div align="center">
                        Wallet memo
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" id="memo-input" class="memo-input bg-light text-dark form-control" value="wallet address">
                        <div class="input-group-append">
                            <button data-clipboard-target="#memo-input" class="clipboard-btn btn btn-dark" type="submit">
                                <i class="fa fa-clipboard"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div align="center" class="text-success small border border-success mx-4 bg-light">
                    NB : Contact support immediately After Your Payment
                </div>
            </div>
        </div>


        @include('user.layouts.footer')
        @include('user.layouts.general-scripts')
        <script src="{{ asset('assets/js/lib/sweetalert/sweetalert.min.js') }}"></script>
        <script src="{{ asset('assets/js/lib/qrcode/qrcode.min.js') }}"></script>
        <script src="{{ asset('assets/js/lib/clipboard/clipboard.min.js') }}"></script>
        <script src="{{  asset('assets/js/fn.js') }}"></script>
        <script src="{{  asset('assets/js/main.js') }}"></script>
        <script src="{{  asset('assets/js/user.deposit.js') }}"></script>
    </body>
</html>
