@include('visitor.layouts.header')
<style>
    .
</style>
<div class="container-fluid top-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h1 class="ltr text-left">
                    Support
                </h1>
                <ol class="breadcrumb">
                    <li class="home">
                        <a href="/" class="home">{{ env('SITE_NAME') }}</a>
                    </li>
                    <li class="post post-page current-item">Support</li>
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
<div class="container top80">
    <div class="row">
        <div class="col-md-8">
            <h2>Contact Us</h2>
            <p>
                <i class="fa fa-warning red"></i> We are here to help you easily find the exact answers to your questions and offer you the best user experience! Our comprehensive FAQ page provides you with clear guidance at any time and is
                solely dedicated to answering all your questions within a matter of minutes. <br />
                <br />
                If you can't find the answer you are looking for on our <a href="/faq">FAQ</a> page, please feel free to contact us by email or live chat.
            </p>
            <div class="dis20"></div>
            <h3>Registered Address</h3>
            <div class="dis20"></div>
            <p>{{ $settings->site_address }}</p>
            <hr />

            <h3>Online Support</h3>
            <div class="dis20"></div>
            <i class="fa fa-clock-o red"></i> Working hours: 24/5 GMT<br />
            <i class="fa fa-envelope red"></i> <a href="mailto:support&#64;{{ Request::getHost() }}" class="black">support&#64;{{ Request::getHost() }}</a>
            <hr />
            <h3>Phone Support</h3>
            <div class="dis20"></div>
            <i class="fa fa-clock-o red"></i> Working hours: 24/5 GMT<br />
            <i class="fab fa-whatsapp red"></i> {{ $settings->whatsapp_number }}<br />
        </div>

        <div class="col-md-4">
            <div class="sidebar">
                <a href="/register" class="btn btn-solid btn-full btn-red"> Open an Account<small>Forex Trading involves significant risk to your invested capital</small> </a>
                <a href="/login" class="btn btn-solid btn-full btn-gray top10"> Member Login</a>
                <ul class="menu top30">
                    <li>
                        <h3>About Us</h3>
                    </li>
                    <li>
                        <a href="/about"> <i class="fa fa-arrow-right"></i> Who is {{ env('SITE_NAME') }}? </a>
                    </li>
                    <li>
                        <a href="/terms"> <i class="fa fa-arrow-right"></i> Regulation </a>
                    </li>

                    <li>
                        <a href="/news">
                            <i class="fa fa-arrow-right"></i>
                            News
                        </a>
                    </li>

                    <li>
                        <a href="/faq"> <i class="fa fa-arrow-right"></i> FAQ </a>
                    </li>

                    <li>
                        <a href="/support" class="active"> <i class="fa fa-arrow-right"></i> Contact </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container top80"></div>
{{-- @include('visitor.layouts.general-scripts') --}}
@include('visitor.layouts.footer')