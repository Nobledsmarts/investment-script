@include('visitor.layouts.header')
    <div class="page_title_section">

        <div class="page_header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-9 col-md-9 col-12 col-sm-8">
                        <h5 class="text-white">Registration</h5>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12 col-sm-4">
                        <div class="sub_title_section">
                            <ul class="sub_title">
                                <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                                <li>Register</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- inner header wrapper end -->
    <!-- login wrapper start -->
    <div class="login_wrapper fixed_portion float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="login_top_box d-flex justify-content-center align-items-center">
                        
                        <div class="login_form_wrapper register_wrapper">
                            <div class="sv_heading_wraper heading_wrapper_dark dark_heading hwd">

                                <h3> Registration</h3>

                            </div>
                            <p>Fill in the fields below to register</p>
                            <form class="page-form register-form">
								<div class="form-group icon_form comments_form register_contact">

                                <input type="text" class="form-control require" name="username" placeholder="Enter a username*">
                             
                                </div>
                                <div class="form-group icon_form comments_form register_contact">

                                    <input type="text" class="form-control require" name="firstname" placeholder="Enter First Name*">
                                
                                </div>
                                <div class="form-group icon_form comments_form register_contact">

                                    <input type="text" class="form-control require" name="middlename" placeholder="Enter Middle Name*">
                                
                                </div>
                                <div class="form-group icon_form comments_form register_contact">

                                    <input type="text" class="form-control require" name="lastname" placeholder="Enter Last Name">
                                
                                </div>
                                <div class="form-group icon_form comments_form register_contact">

                                    <input type="email" class="form-control require" name="email" placeholder="Enter your email address">
                                
                                </div>
                                <div class="form-group icon_form comments_form register_contact">

                                    <input name="password" type="password" class="form-control require" placeholder="Enter Password">
                                
                                </div>
                                <div class="form-group icon_form comments_form register_contact">

                                    <input name="repassword" type="password" class="form-control require" placeholder="Confirm Password">
                                
                                </div>						
                                <div class="login_remember_box">
                                    <label class="control control--checkbox">I agreed to the Terms and Conditions. 
                                        <input name="terms" type="checkbox">
                                        <span class="control__indicator"></span>
                                    </label>
                                </div>
                                <div>
                                    <button class="btn btn-warning w-100 input-rounded" type="submit">
                                        <span class="form-loading d-none px-5">
                                            <i class="fa fa-sync fa-spin"></i>
                                        </span>
                                        <span class='submit-text'>
                                            Submit
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  @include('visitor.layouts.footer')
  <script src="{{ asset('plugins/lobibox/js/lobibox.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/register.js') }}"></script>
</body>

</html>