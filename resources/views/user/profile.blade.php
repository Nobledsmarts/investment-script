@include('user.layouts.header')
<style>
    div.table-responsive #example_filter{
        display : none
    }
</style>
        <div id="main-wrapper">
            @include('user.layouts.navigation')
            @include('user.layouts.sidebar')
           <div class="content-wrapper">
	  <div class="container">
		<!-- Main content -->
		<section class="content">			
			<div class="row">
				<div class="col-xl-5 col-lg-5">

				  <!-- Profile Image -->
				  <div class="box no-border">
					<div class="box-body box-profile">
					  <img class="rounded-circle img-fluid mx-auto d-block max-w-150" style="border-radius:50%; height:100px; width : 100px" src="{{ asset('images/user-icon.png') }}" alt="User profile picture">

					  <h3 class="profile-username text-center mb-0">{{ $user['name'] }}</h3>

					  <h4 class="text-center mt-0"><i class="fa fa-envelope-o me-10"></i>{{ $user['email'] }}</h4>
                      <div align="center">
                        <b>User ID <span class="text-success">#{{ ucfirst($user['uid']) }}</span></b>
                      </div>
                      <div align="center">
                        <p>Registerd On: {{ $user['created_at'] }}
                                            <br> Verified On: {{ $user['email_verified_at'] }} </p>
                      </div>
                    
					  
					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /.box -->
				</div>
				<!-- /.col -->
				<div class="col-xl-7 col-lg-7">
				    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">User details</h3>
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
                    <!-- /.box-body -->
                    </div>
				</div>
				<!-- /.col -->
			  </div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
        </div>
        @include('user.layouts.footer')
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
