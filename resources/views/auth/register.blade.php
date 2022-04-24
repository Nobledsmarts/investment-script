@include('visitor.layouts.header')
<div class="container-fluid top-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h1 class="ltr text-left">
                    Register
                </h1>
                <ol class="breadcrumb">
                    <li class="home">
                        <a href="/" class="home">{{ env('SITE_NAME') }}</a>
                    </li>
                    <li class="post post-page current-item">Register</li>
                </ol>
            </div>

            <div class="col-xs-6 col-sm-3 hidden-xs hidden-sm hidden-l-sm">
                <div class="option-nav">
                    <a href="/support">
                        <i class="contact"></i><span>Contact Us</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="main-wrapper" style="
    min-height: 400px;
    width: 100%;
    position: relative;
    display: flex;
    background: #f0f0f5;
">
    <div class="unix-login" style="width:100%; margin:auto">
        <div class="container-fluid">
            <div class="row justify-content-center" align="center">
                <div class="col-lg-6" style="float:none">
                    <br>
                    @include('user.layouts.errors')
                    <div>
                        <br>
                    </div>
                        <div class="login-form mt-1">
                            <div class="login-form">
                                <h4>Enter Your Details To Sign Up</h4>
                                <form method="post" enctype="multipart/form-data">  
                                    @csrf
                                    <div class="form-group">
                                        <label>User Name</label>
                                        <input required type="text" name="username" class="form-control" placeholder="User Name" value="{{ old('username') }}">
                                    </div>
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input required  type="text" name="firstname" class="form-control" placeholder="First Name" value="{{ old('firstname') }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Middle Name</label>
                                        <input type="text" name="middlename" class="form-control" placeholder="Middle Name" value="{{ old('middlename') }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input required  type="text" name="lastname" class="form-control" placeholder="Last Name" value="{{ old('lastname') }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input required  type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">Password</label>
                                        <div class="input-group transparent-append" style="display:flex">
                                            <input style="width:1%" name="password" type="password" value="{{ old('password') }}" class="form-control" id="validationDefaultUsername11" placeholder="Password" aria-describedby="inputGroupPrepend3" required="">
                                            <div class="input-group-append c-pointer form-show-password">
                                                <span class="input-group-text text-secondary d-none show-eye">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </span>
                                                <span class="input-group-text text-secondary hide-eye">
                                                    <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-label">Repeat Password</label>
                                        <div class="input-group transparent-append" style="display:flex">
                                            <input style="width:1%" name="repassword" type="password" value="{{ old('repassword') }}" class="form-control" id="validationDefaultUsername11" placeholder="Password" aria-describedby="inputGroupPrepend3" required="">
                                            <div class="input-group-append c-pointer form-show-password">
                                                <span class="input-group-text text-secondary d-none show-eye">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </span>
                                                <span class="input-group-text text-secondary hide-eye">
                                                    <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Referral ID</label>
                                        <input  type="text" name="uid" class="form-control" placeholder="Referral ID" value="{{ old('uid') }}">
                                    </div>
                                    <div class="">
                                        <label>
                                            <input required name="terms" type="checkbox"> Agree to the terms and policy
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" style="background:#337ab7;width:100%">Register</button>
                                    <div class="register-link m-t-15 text-center">
                                        <p>Already have account ? <a href="/login"> Sign in</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container-fluid" style="background: #f0f0f5;width:100%;padding-top:80px"></div>
@include('visitor.layouts.footer')