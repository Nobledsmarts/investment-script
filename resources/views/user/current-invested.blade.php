@include('user.layouts.header')
        <div id="main-wrapper">
            @include('user.layouts.navigation')
            @include('user.layouts.sidebar')
            <div class="page-wrapper">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-light">Currently Invested</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Mod</a></li>
                            <li class="breadcrumb-item active">Currently Invested</li>
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
                                    <form class="form p-t-20 p-5" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label class="control-label">Select User</label>
                                            <select class="form-control select-2" name="name">
                                                @foreach($users as $user)
                                                    <option data-balance="{{ $user['deposit_balance'] }}" value="{{ $user['name'] }}">{{ $user['name'] }}</option>
                                                @endforeach
                                            </select> 
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Action</label>
                                            <select class="form-control" name="action">
                                                <option value="debit">Debit</option>
                                                <option value="fund">Credit</option>
                                            </select> 
                                        </div>
                                        <div class="form-group">
                                            <label for="amount">Amount</label>
                                            <div class="input-group">
                                                <input type="number" required name="amount" class="form-control" id="amount" placeholder="Amount">
                                                <div class="input-group-addon form-addon-icon"><i class="ti-user"></i></div>
                                            </div>
                                        </div>
                                        <div class="text-left">
                                            <button type="submit" class="btn btn-dark btn-block waves-effect waves-light m-r-10">Submit</button>
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
    </body>
</html>
