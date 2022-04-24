@include('visitor.layouts.header')
<div class="container-fluid top-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h1 class="ltr text-left">
                    Verify Token
                </h1>
                <ol class="breadcrumb">
                    <li class="home">
                        <a href="/" class="home">{{ env('SITE_NAME') }}</a>
                    </li>
                    <li class="post post-page current-item">Verify Token</li>
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
                            <h4>Enter The Token Sent To Your Email Address</h4>
                            <form method="post" enctype="multipart/form-data">  
                                @csrf
                                <div class="form-group">
                                    <label>Token</label>
                                    <input required type="text" name="token" class="form-control" placeholder="Enter token" value="{{ old('token') }}">
                                </div>
                                <input type="hidden" name="email" value="{{ session('email') }}">
                                <button type="submit" class="btn btn-primary w-100 btn-flat m-b-30 m-t-30" style="background:#337ab7;width:100%">Submit</button>
                                <div><br></div>
                                <div class="register-link m-t-15 text-center">
                                    <p>Don't have an account ? <a href="/register"> Sign up</a> | <a href="/login"> Back to login</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @include('visitor.layouts.general-scripts') --}}
@include('visitor.layouts.footer')