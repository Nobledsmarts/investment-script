@include('user.layouts.header')
        <div id="main-wrapper">
            @include('user.layouts.navigation')
            @include('user.layouts.sidebar')
            <div class="content-wrapper">
                <div class="container-full">
                    <div class="content-header">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <h4 class="page-title">Withdrawal</h4>
                                <div class="d-inline-block align-items-center">
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                            <li class="breadcrumb-item" aria-current="page">User</li>
                                            <li class="breadcrumb-item active" aria-current="page">Withdrawal</li>
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
                                                    <label class="col-form-label" for="wallet_id">Wallet</label>
                                                    <select name="wallet_id" class="form-control" onchange="setWalletLabel()">
                                                        <option data-display="Select Currency">Select Currency</option>
                                                        @foreach ($wallets as $wallet)
                                                        <option value="{{ $wallet['id'] }}" data-symbol="{{ $wallet->currency_symbol }}">{{ $wallet->currency }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label" for="wallet_address"><span class="text-capitalize currency_label"></span> Wallet Address</label>
                                                    <div class="">
                                                        <input type="text" id="wallet_address" class="form-control" placeholder="Wallet address" name="wallet_address"> 
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label" for="amount">Amount</label>
                                                    <div class="">
                                                        <input type="text" id="amount" class="form-control" placeholder="0.000 USD" name="amount"> </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <div>
                                                        <div class="form-actions pb-0 m-l-15 m-r-15">
                                                            <button type="submit" class="btn round btn-primary btn-block btn-glow ww-100"> Withdraw USD</button>
                                                        </div>
                                                    </div>
                                                </div>
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
       <script>
           function setWalletLabel(e){
               let select = event.currentTarget;
               let walletSymbol = select.options[select.selectedIndex].dataset.symbol;
               document.querySelector('.currency_label').textContent = walletSymbol;
            //    console.log(;
           }
       </script>
    </body>
</html>
