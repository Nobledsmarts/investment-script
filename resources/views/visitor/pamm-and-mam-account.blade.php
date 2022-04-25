@include('visitor.layouts.head')
        @include('visitor.layouts.header')
            <main>
            <div id="slider" class="inspiro-slider dots-creative" data-height-xs="360">

<div class="slide kenburns" style="background-image:url({{ asset('visitor/img/jjaak.png') }});">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="slide-captions text-center text-light">

            <span class="strong">{{ env('SITE_NAME_SHORT') }}</span>
            <h1 style="color: #fff !important">Pamm and Mam Account</h1>

        </div>
    </div>
</div>

</div>



<section class="t-center" style="padding: 0; overflow: hidden;">
<div class="tradingview-widget-container" style="width: 100%; height: 72px;">
    <iframe scrolling="no" allowtransparency="true" frameborder="0"
        src="https://s.tradingview.com/embed-widget/tickers/?locale=en#%7B%22symbols%22%3A%5B%7B%22proName%22%3A%22FOREXCOM%3ASPXUSD%22%2C%22title%22%3A%22S%26P%20500%22%7D%2C%7B%22proName%22%3A%22FOREXCOM%3ANSXUSD%22%2C%22title%22%3A%22Nasdaq%20100%22%7D%2C%7B%22proName%22%3A%22FX_IDC%3AEURUSD%22%2C%22title%22%3A%22EUR%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3ABTCUSD%22%2C%22title%22%3A%22BTC%2FUSD%22%7D%2C%7B%22proName%22%3A%22BITSTAMP%3AETHUSD%22%2C%22title%22%3A%22ETH%2FUSD%22%7D%5D%2C%22colorTheme%22%3A%22light%22%2C%22isTransparent%22%3Afalse%2C%22width%22%3A%22100%25%22%2C%22height%22%3A72%2C%22utm_source%22%3A%22ulscapital.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22tickers%22%7D"
        style="box-sizing: border-box; height: 72px; width: 100%;"></iframe>


    <style>
    .tradingview-widget-copyright {
        font-size: 13px !important;
        line-height: 32px !important;
        text-align: center !important;
        vertical-align: middle !important;
        font-family: 'Trebuchet MS', Arial, sans-serif !important;
        color: #9db2bd !important;
    }

    .tradingview-widget-copyright .blue-text {
        color: #2196f3 !important;
    }

    .tradingview-widget-copyright a {
        text-decoration: none !important;
        color: #9db2bd !important;
    }

    .tradingview-widget-copyright a:visited {
        color: #9db2bd !important;
    }

    .tradingview-widget-copyright a:hover .blue-text {
        color: #38acdb !important;
    }

    .tradingview-widget-copyright a:active .blue-text {
        color: #299dcd !important;
    }

    .tradingview-widget-copyright a:visited .blue-text {
        color: #2196f3 !important;
    }
    </style>
</div>
</section>

<style>
p,
span,
div {
font-family: 'Lora', serif !important;
}

.owl9ikem p,
.owl9ikem li {
font-size: 14px;
}
</style>

