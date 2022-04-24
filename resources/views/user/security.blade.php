@include('user.layouts.header')
        <div id="main-wrapper">
            @include('user.layouts.navigation')
            @include('user.layouts.sidebar')
            <div class="page-wrapper">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-light">Security</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                            <li class="breadcrumb-item active">Security</li>
                        </ol>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 responsive-md-100 ">
                            <div class="card card-outline-primary">
                                <div class="card-header">
                                    <h4 class="m-b-0 text-white">Change Password</h4> </div>
                                <div class="card-body">
                                    <form action="#">
                                        <div class="form-body">
                                            <h3 class="card-title m-t-15">Security</h3>
                                            <hr>
                                            <div class="p-t-20">
                                                <div>
                                                    <div class="form-group">
                                                        <label class="control-label">New Passwod</label>
                                                        <input type="password" id="new_password" class="form-control" placeholder="strong password"> 
                                                        <div class="input-group-append c-pointer form-show-password">
                                                            <span class="input-group-text text-secondary d-none show-eye">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="input-group-text text-secondary hide-eye">
                                                                <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <small class="form-control-feedback"> Choose a strong password </small> </div>
                                                </div>
                                                <div>
                                                    <div class="form-group has-danger">
                                                        <label class="control-label">Confirm Passord</label>
                                                        <input type="password" id="confirm_password" class="form-control form-control-danger" placeholder="strong password"> 
                                                        <div class="input-group-append c-pointer form-show-password">
                                                            <span class="input-group-text text-secondary d-none show-eye">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="input-group-text text-secondary hide-eye">
                                                                <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <small class="form-control-feedback"> Retype new password. </small> </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Old Password</label>
                                                        <input type="password" id="old_password" class="form-control form-control-danger" placeholder="strong password"> 
                                                        <div class="input-group-append c-pointer form-show-password">
                                                            <span class="input-group-text text-secondary d-none show-eye">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="input-group-text text-secondary hide-eye">
                                                                <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                        <small class="form-control-feedback"> Enter your old password to save new password </small> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-block btn-dark"> <i class="fa fa-check"></i> Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
