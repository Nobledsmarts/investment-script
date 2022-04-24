@include('user.layouts.header')
        <div id="main-wrapper">
            @include('user.layouts.navigation')
            @include('user.layouts.sidebar')
            <div class="page-wrapper">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-light">Profile</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="invoice" class="effect2" style="margin-bottom: 0;">
                                <div id="invoice-top">
                                    <div class="invoice-logo-wrap">
                                        <div class="invoice-logo"></div>
                                        <div class="invoice-info">
                                            <h2>{{ $user['name'] }}</h2>
                                            <p> <a href="" class="" >{{ $user['email'] }}</a>
                                          </p>
                                        </div>
                                    </div>
                                    <div class="title invoice-title">
                                        <h4 class="text-uppercase">User ID #{{ ucfirst($user['uid']) }}</h4>
                                        <p>Registerd On: {{ $user['created_at'] }}
                                            <br> Verified On: {{ $user['email_verified_at'] }} </p>
                                    </div>
                                </div>
                                <div id="invoice-mid">
                                    <div class="invoice-logo-wrap">
                                        <div class="clientlogo"></div>
                                        <div class="invoice-info">
                                            <h2>Client Full Name</h2>
                                            <p> Account balance: {{ number_format($user['deposit_balance'] + $user['deposit_interest'] + $user['referral_bonus'], 2)  }}
                                                <br> </div>
                                    </div>
                                    <div id="project" class="invoice-title">
                                        <h2>Account Overview</h2>
                                        <p> Below is a summary of your account, if you have any enquiry please contact support@empressglobe.com </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12" style="width: 100%; padding: 0;">
                                <div class="card" style="margin: 0; padding: 0; width: 100%;">
                                    <div class="card-title p-3">
                                        <h4>User details </h4> </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Username</th>
                                                        <th>Email</th>
                                                        <th>Account State</th>
                                                        <th>Firstname</th>
                                                        <th>Lastname</th>
                                                        <th>Total Deposited</th>
                                                        <th>Total Withdrawn</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">{{ $user['name'] }}</th>
                                                        <td>{{ $user['email'] }}</td>
                                                        <td><span class="badge badge-primary py-1 px-2">verified</span></td>
                                                        <td class="color-primary">{{ $user['firstname'] }}</td>
                                                        <td class="color-primary">{{ $user['lastname'] }}</td>
                                                        <td class="color-primary">${{ $user['currently_invested'] }}</td>
                                                        <td class="color-primary">${{ $user['total_withdrawn'] }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="input-group input-group-rounde">
                                <input type="text" placeholder="Search Round" name="Search" class="form-control" id="ref_url" value="{{ ucfirst($user['uid']) }}">
                                <span class="input-group-btn">
                                <button class="clipboardjs btn btn-primary btn-group-right" type="submit" data-clipboard-target="#ref_url">
                                    <i class="fa fa-copy"></i>
                                </button></span>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
                @include('user.layouts.footer')
            </div>
        </div>
        @include('user.layouts.general-scripts')
       <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.8/dist/clipboard.min.js"></script>
        <script src="{{  asset('assets/js/custom.min.js') }}"></script>
        <script src="{{  asset('assets/js/fn.js') }}"></script>
        <script src="{{  asset('assets/js/main.js') }}"></script>
        <script src="{{  asset('assets/js/admin.faqs.js') }}"></script>
        <script>
            new ClipboardJS('.clipboardjs');
        </script>
    </body>
</html>
