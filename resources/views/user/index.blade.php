@include('user.layouts.header')
        <div id="main-wrapper">
            @include('user.layouts.navigation')
            @include('user.layouts.sidebar')
            <div class="page-wrapper" data-wallet="{{ $wallets->count() }}">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-light">Dashboard</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>

                <div class="container-fluid">
                    @include('user.layouts.errors')
                    <div class="row">
                        <div class="col-lg-5">
                            <div id="accordion" class="accordion">
                                <div class="card"> <a class="card-header bg-primary-darken-5 card-title" data-toggle="collapse" aria-expanded="true" href="#collapseOne">
                            Make Deposit
                            </a>
                                    <div id="collapseOne" class="card-body collapse show" data-parent="#accordion">
                                        <div class="row">
                                            <div class="col-12 col-xl-12">
                                                <div class="row my-2 p-l-15 p-r-15">
                                                    <div class="col-4">
                                                        <!-- <h5 class="text-bold-600 mb-0">Plans</h5> --></div>
                                                    <div class="col-8 text-right">
                                                        <p class="d-none text-muted mb-0">USD Balance: ${{ number_format($user['deposit_balance'], 2) }}</p>
                                                    </div>
                                                </div>
                                                <form class="form form-horizontal page-form deposit-form">
                                                    @csrf
                                                    <div class="form-body">
                                                        <div class="form-group row">
                                                            <label class="col-md-4 col-form-label" for="btc-limit-buy-price">Plans</label>
                                                            <div class="col-md-8">
                                                                <select required class="select-plan w-100 form-control" name="child_plan_id" id="select-plan">
                                                                    <option data-display="Select Plan">Select Plan</option>
                                                                    @foreach ($plans as $plan)
                                                                    <option data-return="{{ $plan['interest_rate'] }}" 
                                                                    data-child_plan_id="{{ $plan['id'] }}" data-plan="{{ $plan['id'] }}" 
                                                                    data-min="{{ $plan['minimum_amount'] }}" data-max="{{ $plan['maximum_amount'] }}" value="{{ $plan['id'] }}">{{ $plan['name'] }}(${{ number_format($plan['minimum_amount'],2) }} - ${{ number_format($plan['maximum_amount'], 2) }})</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-4 col-form-label" for="deposit_amount">Amount</label>
                                                            <div class="col-md-8">
                                                                <input type="number" id="deposit_amount" class="form-control" placeholder="0 USD" name="amount"> </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-4 col-form-label" for="btc-limit-buy-total">Currency</label>
                                                            <div class="col-md-8">
                                                                <select required class="w-100 form-control" name="user_wallet_id">
                                                                    <option data-display="Select Currency">Select Currency</option>
                                                                    @foreach ($wallets as $wallet)
                                                                    <option value="{{ $wallet['id'] }}" data-symbol="{{ $wallet->admin_wallet->currency_symbol }}">{{ $wallet->admin_wallet->currency }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-actions pb-0 m-l-15 m-r-15">
                                                            <button type="submit" class="btn round btn-success btn-block btn-glow">
                                                                <span class="form-loading d-none px-5">
                                                                    <i class="fa fa-sync fa-spin"></i>
                                                                </span>
                                                                <span class='submit-text'>
                                                                    Deposit
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> <a class="card-header collapsed bg-primary-darken-5 card-title" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            Make Withdrawals
                            </a>
                                    <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                                        <div class="row">
                                            <div class="col-12 col-xl-12">
                                                <div class="row my-2 p-l-15 p-r-15">
                                                    <div class="col-4">
                                                        <h5 class="text-bold-600 mb-0">Withdraw</h5> </div>
                                                    <div class="col-8 text-right">
                                                        <p class="d-none text-muted mb-0">USD Balance: ${{ number_format($user['deposit_balance'], 2) }}</p>
                                                    </div>
                                                </div>
                                                <form class="page-form form form-horizontal withdrawal-form">
                                                    @csrf
                                                    <div class="form-body">
                                                        <div class="form-group row">
                                                            <label class="col-md-4 col-form-label" name="amount" for="amount">Assets</label>
                                                            <div class="col-md-8">
                                                                <select class="form-control" name="type">
                                                                    <option value="deposit_balance">Deposit Balance</option>
                                                                    <option value="deposit_interest">Deposit Interest</option>
                                                                    <option value="referral_bonus">Referral Bonus</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-4 col-form-label" name="amount" for="withdraw_amount">Amount</label>
                                                            <div class="col-md-8">
                                                                <input type="number" id="withdraw_amount" class="form-control" placeholder="0 USD" name="amount">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-4 col-form-label" name="amount" for="amount">Currency</label>
                                                            <div class="col-md-8">
                                                                <input type="hidden" name="api" value="fghjklkjchxgdzfsdxgfchgjvk">
                                                                <select name="user_wallet_id" class="form-control">
                                                                    <option data-display="Select Currency">Select Currency</option>
                                                                    @foreach ($wallets as $wallet)
                                                                    <option value="{{ $wallet['id'] }}" data-symbol="{{ $wallet->admin_wallet->currency_symbol }}">{{ $wallet->admin_wallet->currency }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-actions pb-0 m-l-15 m-r-15">
                                                            <button type="submit" class="btn round btn-success btn-block btn-glow"> Withdraw USD </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Active Deposits</h4></div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-de mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Hash</th>
                                                    <th>Amount USD</th>
                                                    <th>Plan</th>
                                                    <th>Wallet Used</th>
                                                    <th>Remaining Duration (days)</th>
                                                    <th>Cancel</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($active_deposits as $active_deposit)
                                                <tr class='deposit-row'>
                                                    <td>{{ $active_deposit['created_at'] }}</td>
                                                    <td class="success">{{ $active_deposit['transaction_hash'] }}</td>
                                                    <td><i class="cc {{ strtoupper($active_deposit->user_wallet->admin_wallet->currency_symbol) }}"></i> {{ number_format($active_deposit['amount'] , 2) }}</td>
                                                    <td>{{ $active_deposit->plan->name }}</td>
                                                    <td>{{ strtoupper($active_deposit->user_wallet->admin_wallet->currency_symbol) }}</td>
                                                    <td>{{ $active_deposit['remaining_duration'] }}</td>
                                                    <td>
                                                        <button class="btn btn-sm round btn-outline-danger deposit-pause-btn" data-id="{{ $active_deposit->id }}"> Pause </button>
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
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Deposits Details</h4> </div>
                                <div class="card-body">
                                    <div class="current-progress">
                                        <div class="progress-content">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="progress-text">Approved ({{ $total_approved_deposits }})</div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="current-progressbar">
                                                        <div class="progress">
                                                            
                                                            <div class="progress-bar progress-bar-success" style="width: {{ round(($total_approved_deposits/($total_deposits <= 0 ? 1 : $total_deposits)) * 100) }}%" role="progressbar" aria-valuenow="{{ round(($total_approved_deposits/($total_deposits <= 0 ? 1 : $total_deposits)) * 100) }}" aria-valuemin="0" aria-valuemax="100"> {{ round(($total_approved_deposits/($total_deposits <= 0 ? 1 : $total_deposits)) * 100) }}% </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-content">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="progress-text">Pending ({{ $total_pending_deposits }})</div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="current-progressbar">
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-warning" style="width: {{ round(($total_pending_deposits/($total_deposits <= 0 ? 1 : $total_deposits)) * 100) }}%" role="progressbar" aria-valuenow="{{ round(($total_pending_deposits/($total_deposits <= 0 ? 1 : $total_deposits)) * 100) }}" aria-valuemin="0" aria-valuemax="100"> {{ round(($total_pending_deposits/($total_deposits <= 0 ? 1 : $total_deposits)) * 100) }}% </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-content">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="progress-text">Denied ({{ $total_denied_deposits }})</div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="current-progressbar">
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-danger" style="width: {{ round(($total_denied_deposits/($total_deposits <= 0 ? 1 : $total_deposits)) * 100) }}%" role="progressbar" aria-valuenow="{{ round(($total_denied_deposits/($total_deposits <= 0 ? 1 : $total_deposits)) * 100) }}" aria-valuemin="0" aria-valuemax="100"> {{ round(($total_denied_deposits/($total_deposits <= 0 ? 1 : $total_deposits)) * 100) }}% </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Withdrawals Details</h4> </div>
                                <div class="card-body">
                                    <div class="current-progress">
                                        <div class="progress-content">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="progress-text">Approved ({{ $total_approved_withdrawals }})</div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="current-progressbar">
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-success" style="width: {{ round(($total_approved_withdrawals/($total_withdrawals <= 0 ? 1 : $total_withdrawals)) * 100) }}%" role="progressbar" aria-valuenow="{{ round(($total_approved_withdrawals/($total_withdrawals <= 0 ? 1 : $total_withdrawals)) * 100) }}" aria-valuemin="0" aria-valuemax="100"> {{ round(($total_approved_withdrawals/($total_withdrawals <= 0 ? 1 : $total_withdrawals)) * 100) }}% </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-content">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="progress-text">Pending ({{ $total_pending_withdrawals }})</div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="current-progressbar">
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-warning" style="width: {{ round(($total_pending_withdrawals/($total_withdrawals <= 0 ? 1 : $total_withdrawals)) * 100) }}%" role="progressbar" aria-valuenow="{{ round(($total_pending_withdrawals/($total_withdrawals <= 0 ? 1 : $total_withdrawals)) * 100) }}%" aria-valuemin="0" aria-valuemax="100"> {{ round(($total_pending_withdrawals/($total_withdrawals <= 0 ? 1 : $total_withdrawals)) * 100) }}% </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-content">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="progress-text">Denied ({{ $total_denied_withdrawals }})</div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="current-progressbar">
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-danger" style="width: {{ round(($total_denied_withdrawals/($total_withdrawals <= 0 ? 1 : $total_withdrawals)) * 100) }}%" role="progressbar" aria-valuenow="{{ round(($total_denied_withdrawals/($total_withdrawals <= 0 ? 1 : $total_withdrawals)) * 100) }}" aria-valuemin="0" aria-valuemax="100"> {{ round(($total_denied_withdrawals/($total_withdrawals <= 0 ? 1 : $total_withdrawals)) * 100) }}% </div>
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
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="stat-widget-two">
                                    <div class="stat-content">
                                        <div class="stat-text"> Account Balance </div>
                                        <div class="stat-digit color-success"> <i class="fa fa-usd"></i>{{ number_format($user['deposit_balance'] + $user['deposit_interest'] + $user['referral_bonus'], 2)  }}</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="col-md-6 col-lg-4">-->
                        <!--    <div class="card">-->
                        <!--        <div class="stat-widget-two">-->
                        <!--            <div class="stat-content">-->
                        <!--                <div class="stat-text"> Deposit Balance </div>-->
                        <!--                <div class="stat-digit color-success"> <i class="fa fa-usd"></i>{{ number_format($user['deposit_balance'], 2) }}</div>-->
                        <!--            </div>-->
                        <!--            <div class="progress">-->
                        <!--                <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="stat-widget-two">
                                    <div class="stat-content">
                                        <div class="stat-text"> Interest </div>
                                        <div class="stat-digit color-success"> <i class="fa fa-usd"></i>{{ number_format($user['deposit_interest'], 2) }}</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="stat-widget-two">
                                    <div class="stat-content">
                                        <div class="stat-text"> Currently Invested </div>
                                        <div class="stat-digit color-success"> <i class="fa fa-usd"></i>{{ number_format($user['currently_invested'], 2) }}</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="stat-widget-two">
                                    <div class="stat-content">
                                        <div class="stat-text"> Referral Bonus </div>
                                        <div class="stat-digit color-success"> <i class="fa fa-usd"></i>{{ number_format($user['referral_bonus'], 2) }}</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="stat-widget-two">
                                    <div class="stat-content">
                                        <div class="stat-text"> Total Withdrawn </div>
                                        <div class="stat-digit color-success"> <i class="fa fa-usd"></i>{{ number_format($user['total_withdrawn'], 2) }}</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-none">
                        <div class="col-lg-6">
                            <div class="card nestable-cart sperkline_fourteen_bg">
                                <div class="card-title">
                                    <h4>Line Chart</h4>
                                    <div class="card-title-right-icon">
                                        <ul> </ul>
                                    </div>
                                </div>
                                <div class="sparkline-unix">
                                    <div id="sparkline14" class="text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Recent Transactions </h4> </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>transaction hash</th>
                                                    <th>Amount</th>
                                                    <th>Currency</th>
                                                    <th>Type</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($transactions as $transaction)
                                                <tr>
                                                    <td>
                                                        {{ $transaction->transaction_hash }}
                                                    </td>
                                                    <td>
                                                        {{ $transaction->amount }}
                                                    </td>
                                                    <td>
                                                        {{ $transaction->currency }}
                                                    </td>
                                                    <td>
                                                        {{ $transaction->type }}
                                                    </td>
                                                    <td>
                                                        {{ $transaction->created_at }}
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
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>At a glance</h4> </div>
                                <div class="card-body browser">
                                    <p>Deposit<span class="pull-right">
                                        {{ round(($total_approved_deposits/($total_deposits <= 0 ? 1 : $total_deposits)) * 100) }}%
                                    </span></p>
                                    <div class="progress ">
                                        <div role="progressbar" style="width: {{ round(($total_approved_deposits/($total_deposits <= 0 ? 1 : $total_deposits)) * 100) }}%; height:8px;" class="progress-bar bg-danger wow animated progress-animated"> <span class="sr-only">{{ round(($total_approved_deposits/($total_deposits <= 0 ? 1 : $total_deposits)) * 100) }}% Complete</span> </div>
                                    </div>
                                    <p class="m-t-10">Withdrawals<span class="pull-right">
                                        
                                        {{ round(($total_approved_withdrawals/($total_withdrawals <= 0 ? 1 : $total_withdrawals)) * 100) }}%
                                        </span></p>
                                    <div class="progress">
                                        <div role="progressbar" style="width: {{ round(($total_approved_withdrawals/($total_withdrawals <= 0 ? 1 : $total_withdrawals)) * 100) }}%; height:8px;" class="progress-bar bg-info wow animated progress-animated"> <span class="sr-only">{{ round(($total_approved_withdrawals/($total_withdrawals <= 0 ? 1 : $total_withdrawals)) * 100) }}% Complete</span> </div>
                                    </div>
                                    <p class="m-t-10">Interests<span class="pull-right">{{ round(($total_approved_deposits/($user['deposit_interest'] <= 0 ? 1 : $user['deposit_interest'])) * 100) }}%</span></p>
                                    <div class="progress m-b-30">
                                        <div role="progressbar" style="width: {{ round(($total_approved_deposits/($user['deposit_interest'] <= 0 ? 1 : $user['deposit_interest'])) * 100) }}%; height:8px;" class="progress-bar bg-success wow animated progress-animated"> <span class="sr-only">{{ round(($total_approved_deposits/($user['deposit_interest'] <= 0 ? 1 : $user['deposit_interest'])) * 100) }}% Complete</span> </div>
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
        <script src="{{ asset('assets/plugins/blockUi/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('assets/js/lib/sweetalert/sweetalert.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/qrcode/qrcode.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
        <script src="{{  asset('assets/js/custom.min.js?z=1') }}"></script>
        <script src="{{  asset('assets/js/fn.js') }}"></script>
        <script src="{{  asset('assets/js/main.js') }}"></script>
        <script src="{{  asset('assets/js/user.index.js?q=2') }}"></script>

        <div class="modal fade" id="deposit-modal">
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
    </body>
</html>