<section style="padding-top:40px; padding-bottom: 20px;">
<div class="container">
    <div class="heading-text heading-line text-center">
        <p data-animate="zoomIn" class="tup">{{ env('SITE_NAME_SHORT') }}</p>
    </div>
    <div class="row">
        <div class="col-lg-12 owl9ikem" data-animate="bounceInDown">
            <h4 style="font-size: 25px; text-align: center" data-animate="zoomIn" class="tup">PAMM/MAM
                INVESTMENT PACKAGE
            </h4>
            <p class="">
                PAMM (Percentage Allocation Management Module or sometimes Percentage Allocation Money
                Management) is a popular Forex broker extension that allows traders and asset managers to
                manage
                investors' money. Money Managers trade Forex accounts of the Investors via PAMM/MAM. The
                module
                simplifies and secures the relations between Investors and the Broker. <br> <br>


                The PAMM/MAM investment package is a unique product that allows investors to earn without
                having
                to
                actually trade Forex themselves.
                You can invest in the Forex PAMM/MAM investment pacakge, {{ env('SITE_NAME_SHORT') }} will
                receive a percentage of the
                profits they earn from trading with your funds as a commission.

            </p>



            <p>The PAMM service has been one of the most in-demand financial instruments in 2020 with a
                turnover of over $92Bn during the first nine months of the year. {{ env('SITE_NAME_SHORT') }}                            continues to
                improve and refine the service, striving to make it as transparent and understandable as
                possible for customers. As part of the next stage of operations, the&nbsp;PAMM account
                rating formula has been upgraded.
            </p>

            <p>The method used to calculate the growth rate for a specific period has been updated in
                order to exclude being placed in the top rating of PAMM accounts that have not been
                traded for a long time. Now, the final calculation of positive growth for a specific
                period will not include data for the most recent period:</p>

            <ul>
                <li>An annual calculation will not include the last quarter</li>
                <li>A six-month or quarterly calculation will not include the last month</li>
                <li>A Weekly calculation will not include the last week</li>
            </ul>

            <p>Please be advised that calculations using the updated rating formula will begin on the
                28<sup>th</sup> of October at 13:00 (GMT+3).&nbsp; You are kindly requested to take this
                information into account when planning your trading and investment activity.</p>
        </div>
    </div>

    <style>
    .icon-box p {
        font-size: 13px !important;
    }

    .icon-box {
        height: 320px;
        margin-top: 0 !important;
        margin-bottom: 10px;
    }
    </style>

    <div class="row" style="margin-top: 40px">
        <div class="col-sm-12">
            <h3 data-animate="zoomIn" class="tup" style="text-align:center">For investors</h3>
        </div>
        <div class="col-lg-4">
            <div class="icon-box effect large center process">
                <div class="icon"> <a href="#"><img style="max-width: 100%; height: 100px"
                            src="{{ asset('visitor/img/pamm-arrow-top.svg') }}" /></a> </div>
                <h3>Return</h3>
                <p>The potential of the Forex market is unlitmited. You can earn high returns by investing
                    in a PAMM investment package without being skilled at trading.
                </p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="icon-box effect large center process">
                <div class="icon"> <a href="#"> </a><img style="max-width: 100%; height: 100px"
                        src="{{ asset('visitor/img/pamm-mognifier.svg') }}" /></div>
                <h3>Transparency</h3>
                <p>The PAMM service has undergone a compliance check by an international auditing firm. You
                    can see the results of the audit for yourself in your {{ env('SITE_NAME_SHORT') }} investor
                    dashboard.</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="icon-box effect large center process">
                <div class="icon"> <a href="#"> </a><img style="max-width: 100%; height: 100px"
                        src="{{ asset('visitor/img/pamm-scale.svg') }}" /></div>
                <h3>Control</h3>
                <p>You can withdraw your profits, or all of your funds, at any moment via your {{ env('SITE_NAME_SHORT') }} investor dashboard. You can
                    also spread your risks by investing in several different PAMM investment packages.</p>
            </div>
        </div>
    </div>
</div>
</section>

<style>
.yuwj8jwkk2ikwlw .in-button-app img {
width: 100px;
height: 100px;
}
</style>
<!-- section content begin -->
<div id="kkssks"
class="uk-section uk-section-muted uk-padding-remove-vertical uk-background-contain uk-background-center-right uk-background-image@m"
style="background-image: url({{ asset('visitor/img/in-wave-platformbg.jpg') }});">
<div class="uk-container in-wave-18">
    <div class="uk-grid-large uk-flex uk-flex-middle uk-grid" data-uk-grid="">
        <div class="uk-width-1-2@m uk-first-column">
            <div class="uk-margin-bottom hide-on-mobile yuwj8jwkk2ikwlw">
                <a href="#kkssks" class="uk-button in-button-app">
                    <img class="uk-align-center btc-crypto-logo" src="{{ asset('visitor/img/awards/alkar.svg') }}"
                        data-src="{{ asset('visitor/img/monee-payment-mastercard.svg') }}" alt="monee-mastercard" width="103"
                        height="32" data-uk-img="">
                </a>
                <a href="#kkssks" class="uk-button in-button-app uk-margin-medium-left">
                    <img class="uk-align-center" src="{{ asset('visitor/img/awards/brandywine-realty-24808.svg') }}"
                        data-src="{{ asset('visitor/img/monee-payment-paypal.svg') }}" alt="monee-paypal" width="103" height="32"
                        data-uk-img="">
                </a>
                <a href="#kkssks" class="uk-button in-button-app uk-margin-medium-left uk-visible@m">
                    <img class="uk-align-center" src="{{ asset('visitor/img/awards/multex-investor.svg') }}"
                        data-src="{{ asset('visitor/img/monee-payment-unionpay.svg') }}" alt="monee-unionpay" width="103"
                        height="32" data-uk-img="">
                </a>
            </div>
            <hr class="hide-on-mobile" style="margin-top: 10px;">
            <h1 class="uk-margin-remove tup" style="font-size: 18px"> As a leading global asset manager we
                are
                <span class="in-highlight">dedicated to creating long-term value </span> for our
                clients.
            </h1>
            <p class="uk-margin-medium-bottom in-margin-remove-bottom@s"> Aligning our brand with those who
                share our values and ambition helps us to strengthen
                and build our business around the world. It is also one of the ways that we are able to
                support the communities in which we operate.
                Our partnerships reflect our belief in continuous development, performance and
                sustainable growth – and we aim to inspire excellence in whatever we put our name to.</p>
        </div>
        <div class="uk-width-1-2@m">
            <img class="uk-align-center uk-align-left@m" src="{{ asset('visitor/img/in-wave-mockup-5.png') }}" alt="wave-mockup"
                width="533" height="330">
        </div>
    </div>
