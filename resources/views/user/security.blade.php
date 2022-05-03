@include('user.layouts.header')
        <div id="main-wrapper">
            @include('user.layouts.navigation')
            @include('user.layouts.sidebar')
            <div class="content-wrapper">
                <div class="container-full">
                    <div class="content-header">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <h4 class="page-title">Security</h4>
                                <div class="d-inline-block align-items-center">
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                            <li class="breadcrumb-item" aria-current="page">User</li>
                                            <li class="breadcrumb-item active" aria-current="page">Security</li>
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
                                           Change Password
                                        </h4>
                                    </div>
                                    <div class="box-body">
                                        <form action="#">
                                        <div class="form-body">
                                       
                                            <div class="p-t-20">
                                                <div>
                                                    <div class="form-group">
                                                        <label class="control-label">New Passwod</label>
                                                        <div class="input-group">
                                                            <input type="password" id="new_password" class="form-control" placeholder="strong password"> 
                                                            <div class="input-group-addon c-pointer form-show-password">
                                                                <span class="input-group-text text-secondary d-none show-eye">
                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                </span>
                                                                <span class="input-group-text text-secondary hide-eye">
                                                                    <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <small class="form-control-feedback"> Choose a strong password </small> </div>
                                                </div>
                                                <div>
                                                    <div class="form-group has-danger">
                                                        <label class="control-label">Confirm Passord</label>
                                                        <div class="input-group">
                                                            <input type="password" id="confirm_password" class="form-control form-control-danger" placeholder="strong password"> 
                                                            <div class="input-group-addon c-pointer form-show-password">
                                                                <span class="input-group-text text-secondary d-none show-eye">
                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                </span>
                                                                <span class="input-group-text text-secondary hide-eye">
                                                                    <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <small class="form-control-feedback"> Retype new password. </small> </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Old Password</label>
                                                        <div class="input-group">
                                                            <input type="password" id="old_password" class="form-control form-control-danger" placeholder="strong password"> 
                                                            <div class="input-group-addon c-pointer form-show-password">
                                                                <span class="input-group-text text-secondary d-none show-eye">
                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                </span>
                                                                <span class="input-group-text text-secondary hide-eye">
                                                                    <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <small class="form-control-feedback"> Enter your old password to save new password </small> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-block btn-primary ww-100"> <i class="fa fa-check"></i> Save</button>
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
        <script src="{{  asset('assets/js/fn.js') }}"></script>
        <script src="{{  asset('assets/js/main.js') }}"></script>
    </body>
</html>
