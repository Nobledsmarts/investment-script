@include('user.layouts.header')
        <div id="main-wrapper">
            @include('user.layouts.navigation')
            @include('user.layouts.sidebar')
            <div class="content-wrapper">
                <div class="container-full">
                    <div class="content-header">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <h4 class="page-title">Referrals</h4>
                                <div class="d-inline-block align-items-center">
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                            <li class="breadcrumb-item" aria-current="page">User</li>
                                            <li class="breadcrumb-item active" aria-current="page">Referrals</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- Main content -->
                    <section class="content">			
                        <div class="row">
                           <div class="col-12">
                                <div class="box">
                                    <div class="box-body">
                                        <h4 class="box-title">
                                            Copy Referral ID
                                        </h4>
                                    </div>
                                    <div class="box-body">
                                        <div class="input-group mb-3">
                                            <input type="text" id="clip-input" class="clip-input bg-light text-dark form-control text-uppercase" value="{{ $user->uid }}">
                                            <div class="input-group-append">
                                                <button data-clipboard-target="#clip-input" class="clipboard-btn btn btn-dark" type="submit">
                                                    <i class="fa fa-clipboard"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="box">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Your Referrals</h3>
                                        <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                    </div>
                                <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="table-responsive">
                                        <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                    <th>Invested</th>
                                                    <th>Verified</th>
                                                    <th>Registered at</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($referrals as $referral)
                                                <tr>
                                                    <td>
                                                        {{ $referral['name'] }}
                                                    </td>
                                                    <td>
                                                        {{ $referral['email'] }}
                                                    </td>
                                                    <td>
                                                        {{ $referral['invested'] }}
                                                    </td>
                                                    <td>
                                                        {{ $referral['email_verified_at'] ? 'yes' : 'no' }}
                                                    </td>
                                                    <td>
                                                        {{ $referral['created_at'] }}
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
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
       <script src="{{ asset('assets/js/lib/clipboard/clipboard.min.js') }}"></script>
        <script>new ClipboardJS('.clipboard-btn');</script>
    </body>
</html>
