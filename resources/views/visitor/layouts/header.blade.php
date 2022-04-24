<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="{{ asset('visitor/assets/style.css?z=4') }}" />
        <link rel="stylesheet" href="{{ asset('visitor/assets/theme.css') }}" />
        <script src="{{ asset('visitor/assets/jquery.min.js') }}"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:image" content="{{ asset('index/img/logo/fav.png') }}" />
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/new_structure/libraries/fontAwesome.min55c7.css?ver=feea3335b90751c281a90bf7dc0d1159') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/jqueryUid369.css?ver=728dd8a5fd2985ec0b87d728c01a8076') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/select20609.css?ver=2c0f107afdad77b32254fdeeb9c9c869') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/new_structure/libraries/popper_tippy.min3810.css?ver=cee0883c3737303f4995fcad52e4637a') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/xmFontsNew0669.css?ver=45f2927f1d32fa9fac6aa6fd027babc0') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/helpers9d88.css?ver=294d7c5aa584fd41bdb5500a76e72b61') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/accordion45e2.css?ver=64a78091385b674a841fe4f7c440dd3d') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/alertsbbc0.css?ver=bacac506316e55a523f3fbe7fafd36ca') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/calendar765d.css?ver=3c9a9f1d2c0b86a5b9c852ebe3349489') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/contactSectionb9b6.css?ver=397c57ce4e80a9d15723c3f2a02ae1c5') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/forms95ac.css?ver=d89487907ce7eac10d254d2afc257f13') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/iconsFlags4e30.css?ver=fe41c06cc6ab4858a39464350e8b295c') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/iconsGeneral2442.css?ver=8de1c615c86cee24d2ed019646727190') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/iconsPaymentsccee.css?ver=b90ba0b59d92a979a8fa6f64dd426beb') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/listingBlocks7b70.css?ver=dcd3803d64a68373e198ec485e8623b3') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/lists815f.css?ver=52a321e4cf5ccf20d375e4919e6369a5') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/livechatCustomdf1d.css?ver=b3f87af42788ce8f409ccdfa6f0cdcdc') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/modalsdb47.css?ver=48ddde9a8ac4fd1f94c05cb6cf93cb26') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/pagination0ce0.css?ver=b9355ee6fcde80651532e8be38339ffa') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/posts0b0c.css?ver=7b4a1c5d9d0cbd037af41fbb92c7d665') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/sidebar5be7.css?ver=d1d5813578896ab1232524e0d9560aae') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/tablescd13.css?ver=0d1ecb3c699fbb925e934e234361e3cd') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/tabs476a.css?ver=e1d5c71e4b27d59b5dc7ea8c612d4089') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/textblocksf64a.css?ver=50421e7f22633830566e8172d478234b') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/titleBar088b.css?ver=20d6e2ef3264df0c1d368c722d3f1150') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/tooltipPopover6a0a.css?ver=8207e6401f9d742787c3489c8058a78b') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/video53c1.css?ver=b07bd97117a57b5c79b64611b4cc14db') }}">
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/footer35da.css?ver=c6e629e6a41d1d4d08de114d25672392') }}">
        <title>{{$page_title}}</title>
        <meta name="description" content="Forex, cfd trading on stocks, stock indices, oil and gold on MT4 and MT5. Trade forex online with Empress Globe, a licensed forex broker." />
        <meta name="keywords" content="forex,forex trading,stock indices,stock trading,oil trading,gold trading,forex broker,mt5,mt4,xm,xm.com,technical analysis,nzdusd,macd,rsi,stochastics,ichimoku kinko hyo,usd,gbp,aud,nzd,cad,stocks,tech stocks,earnings,bank of england,boe,reserve bank of australia,employment,nonfarm payrolls,fed,jobs report,dovish,usdchf,week ahead,week ahead in markets,nfp,us jobs,us payrolls,us employment,us jobs report,meeting,preview,rba meeting,rba preview,boe meeting,boe preview,powell,federal reserve,dollar,fx,week ahead fx,yields,markets,jobs,inflation,taper,tapering,asset purchases,congress,infrastructure,unemployment benefits,full employment,ism manufacturing,ism services,pmi,lockdown,delta,rba qe,central bank,audusd,usdjpy,eurusd,aussie,australian dollar,british pound,boe ramsden,boe saunders,inflation expectations,furlough,boe rate hike,rbnz,rbnz rate increase,new zealand jobs,canada jobs,ecb minutes,usdcad,oil price,china pmi,sterling,pound sterling,analysis,forecast,weekly outlook,forex market,us dollar,equities,nasdaq futures,csi 300,gold,pound,euro,loonie,kiwi,delta variant,amazon.com,yen,franc,gdp,wti,oil,brent crude,gbpusd,moving average,fibonacci,trendline,ichimoku cloud,bollinger bands"/>
        <link rel="canonical" href="/" />
        <meta property="og:site_name" content="{{ env("SITE_NAME") }} | {{ env("SITE_NAME") }} is a licensed cryptocurrency investment platform, futures trading and CFD trading." />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="{{  $page_title }}" />
        <meta property="og:description" content="Forex, cfd trading on stocks, stock indices, oil and gold on MT4 and MT5. Trade forex online with Empress Globe, a licensed forex broker." />
        <meta property="og:url" content="https://www.empressgloble.com/" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:domain" content="www.empressgloble.com" />
        <meta name="twitter:title" content="{{ $page_title }}" />
        <meta name="twitter:description" content="Forex, cfd trading on stocks, stock indices, oil and gold on MT4 and MT5. Trade forex online with Empress Globe, a licensed forex broker." />
        <meta name="google" content="nositelinkssearchbox" />
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3931717213454464"
     crossorigin="anonymous"></script>
    </head>
        <style>
            #yt-widget[data-theme="dark"] .yt-servicelink, #yt-widget[data-theme="dark"] .yt-servicelink:first-letter{
                display : none !important;
            }
        </style>
    <body class="main-site xmbz hp-v17 loading">
        <div class="parent layout">
            <div class="">
                <div class="clearfix"></div>
                <div id="sb-live-education">
                    <div class="sb-live-education-wrapper text-center">
                        <div class="no_margin" >
                            <div id="ytWidget" class="hidden-sm"></div>
                            <script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=dark&autoMode=false" type="text/javascript"></script>
                            <!--<div id="google_translate_element" class="hidden-sm"></div>-->
                            
                            <!--<script type="text/javascript">-->
                            <!--    function googleTranslateElementInit() {-->
                            <!--        new google.translate.TranslateElement({-->
                            <!--            pageLanguage: 'en',-->
                            <!--            layout: google.translate.TranslateElement.InlineLayout.SIMPLE-->
                            <!--        }, 'google_translate_element');-->
                            <!--    }-->
                            <!--</script>-->
                            <!--<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>-->
                            <!--<div id='MicrosoftTranslatorWidget' class='Dark' style='color:white;background-color:#555555'></div>-->
                            <!--<script type='text/javascript'>-->
                            <!--    setTimeout(function () {-->
                            <!--        {-->
                            <!--            var s = document.createElement("script");-->
                            <!--            s.type = "text/javascript";-->
                            <!--            s.charset = "UTF-8";-->
                            <!--            s.src =-->
                            <!--                (location && location.href && location.href.indexOf("https") == 0 ? "https://ssl.microsofttranslator.com" : "http://www.microsofttranslator.com") +-->
                            <!--                "/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&ctf=False&ui=true&settings=Manual&from=";-->
                            <!--            var p = document.getElementsByTagName("head")[0] || document.documentElement;-->
                            <!--            p.insertBefore(s, p.firstChild);-->
                            <!--        }-->
                            <!--    }, 0);-->

                            <!--</script>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-canvas">
                <header>
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="header-top">
                            <div class="container">
                                <div class="hidden-xs hidden-sm xm-operated xmbz-operated">
                                    <p>This website is operated by <span translate="no">{{  env("SITE_NAME") }}</span> (IFSC)</p>
                                </div>
                                <ul class="buttons-nav hidden-xs hidden-sm">
                                    <li class="hidden-sm">
                                        <a href="/login" class="btn btn-white" target="_blank"> <i class="fa fa-lock"></i>Member Login </a>
                                    </li>
                                    
                                    <li class="hidden-sm"><a href="/support" class="btn btn-white"> Contact </a></li>
                                    <li class="hidden-sm"><a href="/register" class="btn btn-solid btn-red"> Open an Account </a></li>
                                    <!--<li class="languages hidden-sm">-->
                                        <!--<div id="google_translate_element" class="hidden-sm"></div>-->
                                        <!--<script type="text/javascript">-->
                                        <!--    function googleTranslateElementInit() {-->
                                        <!--        new google.translate.TranslateElement({-->
                                        <!--            pageLanguage: 'en',-->
                                        <!--            layout: google.translate.TranslateElement.InlineLayout.SIMPLE-->
                                        <!--        }, 'google_translate_element');-->
                                        <!--    }-->
                                        <!--</script>-->
                                        <!--<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>-->
                                    <!--</li>-->
                                </ul>
                            </div>
                        </div>
                        <div id="main-nav" class="container-fluid">
                            <div class="container">
                                <div class="row">
                                    <div class="toggle-bar visible-xs visible-sm">
                                        <button class="toggleLeftNav"><i class="fa fa-bars"></i><span>Menu</span> <i class="fa fa-times"></i></button>
                                        <!--<button class="toggleRightNav" onclick="javascript:void(0)">-->
                                        <!--    <div id="google_translate_element_2"></div>-->
                                        <!--    <script type="text/javascript">-->
                                        <!--        function googleTranslateElementInitt() {-->
                                        <!--            new google.translate.TranslateElement({-->
                                        <!--                pageLanguage: 'en',-->
                                        <!--                layout: google.translate.TranslateElement.InlineLayout.SIMPLE-->
                                        <!--            }, 'google_translate_element_2');-->
                                        <!--        }-->
                                        <!--    </script>-->
                                        <!--    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInitt"></script>-->
                                        <!--</button>-->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="toggle-bar-line"></div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="center-logo mobile">
                                        <h1 class="pagetitle">
                                            Forex
                                        </h1>
                                        <a class="navbar-brand logo" href="/" style="display:flex; justify-content:center;">
                                            <img src="{{ asset('index/img/logo/fav.png') }}" alt="{{ env('SITE_NAME') }} Logo" style="width:60px; height:65px" />
                                            <h3 style="display:flex;align-items:center;color:#fff; text-transform:uppercase; font-weight:bolder" translate="no">{{ env('SITE_NAME') }}</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <ul id="languages"></ul>
                            <div class="collapse navbar-collapse main-nav" id="navigation-collapse">
                                <div class="container">
                                    <div class="navbar-header hidden-xs hidden-sm">
                                        <a class="navbar-brand logo" href="/" style="display:flex; justify-content:center;"> <img src="{{ asset('index/img/logo/fav.png') }}" alt="{{ env('SITE_NAME') }} Logo" style="width:60px" />
                                            <h3 style="display:flex;align-items:center;color:#fff; font-weight:bolder" translate="no">{{ env('SITE_NAME') }}</h3>
                                        </a>
                                    </div>
                                    <ul id="main-nav" class="nav navbar-nav navbar-right default nav-logo hidden-xs hidden-sm">
                                        <li class="main_nav_home">
                                            <a href="/"> <i class="fa fa-home"></i>Home </a>
                                        </li>
                                        <li class="main_nav_home">
                                            <a href="/plans"> <i class="fa fa-home"></i>Plans </a>
                                        </li>
                                        <li class="main_nav_about">
                                            <a href="/about-us"> <i class="fa fa-briefcase"></i>About Us </a>
                                            <div class="dropdown">
                                                <div class="container">
                                                    <div class="box hidden-xs hidden-sm">
                                                        <span>About Us</span>
                                                        <p>
                                                           <span translate="no"> {{ env('SITE_NAME') }} </span> sets high standards to its services because quality is just as decisive for us as for our clients. We believe that versatile financial services require versatility in thinking
                                                            and a unified policy of business principles.
                                                        </p>
                                                        <p>Our mission is to keep pace with global market demands and approach our clients’ investment goals with an open mind.</p>
                                                        <div class="dis20"></div>
                                                        <p>Risk Warning: Trading on margin products involves a high level of risk.</p>
                                                    </div>
                                                    <div class="line hidden-xs hidden-sm"></div>
                                                    <div class="wrap capitalize_text">
                                                        <div class="block">
                                                            <span> <i class="xmFont xmUser-profile"></i>About <span translate="no">{{ env('SITE_NAME') }} </span> </span>
                                                            <ul>
                                                                <li class="menu-about"><a href="/about-us"> Who is <span translate="no">{{ env('SITE_NAME') }}</span>  Group? </a></li>
                                                                <li class="menu-regulation"><a href="/regulation"> Regulation </a></li>
                                                                <li class="menu-legal-documents"><a href="/legal-documents"> Legal Documents </a></li>
                                                                <li class="menu-faq"><a href="faq"> FAQ </a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="block">
                                                            <div class="hidden-xs hidden-sm dis50"></div>
                                                            <ul>
                                                                <li class="menu-company-news"><a href="/news"> News </a></li>
                                                                <li class="menu-foundation"><a href="xm-csr"> Corporate Social Responsibility </a></li>
                                                                <li class="menu-support"><a href="/support"> Contact </a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="block">
                                                            <div class="hidden-xs hidden-sm dis50"></div>
                                                            <ul>
                                                                <li class="menu-careers"><a href="/careers"> Careers </a></li>
                                                                <li><a href="/awards"> <span translate="no">{{ env('SITE_NAME') }}</span> Awards </a></li>
                                                                <li><a href="/complaints"> Complaints </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="nav-bottom-bar hidden-xs hidden-sm">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <p>Access the global markets instantly with the <span translate="no">{{ env('SITE_NAME') }}</span> MT4 or MT5 trading platforms.</p>
                                                                </div>
                                                                <div class="col-md-4"><a href="/register" class="btn btn-solid btn-full btn-red"> Open an Account </a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul id="main-nav" class="nav navbar-nav navbar-right default visible-xs visible-sm capitalize_text">
                                        <li>
                                            <a href="/"> <i class="fa fa-home"></i>Home </a>
                                        </li>
                                        <li>
                                            <a href="/login" target="_blank"> <i class="fa fa-lock"></i>Member Login </a>
                                        </li>
                                        <li>
                                            <a href="/user/deposit" target="_blank"> <i class="fa fa-credit-card"></i>Deposit Funds </a>
                                        </li>
                                        <li>
                                            <a class="navbar-nav__toggleArrow" data-toggle="collapse" href="#aboutMenu" role="button" aria-expanded="false" aria-controls="aboutMenu">
                                                <i class="fa fa-briefcase" aria-hidden="true"></i>About Us <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                            </a>
                                            <div id="aboutMenu" class="collapse">
                                                <ul class="navbar-nav__list">
                                                    <li class="navbar-nav__listTitle">About <span translate="no">{{ env("SITE_NAME") }}</span> </li>
                                                    <li>
                                                        <a href="/about-us"> <i class="fa fa-briefcase"></i>Who is <span translate="no">{{ env("SITE_NAME") }}</span> ? </a>
                                                    </li>
                                                    <li style="display: none">
                                                        <a href="xm-csr"> <i class="fa fa-heart"></i>Corporate Social Responsibility </a>
                                                    </li>
                                                    <li style="display: none">
                                                        <a href="/careers"> <i class="fa fa-users"></i>Careers </a>
                                                    </li>
                                                    <li style="display: none">
                                                        <a href="/complaints"> <i class="fa fa-info-circle"></i>Complaints </a>
                                                    </li>
                                                    <li>
                                                        <a href="/support"> <i class="fa fa-envelope"></i>Contact </a>
                                                    </li>
                                                    <li>
                                                        <a href="/terms"> <i class="fa fa-gavel"></i>Regulation </a>
                                                    </li>
                                                    <li>
                                                        <a href="/plans"> <i class="fa fa-briefcase"></i>Investment Plans </a>
                                                    </li>
                                                    <!--<li style="display: none">-->
                                                    <!--    <a href="legal-documents"> <i class="fa fa-file-text"></i>Legal Documents </a>-->
                                                    <!--</li>-->
                                                    <li>
                                                        <a href="/faq"> <i class="fa fa-question-circle"></i>FAQ </a>
                                                    </li>
                                                    <li>
                                                        <a href="/news"> <i class="fa fa-list-alt"></i> News </a>
                                                    </li>
                                                    <li style="display: none">
                                                        <a href="xm-awards"> <i class="fa fa-trophy"></i><span translate="no">{{ env('SITE_NAME') }}</span> Awards </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li style="display: none">
                                            <a href="/partners"> <i class="fa fa-refresh"></i>Partnerships </a>
                                        </li>
                                    </ul>
                                    <div class="navbar-nav__buttons visible-xs visible-sm">
                                        <a href="/login" class="btn btn-block navbar-nav__buttons--primary" target="_blank"> <i class="fa fa-lock"></i>Member Login </a>
                                        <a href="/register" class="js-livechatOpen btn btn-block navbar-nav__buttons--secondary"> <i class="fa fa-user"></i>Open Account </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </header>