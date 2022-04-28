@include('user.layouts.header')
        <div id="main-wrapper">
            @include('user.layouts.navigation')
            @include('user.layouts.sidebar')
            <div class="content-wrapper">
                <div class="container-full">
                    <!-- Main content -->
                    <section class="content">			
                        
                        <div class="row">
							<div class="col-12">
								<!-- TradingView Widget BEGIN -->
								<div class="tradingview-widget-container">
								    <div class="tradingview-widget-container__widget"></div>
 
                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                                    {
                                    "symbols": [
                                        {
                                        "proName": "FOREXCOM:SPXUSD",
                                        "title": "S&P 500"
                                        },
                                        {
                                        "proName": "FOREXCOM:NSXUSD",
                                        "title": "US 100"
                                        },
                                        {
                                        "proName": "FX_IDC:EURUSD",
                                        "title": "EUR/USD"
                                        },
                                        {
                                        "proName": "BITSTAMP:BTCUSD",
                                        "title": "Bitcoin"
                                        },
                                        {
                                        "proName": "BITSTAMP:ETHUSD",
                                        "title": "Ethereum"
                                        }
                                    ],
                                    "showSymbolLogo": true,
                                    "colorTheme": "light",
                                    "isTransparent": true,
                                    "displayMode": "adaptive",
                                    "locale": "en"
                                    }
                                    </script>
							    </div>
<!-- TradingView Widget END -->
							</div>
							<br>
						</div>
						<br>
                        <div class="row">
                            <div class="col-12 col-md-5">
                                <div class="box">
                                    <div class="box-body">
                                        <h4 class="box-title">
                                            AT A GLANCE
                                        </h4>
                                    </div>
                                    <div class="box-body">
                                        <div class="user-Wallets ">
                                            <div class="d-flex justify-content-between">	
                                                <div>
                                                    <h6 class="text-primary">TOTAL : $12,215</h6>
                                                </div>
                                                <div>

                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">	
                                                <div>
                                                    <p class="mb-0 fs-18"><small>Deposits</small></p>

                                                    <p class="mb-0 fs-18"><small>Withdrawals</small></p>
                                                    <p class="mb-0 fs-18"><small>Interest</small></p>

                                                </div>
                                                <div>
                                                    <p class="mb-0 fs-18"><small>{{ $total_deposits }}</small></p>
                                                    <p class="mb-0 fs-18"><small>{{ $total_withdrawals}}</small></p>
                                                    <p class="mb-0 fs-18"><small>$100</small></p>

                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between mt-15">	
                                                <a href="/user/deposit">
                                                    <button type="button" class="waves-effect waves-light btn btn-primary">Deposit</button>
                                                </a>
                                                <a href="/user/withdrawal">
                                                    <button type="button" class="waves-effect waves-light btn btn-danger">Withdraw</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-7">
                                <div class="box">
                                    <div class="box-header">
                                        <h4 class="box-title">
                                            Assets
                                        </h4>
                                    </div>
                                    <?php
                                        

                                    ?>
                                    <div class="box-body p-0">
                                        <div class="table-responsive">
                                            <table class="table m-0 recent-table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 bg-warning rounded-circle d-flex justify-content-center align-items-center" style="width : 30px; height : 30px"><i class="ti-wallet"></i></span>
                                                                <span>Account Balance</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="{{ $account_balance_percent }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $account_balance_percent }}%">
                                                                </div>
                                                            </div>
                                                            <small class="fw-300 mb-5">{{ $account_balance_percent }}%</small>
                                                        </td>
                                                        <td class="text-end">
                                                            <h5 class="my-0">${{ number_format($user['deposit_balance'] + $user['deposit_interest'] + $user['referral_bonus'], 2)  }}</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 bg-warning rounded-circle d-flex justify-content-center align-items-center" style="width : 30px; height : 30px"><i class="ti-wallet"></i></span>
                                                                <span>Interest</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{ $deposit_interest_percent }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $deposit_interest_percent }}%">
                                                                </div>
                                                            </div>
                                                            <small class="fw-300 mb-5">{{ $deposit_interest_percent }}%</small>
                                                        </td>
                                                        <td class="text-end">
                                                            <h5 class="my-0">${{ number_format($user['deposit_interest'], 2) }}</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 bg-warning rounded-circle d-flex justify-content-center align-items-center" style="width : 30px; height : 30px"><i class="ti-wallet"></i></span>
                                                                <span>Currently Invested</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $currently_invested_percent }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $currently_invested_percent }}%">
                                                                </div>
                                                            </div>
                                                            <small class="fw-300 mb-5">{{ $currently_invested_percent }}%</small>
                                                        </td>
                                                        <td class="text-end">
                                                            <h5 class="my-0">${{ number_format($user['currently_invested'], 2) }}</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 bg-warning rounded-circle d-flex justify-content-center align-items-center" style="width : 30px; height : 30px"><i class="ti-wallet"></i></span>
                                                                <span>Referral Bonus</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="{{ $referral_bonus_percent }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $referral_bonus_percent }}%">
                                                                </div>
                                                            </div>
                                                            <small class="fw-300 mb-5">{{ $referral_bonus_percent }}%</small>
                                                        </td>
                                                        <td class="text-end">
                                                            <h5 class="my-0">${{ number_format($user['referral_bonus'], 2) }}</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <span class="me-2 bg-warning rounded-circle d-flex justify-content-center align-items-center" style="width : 30px; height : 30px"><i class="ti-wallet"></i></span>
                                                                <span>Total Withdrawn</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="{{ $total_withdrawn_percent }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $total_withdrawn_percent }}%">
                                                                </div>
                                                            </div>
                                                            <small class="fw-300 mb-5">{{ $total_withdrawn_percent }}%</small>
                                                        </td>
                                                        <td class="text-end">
                                                            <h5 class="my-0">${{ number_format($user['total_withdrawn'], 2) }}</h5>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="box">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Recent Trading Activities</h3>
                                        <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                    </div>
                                <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="table-responsive">
                                        <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                            <thead>
                                                <tr>
                                                    <th>Transaction hash</th>
                                                    <th>Amount</th>
                                                    <th>Currency</th>
                                                    <th>Type</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>				  
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
