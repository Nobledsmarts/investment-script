@include('user.layouts.header')
        <div id="main-wrapper">
            @include('user.layouts.navigation')
            @include('user.layouts.sidebar')
            <div class="page-wrapper">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-light">Withdrawal</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                            <li class="breadcrumb-item active">Withdrawal</li>
                        </ol>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-12 col-md-8">
                            @include('admin.layouts.errors')
                            <div class="card">
                                <div class="card-body">
                                    <div class="row my-2 p-l-15 p-r-15">
                                        <div class="col-4">
                                            <!-- <h5 class="text-bold-600 mb-0">Balance</h5> --></div>
                                        <div class="col-8 text-right d-none">
                                            <p class="text-muted mb-0">USD Balance: $ 5000.00</p>
                                        </div>
                                    </div>
                                    <form class="form form-horizontal" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-form-label" for="btc-limit-buy-price">Assets</label>
                                                <div class="">
                                                    <select class="form-control" name="type">
                                                        <option value="deposit_balance">Deposit Balance</option>
                                                        <option value="deposit_interest">Deposit Interest</option>
                                                        <option value="referral_bonus">Referral Bonus</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <select name="user_wallet_id" class="form-control">
                                                    <option data-display="Select Currency">Select Currency</option>
                                                    @foreach ($wallets as $wallet)
                                                    <option value="{{ $wallet['id'] }}" data-symbol="{{ $wallet->admin_wallet->currency_symbol }}">{{ $wallet->admin_wallet->currency }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label" for="amount">Amount</label>
                                                <div class="">
                                                    <input type="text" id="amount" class="form-control" placeholder="0.000 USD" name="amount"> </div>
                                                </div>
                                                <div class="form-actions pb-0 m-l-15 m-r-15">
                                                    <button type="submit" class="btn round btn-dark btn-block btn-glow"> Withdraw USD</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
                @include('user.layouts.footer')
            </div>
        </div>
        @include('user.layouts.general-scripts')
        <script src="{{  asset('assets/js/custom.min.js') }}"></script>
        <script src="{{  asset('assets/js/fn.js') }}"></script>
        <script src="{{  asset('assets/js/main.js') }}"></script>
        <script src="{{  asset('assets/js/admin.faqs.js') }}"></script>
    </body>
</html>
