@include('user.layouts.header')
        <div id="main-wrapper">
            @include('user.layouts.navigation')
            @include('user.layouts.sidebar')
            <div class="page-wrapper">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-light">Reinvest</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                            <li class="breadcrumb-item active">Reinvest</li>
                        </ol>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-12 col-md-8">
                            @include('user.layouts.errors')
                            <div class="card">
                                <div class="card-body">
                                    <div class="row my-2 p-l-15 p-r-15">
                                        <div class="col-4">
                                            <!-- <h5 class="text-bold-600 mb-0">Balance</h5> --></div>
                                        <div class="col-8 text-right">
                                            <p class="text-muted mb-0">USD Balance: ${{ $user['deposit_balance'] }}</p>
                                        </div>
                                    </div>
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
                                                        <option value="{{ $wallet['id'] }}" data-symbol="{{ $wallet->admin_wallet->currency_symbol }}">{{ $wallet->admin_wallet->currency }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-actions pb-0 m-l-15 m-r-15">
                                                <button type="submit" class="btn round btn-dark btn-block btn-glow"> Reinvest </button>
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
