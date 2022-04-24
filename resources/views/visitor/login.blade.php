        @include('visitor.layouts.header')
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="login_top_box d-flex justify-content-center align-items-center">
                        @include('user.layouts.errors')
                        <div class="login_form_wrapper">
                            <div class="sv_heading_wraper heading_wrapper_dark dark_heading hwd">

                                <h3> login </h3>

                            </div>
                            <p>Enter Your Login details</p>
                            <form class="page-form login-form">
                                <div class="form-group icon_form comments_form">

                                    <input required type="text" class="form-control require" name="login" placeholder="Username Or Email">
                                
                                </div>
                                <div class="form-group icon_form comments_form">

                                    <input required name="password" type="password" class="form-control require" placeholder="Password *">
                                
                                </div>
                        
                                <div>
                                    <button class="btn btn-warning w-100 input-rounded" type="submit">
                                        <span class="form-loading d-none px-5">
                                            <i class="fa fa-sync fa-spin"></i>
                                        </span>
                                        <span class='submit-text'>
                                            Login
                                        </span>
                                    </button>
                                </div>
                            </form>
                            <div class="dont_have_account float_left">
                                <p>Don’t have an acount ? <a href="register.html">Sign up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('visitor.layouts.footer')
        
    </body>
</html>
