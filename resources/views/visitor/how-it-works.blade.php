@include('visitor.layouts.header')
    <div class="container-fluid top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-9">
                    <h1 class="ltr text-left">
                        How It Works
                    </h1>
                    <ol class="breadcrumb">
                        <li class="home">
                            <a href="/" class="home">{{ env('SITE_NAME') }}</a>
                        </li>
                        <li class="post post-page current-item">How It Works</li>
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
                    <div class="col-12" style="float:none">
                        {!! $how_it_works !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('visitor.layouts.footer')