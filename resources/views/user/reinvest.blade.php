@include('user.layouts.header')
        <div id="main-wrapper">
            @include('user.layouts.navigation')
            @include('user.layouts.sidebar')
            <div class="content-wrapper">
                <div class="container-full">
                    <div class="content-header">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <h4 class="page-title">Reinvest</h4>
                                <div class="d-inline-block align-items-center">
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                            <li class="breadcrumb-item" aria-current="page">User</li>
                                            <li class="breadcrumb-item active" aria-current="page">Reinvest</li>
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
                                <div class="box">
                                    <div class="box-header">
                                        <h4 class="box-title">
                                            USD Balance: ${{ number_format($user['deposit_balance'], 2) }}
                                        </h4>
                                    </div>
                                    <div class="box-body">
                                        
                                    <form class="form form-horizontal" enctype="multipart/form-data" method="post">
                                        @csrf
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-form-label" for="btc-limit-buy-price">Plan</label>
                                                <div class="">
                                                    <select class="form-control" name="child_plan_id">
                                                        <option disabled data-display="Select Plan">Select Plan</option>
                                                        @foreach ($plans as $plan)
                                                        <option data-return="{{ $plan['interest_rate'] }}" 
                                                        data-child_plan_id="{{ $plan['id'] }}" data-plan="{{ $plan['id'] }}" 
                                                        data-min="{{ $plan['minimum_amount'] }}" data-max="{{ $plan['maximum_amount'] }}" value="{{ $plan['id'] }}">{{ $plan['name'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label" for="btc-limit-buy-amount">Amount</label>
                                                <div class="">
                                                    <input type="text" id="btc-limit-buy-amount" class="form-control" placeholder="0.000 USD" name="amount">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label" for="btc-limit-buy-price">Plan</label>
                                                <div class="">
                                                    <select class="form-control" name="user_wallet_id" id="select-plan">
                                                        <option data-display="Select Currency">Select Currency</option>
                                                        @foreach ($wallets as $wallet)
                                                        <option value="{{ $wallet['id'] }}" data-symbol="{{ $wallet->currency_symbol }}">{{ $wallet->currency }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-actions pb-0 m-l-15 m-r-15">
                                                <button type="submit" class="btn round btn-primary ww-100 btn-block btn-glow"> Reinvest </button>
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
       
    </body>
</html>
