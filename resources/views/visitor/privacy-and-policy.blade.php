@include('visitor.layouts.header')
    <div class="container-fluid top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-9">
                    <h1 class="ltr text-left">
                        Privacy And Policy
                    </h1>
                    <ol class="breadcrumb">
                        <li class="home">
                            <a href="/" class="home">{{ env('SITE_NAME') }}</a>
                        </li>
                        <li class="post post-page current-item">Privacy And Policy</li>
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
                        {!! $privacy_and_policy !!}
                        <br>
                        <br>
                        <ul>
                            <li>
                            Third party vendors, including Google, use cookies to serve ads based on a user's prior visits to this website or other websites.
                            </li>
                            <li>
Google's use of advertising cookies enables it and its partners to serve ads to you based on your visit to this sites and/or other sites on the Internet.
                             </li>
                             <li>
Users may opt out of personalized advertising by visiting Ads Settings. (Alternatively, you can opt out of a third-party vendor's use of cookies for personalized advertising by visiting www.aboutads.info.)
                             </li>
                             <li>
                             If you have not opted out of third-party ad serving, the cookies of other third-party vendors or ad networks may also be used to serve ads on this site.
                             </li>
                         </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('visitor.layouts.footer')