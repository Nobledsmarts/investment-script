@include('visitor.layouts.header')
<div class="container-fluid top-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h1 class="ltr text-left">
                    Verification
                </h1>
                <ol class="breadcrumb">
                    <li class="home">
                        <a href="/" class="home">{{ env('SITE_NAME') }}</a>
                    </li>
                    <li class="post post-page current-item">Verification</li>
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
                        <div class="login-form mt-1">
                            <div class="alert alert-success">{{ $message }}</div>
                            <div><br></div>
                            <a href="/login">
                                <button class="btn btn-primary" style="background:#337ab7;width:100%">
                                    Go To Login
                                </button>        
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('visitor.layouts.footer')