</div>
</div>
<!-- section content end -->

<section style="padding-top: 25px; padding-bottom: 30px;">
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-5">
            <div class="heading-text heading-section mt-5">
                <h4 style="font-size: 20px" class="tup m-b-0">Lucrative Investment
                    opportunity at your fingertips.</h4>
                <p style="font-size: 15px; font-weight: 400;">
                    The PAMM account features a management module that distributes the sizes of trades
                    according
                    to an allocation percentage. This solution is offered by many forex brokers for
                    investors
                    and fund managers. With a PAMM account, an investor can also allocate a percentage of h
                    is
                    account to one or more managers.
                    <br>
                    We provide the PAMM/MAM investment package to our investor across the world. Our
                    breadth of investment capabilities is extensive and among the most innovative within the
                    Forex
                    market. Our investors want rapid asset growth, but have a limited capacity to absorb
                    downside
                    risk. Risk is our scarce resource, to be deployed where it will earn the highest return.
                </p>
            </div>
        </div>

        <div class="col-lg-7">
            <img alt="" style="width: 100% !important; height: 600px; object-fit: cover;"
                src="{{ asset('visitor/site-images/compressed-assets/image-7-compressed.jpg') }}">
        </div>
    </div>

    <div class="uk-width-1-1 uk-margin-medium-top">
        <div class="uk-grid-divider uk-grid" data-uk-grid="">
            <div class="uk-width-auto@m uk-flex uk-flex-middle uk-first-column jc-sm">
                <p class="uk-text-lead uk-text-muted uk-margin-right">As seen on</p>
            </div>
            <div class="uk-width-expand@m f-cont_888ji98">
                <div class="uk-grid-medium uk-child-width-1-4@s uk-child-width-1-5@m uk-text-center in-client-logo-3 uk-grid"
                    data-uk-grid="">
                    <div class="uk-tile uk-tile-default uk-first-column">
                        <img class="uk-margin-remove" src="{{ asset('visitor/img/in-wave-media-1.svg') }}" alt="client-logo"
                            width="147" height="42">
                    </div>
                    <div class="uk-tile uk-tile-default">
                        <img class="uk-margin-remove" src="{{ asset('visitor/img/in-wave-media-2.svg') }}" alt="client-logo"
                            width="147" height="42">
                    </div>
                    <div class="uk-tile uk-tile-default">
                        <img class="uk-margin-remove" src="{{ asset('visitor/img/in-wave-media-3.svg') }}" alt="client-logo"
                            width="147" height="42">
                    </div>
                    <div class="uk-tile uk-tile-default">
                        <img class="uk-margin-remove" src="{{ asset('visitor/img/in-wave-media-4.svg') }}" alt="client-logo"
                            width="147" height="42">
                    </div>
                    <div class="uk-tile uk-tile-default uk-visible@m">
                        <img class="uk-margin-remove" src="{{ asset('visitor/img/in-wave-media-5.svg') }}" alt="client-logo"
                            width="147" height="42">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<div class="uk-section p-t-0" data-animate="zoomIn">
