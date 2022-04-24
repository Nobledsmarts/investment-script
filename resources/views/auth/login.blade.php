@include('visitor.layouts.header')
<div class="container-fluid top-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h1 class="ltr text-left">
                    Login
                </h1>
                <ol class="breadcrumb">
                    <li class="home">
                        <a href="/" class="home">{{ env('SITE_NAME') }}</a>
                    </li>
                    <li class="post post-page current-item">Login</li>
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
                    @include('user.layouts.errors')
                    <div>
                        <br>
                    </div>
                    <div class="login-content card mt-1">
                        <div class="login-form">
                            <h4>Enter Your Details To Log In</h4>
                            <form method="post" enctype="multipart/form-data">  
                                @csrf
                                <div class="form-group">
                                    <label>Username</label>
                                    <input required type="text" name="login" class="form-control" placeholder="Enter User Name or Email address" value="{{ old('login') }}">
                                </div>
                                <div class="form-group">
                                    <label class="text-label">Password</label>
                                    <div class="input-group transparent-append" style="display:flex">
                                        <input name="password" type="password" value="{{ old('password') }}" class="form-control" id="validationDefaultUsername11" placeholder="Password" aria-describedby="inputGroupPrepend3" required="">
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
        
                                <button type="submit" class="btn btn-primary w-100 btn-flat m-b-30 m-t-30" style="background:#337ab7;width:100%">Submit</button>
                                <div><br></div>
                                <div class="register-link m-t-15 text-center">
                                    <p>Don't have an account ? <a href="/register"> Sign up</a> | <a href="/forgot-pass"> Forgot Password?</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container top80"></div>
{{-- @include('visitor.layouts.general-scripts') --}}
@include('visitor.layouts.footer')