<div class="uk-container">
    <div class="uk-grid">
        <div class="uk-width-1-1">
            <div class="uk-card uk-card-secondary uk-background-center-right uk-background-contain uk-background-image@m"
                style="background-image:linear-gradient(to bottom, rgb(117 127 187 / 52%), rgb(1 44 106)),
        url({{ asset('visitor/img/pamm.jpg') }}) !important; background-size: cover;">
                <!-- {{ asset('visitor/img/monee-content-image7.jpg') }} -->
                <div class="uk-card-body" style="padding-top: 70px !important">
                    <div class="uk-grid">
                        <div class="uk-width-2-2@m uk-margin-small-left">
                            <h2 class="uk-margin-remove-bottom"
                                style="text-transform: uppercase; color: #fff !important; font-size: 23px;">
                                Want to become a
                                {{ env('SITE_NAME_SHORT') }} PAMM Investor?</h2>
                            <p class="uk-margin-small-top" style="color: #fff !important;">
                                The {{ env('SITE_NAME_SHORT') }} PAMM account Managers and Investors' capital
                                are all invested in the Manager’s
                                account. Their shares of the total investment and therefore their potential
                                share of any profit/ losses are based on the amount of capital they invest.
                                <br>
                                If a Manager is in profit when positions on the PAMM Manager account are
                                closed and the account balance increases, the profit will be distributed
                                between all Investors in the account based on their investments.
                            </p> <a style="background-color: #fff !important; color: #012c6d !important"
                                class="uk-button uk-button-primary uk-border-rounded" href="#">Open an
                                account now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<section class="p-b-0 p-t-0">
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6"> <img alt="" style="width: 100% !important" src="{{ asset('visitor/img/pamm_tmp_1.png') }}"> </div>
        <div class="col-lg-6">
            <div class="heading-text heading-section mt-5">
                <h4 class="tup" style="font-size: 20px">Understanding how the {{ env('SITE_NAME_SHORT') }} PAMM
                    Program Works</h4>
                <p style="font-size: 14px; font-weight: 400">As a {{ env('SITE_NAME_SHORT') }} PAMM investor,
                    you open a
                    {{ env('SITE_NAME_SHORT') }} PAMM
                    Account and allocate funds
                    to your investment Account – this is known as the Manager's Capital. When a PAMM Manager
                    successfully manages investors' funds by generating a profit, the Manager and the
                    investor(s) will receive a
                    Success Fee – a pre-agreed percentage of the investor's share of the profit.
                    <br> <br>
                    PAMM Managers trade using invested capital (Manager's Capital) and the funds of any
                    investors in the account. Simply put, any profits and losses generated on the PAMM
                    Manager's Account will be shared between all accounts that are invested in the PAMM
                    Manager on a proportional basis.
                </p>
            </div>
        </div>
    </div>
</div>
</section>

<section style="padding-top:0px; padding-bottom: 20px;">
<div class="container">

    <!-- TradingView Widget BEGIN -->
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript"
            src="../s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
        {
            "title": "Stocks",
            "width": "100%",
            "height": 450,
            "locale": "en",
            "symbolsGroups": [{
                    "name": "Financial",
                    "symbols": [{
                            "name": "NYSE:JPM",
                            "displayName": "Jpmorgan Chase & Co"
                        },
                        {
                            "name": "NYSE:WFC",
                            "displayName": "Wells Fargo Co New"
                        },
                        {
                            "name": "NYSE:BAC",
                            "displayName": "Bank Amer Corp"
                        },
                        {
                            "name": "NYSE:HSBC",
                            "displayName": "Hsbc Hldgs Plc"
                        },
                        {
                            "name": "NYSE:C",
                            "displayName": "Citigroup Inc"
                        },
                        {
                            "name": "NYSE:MA",
                            "displayName": "Mastercard Incorporated"
                        }
                    ]
                },
                {
                    "name": "Technology",
                    "symbols": [{
                            "name": "NASDAQ:AAPL",
                            "displayName": "Apple"
                        },
                        {
                            "name": "NASDAQ:GOOGL",
                            "displayName": "Google Inc"
                        },
                        {
                            "name": "NASDAQ:MSFT",
                            "displayName": "Microsoft Corp"
                        },
                        {
                            "name": "NASDAQ:FB",
                            "displayName": "Facebook Inc"
                        },
                        {
                            "name": "NYSE:ORCL",
                            "displayName": "Oracle Corp"
                        },
                        {
                            "name": "NASDAQ:INTC",
                            "displayName": "Intel Corp"
                        }
                    ]
                },
                {
                    "name": "Services",
                    "symbols": [{
                            "name": "NASDAQ:AMZN",
                            "displayName": "Amazon Com Inc"
                        },
                        {
                            "name": "NYSE:BABA",
                            "displayName": "Alibaba Group Hldg Ltd"
                        },
                        {
                            "name": "NYSE:T",
                            "displayName": "At&t Inc"
                        },
                        {
                            "name": "NYSE:WMT",
                            "displayName": "Wal-mart Stores Inc"
                        },
                        {
                            "name": "NYSE:CHL",
                            "displayName": "China Mobile Limited"
                        },
                        {
                            "name": "NYSE:V",
                            "displayName": "Visa Inc"
                        }
                    ]
                }
            ],
            "colorTheme": "light"
        }
        </script>
    </div>
    <!-- TradingView Widget END -->
    <!-- TradingView Widget END -->

</div>
</section>

<!-- <section style="padding-top:40px; padding-bottom: 20px;">
<div class="container">


    <div class="row">
        <div class="col-lg-12" data-animate="bounceInDown">
            <h4 style="font-size: 25px; text-align: center" data-animate="zoomIn" class="tup">What is a PAMM
                account?</h4>
            <p class="">
                The PAMM account features a management module that distributes the sizes of trades according
                to an allocation percentage. This solution is offered by many forex brokers for investors
                and fund managers. With a PAMM account, an investor can also allocate a percentage of h is
                account to one or more managers.

                <br> <br>
                The manager's PAMM account is a large "main account", whose capital is equal to the sum of
                the sub-accounts. The manager's trades are automatically replicated in the sub-accounts
                according to a percentage basis. For example, if the trader makes a 100-lot trade on the
                EURUSD, the trade is divided among the individual sub-accounts (clients) into smaller parts
                based on the percentage of equity of each sub-account in relation to the master account.
                This means that if the size of an individual sub-account is equal to 1% of the main
                account's equity, the size of the trade on this account will be 1 lot (1% of 100 lots).
            </p>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12" data-animate="bounceInDown">
            <h4 style="font-size: 25px; text-align: center" data-animate="zoomIn" class="tup">What is a MAM
                account?</h4>
            <p class="">
                The MAM account should not be confused with the MetaQuotes multi-terminal system, which has
                its limitations. A MAM account allows our accounts managers to use the percentage allocation
                method like a
                PAMM account, but it provides greater flexibility to allocate the trades and adjust the risk
                of each sub-account based on the clients' risk profiles.

                <br> <br>
                For example, the manager can allocate trades on a fixed basis, which means that he can
                define the number of lots traded by each individual account. This fixed allocation can also
                be done using a LAMM (Lot Allocation Management Module) account. The manager can also change
                the amount of leverage applied to the sub-accounts if his clients want to take on a greater
                level of risk.
            </p>

        </div>
    </div>
</div>
</section> -->





<!-- section content begin -->
<div data-animate="fadeInLeft" class="uk-section exclude-section">
<div class="uk-container">
    <div class="uk-grid">
        <div class="uk-width-1-1">
            <div class="uk-card uk-card-default uk-background-center-right uk-background-contain uk-background-image@m"
                style="background-image: url({{ asset('visitor/img/in-cta-background.png') }});">
                <div class="uk-card-body">
                    <div class="uk-grid uk-flex-middle" data-uk-grid="">
                        <div class="uk-width-1-1 uk-width-expand@m uk-first-column">
                            <h3>Lucrative Investment opportunity at your fingertips.</h3>
                        </div>
                        <div class="uk-width-auto"> <a
                                class="uk-button uk-button-primary uk-button-large uk-border-rounded"
                                href="secured/auth/create-new-account.html">Open an Account</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div> <!-- section content end -->


<style>
section.pricing {
background: #007bff;
background: linear-gradient(to right, #012c6dc2, #012c6d91), url({{ asset('visitor/img/jjaak.png') }}) no-repeat;
background-position: center;
background-size: cover;
}

.pricing .card {
border: none;
border-radius: 1rem;
transition: all 0.2s;
box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.pricing hr {
margin: 1.5rem 0;
}

.pricing .card-title {
margin: 0.5rem 0;
font-size: 0.9rem;
letter-spacing: .1rem;
font-weight: bold;
}

.pricing .card-price {
font-size: 3rem;
margin: 0;
}

.pricing .card-price .period {
font-size: 0.8rem;
}

.pricing ul li {
margin-bottom: 1rem;
}

.pricing .text-muted {
opacity: 0.7;
}

.pricing .btn {
font-size: 80%;
border-radius: 5rem;
letter-spacing: .1rem;
font-weight: bold;
padding: 1rem;
opacity: 0.7;
transition: all 0.2s;
}

/* Hover Effects on Card */

@media (min-width: 992px) {
.pricing .card:hover {
    margin-top: -.25rem;
    margin-bottom: .25rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
}

.pricing .card:hover .btn {
    opacity: 1;
}
}

@media (min-width: 992px) {

.rtyuiy567 .col-lg-3 {
    padding: 8px !important;
}
}


.card .card-body {
padding: 1.8rem 1.2rem;
}

.rtyuiy567 ul b {
text-transform: uppercase;
font-size: 13px;
color: #012c6d !important;
}

.rtyuiy567 ul li {
font-size: 15px;
}

button.btn.btn-primary,
.btn:not(.close):not(.mfp-close).btn-primary,
a.btn:not([href]):not([tabindex]).btn-primary {
background-color: #012c6d !important;
border-color: #012c6d !important;
}

.ttyy.in-highlight::before {
background: #012c6e !important;
}
</style>

<section class="pricing exclude-section" id="plans-table">
<div class="container">
    <div class="heading-text heading-section text-center center-pos">
        <h2 style="color: #fff !important; font-size: 30px !important">FOREX PAMM/MAM INVESTMENT <span
                class="in-highlight ttyy">PLANS</span></h2>
        <p style="color: #fff">We have a wide array of investment plans for our investors to choose from.
            <BR>
            Choose from the options below the investment plan which best suits you.
        </p>
    </div>
</div>
<div class="container-fluid">
    <div class="row rtyuiy567">



        <div class="col-lg-3">
            <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                    <h5 class="card-title text-muted text-uppercase text-center">LITE PLAN</h5>
                    <h6 class="card-price text-center">7%<span class="period">/Weekly</span></h6>
                    <hr>
                    <ul>
                        <li><b>Investment</b>: $1,000 - $24,999 </li>
                        <li><b>R.O.I</b>: 1% Daily</li>
                        <li><b>Plan Duration</b>: 7 Days</li>
                        <li><b>Referral Bonus</b>: 5%</li>
                        <li><b>24/7 Support</b>: YES</li>
                    </ul>
                    <a href="secured/auth/create-new-account.html"
                        class="btn btn-block btn-primary text-uppercase">Invest</a>
                </div>
            </div>
        </div>

        <!-- LITE PLAN -->
        <div class="col-lg-3">
            <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                    <h5 class="card-title text-muted text-uppercase text-center">Active PLAN</h5>
                    <h6 class="card-price text-center">12%<span class="period">/Weekly</span></h6>
                    <hr>
                    <ul>
                        <li><b>Investment</b>: $25,000 - $99,999
                        </li>
                        <li><b>R.O.I</b>: 1.71% Daily</li>
                        <li><b>Plan Duration</b>: 7 Days</li>
                        <li><b>Referral Bonus</b>: 5%</li>
                        <li><b>24/7 Support</b>: YES</li>
                    </ul>
                    <a href="secured/auth/create-new-account.html"
                        class="btn btn-block btn-primary text-uppercase">Invest</a>
                </div>
            </div>
        </div>

        <!-- PROFESSIONAL PLAN -->
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-muted text-uppercase text-center">Master PLAN</h5>
                    <h6 class="card-price text-center">15%<span class="period">/Weekly</span></h6>
                    <hr>
                    <ul>
                        <li><b>Investment</b>: $100,000 - $199,999
                        </li>
                        <li><b>R.O.I</b>: 2.14% Daily</li>
                        <li><b>Plan Duration</b>: 7 Days</li>
                        <li><b>Referral Bonus</b>: 10%</li>
                        <li><b>24/7 Support</b>: YES</li>
                    </ul>
                    <a href="secured/auth/create-new-account.html"
                        class="btn btn-block btn-primary text-uppercase">Invest</a>
                </div>
            </div>
        </div>


        <!-- Ultimate Plan -->
        <div class="col-lg-3">
            <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                    <h5 class="card-title text-muted text-uppercase text-center tup">Magnate Plan</h5>
                    <h6 class="card-price text-center">18%<span class="period">/Weekly</span></h6>
                    <hr>
                    <ul>
                        <li><b>Investment</b>: $200,000 - Unlimited
                        </li>
                        <li><b>R.O.I</b>: 2.57% Daily</li>
                        <li><b>Plan Duration</b>: 7 Days</li>
                        <li><b>Referral Bonus</b>: 10%</li>
                        <li><b>24/7 Support</b>: YES</li>
                    </ul>
                    <a href="secured/auth/create-new-account.html"
                        class="btn btn-block btn-primary text-uppercase">Invest</a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

            </main>
        @include('visitor.layouts.footer')