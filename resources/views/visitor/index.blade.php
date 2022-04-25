    @include('visitor.layouts.head')
        @include('visitor.layouts.header')
            <main>
                
                <div id="slider" class="inspiro-slider dots-creative" data-height-xs="560">

                    <div class="slide kenburns" data-bg-image="{{ asset('visitor/site-images/image-8.jpg') }}">
                        <div class="bg-overlay" style="background: #062f6d !important;"></div>
                        <div class="container">
                            <div class="slide-captions text-center">

                                <h1 data-caption-animation="zoom-out" class="slider-header white slider_item_main1">{{ env('SITE_NAME_SHORT') }} Investment Funds Investments</h1>
                                <p class="lead slider_item_sub1">
                                    We pride ourselves in our guarantees, success and track record in the
                                    asset management and investments market. <br>
                                    Take control with our all-in-one multiple investment packages such as Forex PAMM/MAM
                                    investment package, Cryptocurrency and more.
                                </p>
                                <div data-caption-animation="zoom-out">
                                    <a id="kskks8ik" href="/register" class="btn btn-rounded"><i
                                            class="fa fa-user-plus"></i> Create an account</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="slide kenburns" data-bg-image="{{ asset('visitor/site-images/stock-trader-810.jpg') }}">
                        <div class="bg-overlay"></div>
                        <div class="container">
                            <div class="slide-captions text-center">

                                <h1 data-caption-animation="zoom-out">Invest and Earn With Us</h1>
                                <p class="lead">I<span style="text-transform: lowercase;">NVEST WITH CONFIDENCE ON WORLD's
                                        LEADING ASSET MANAGEMENT AND INVESTMENT PLATFORM</span>. <br>
                                    Your single point of access to professional asset investment and management solutions. <br>
                                    Built for
                                    investors interested in stable returns and high liquidity.
                                </p>
                                <div data-caption-animation="zoom-out">
                                    <a href="/about-us" class="btn btn-rounded"><i class="fa fa-play"></i> Learn More</a>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="slide kenburns" data-bg-image="{{ asset('visitor/site-images/trading-desk-1536x1024.jpg') }}">
                        <div class="bg-overlay"></div>
                        <div class="container">
                            <div class="slide-captions text-center">

                                <h1 data-caption-animation="zoom-out">Trading Expertise</h1>
                                <p class="lead">
                                    Our goal is to
                                    enhance lives by providing a safe avenue, inspired by effective and
                                    innovative solutions for investing in the different, emerging
                                    financial markets in order to improve our investors' financial
                                    situation and ultimately provide them financial freedom.

                                </p>
                                <div data-caption-animation="zoom-out">
                                    <a href="/register" class="btn btn-rounded"><i
                                            class="fa fa-play"></i> Get Started</a>
                                </div>

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

                <section class="theme-bg" style="color: #fff !important; padding-top: 45px;">
                    <div class="uk-container">
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <div class="uk-text-center">
                                    <div class="in-icon-wrapper circle uk-margin-remove-bottom">
                                        <span data-uk-icon="icon:fa-medal; ratio: 0.054" class="uk-icon"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="27.648"
                                                height="27.648" data-svg="fa-medal">
                                                <path
                                                    d="M223.75 130.75L154.62 15.54A31.997 31.997 0 0 0 127.18 0H16.03C3.08 0-4.5 14.57 2.92 25.18l111.27 158.96c29.72-27.77 67.52-46.83 109.56-53.39zM495.97 0H384.82c-11.24 0-21.66 5.9-27.44 15.54l-69.13 115.21c42.04 6.56 79.84 25.62 109.56 53.38L509.08 25.18C516.5 14.57 508.92 0 495.97 0zM256 160c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm92.52 157.26l-37.93 36.96 8.97 52.22c1.6 9.36-8.26 16.51-16.65 12.09L256 393.88l-46.9 24.65c-8.4 4.45-18.25-2.74-16.65-12.09l8.97-52.22-37.93-36.96c-6.82-6.64-3.05-18.23 6.35-19.59l52.43-7.64 23.43-47.52c2.11-4.28 6.19-6.39 10.28-6.39 4.11 0 8.22 2.14 10.33 6.39l23.43 47.52 52.43 7.64c9.4 1.36 13.17 12.95 6.35 19.59z">
                                                </path>
                                            </svg></span>
                                    </div>
                                    <div class="heading-text heading-line text-center">
                                        <p data-animate="zoomIn" style="color: #fff !important;"
                                            class="animated zoomIn visible">{{ env('SITE_NAME_SHORT') }} Investment Funds</p>
                                    </div>
                                    <h2 class="uk-margin-small-top uk-margin-remove-bottom tup"
                                        style="font-size: 25px; color: #fff !important;">
                                        {{ env('SITE_NAME_SHORT') }} Investment Funds helps you
                                        grow your money</h2>
                                    <p class="uk-margin-remove-top"
                                        style="max-width: 970px; margin: auto; color: #fff !important;">
                                        {{ env('SITE_NAME_SHORT') }} Investment Funds, a pioneer of commisssion free investing, gives you access to
                                        investing and
                                        more ways to make your money work harder for you.

                                        Whether you're new to investing or a seasoned pro, it's time to partner with a company
                                        that
                                        believes you could and should be getting more from your money.

                                    </p>
                                </div>

                            </div>
                        </div>

                    </div>
                </section>

                <section style="padding-top: 25px; padding-bottom: 30px;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="heading-text heading-section mt-5">
                                    <h4 style="font-size: 20px" class="tup m-b-0">Lucrative Investment
                                        opportunity at your fingertips.</h4>
                                    <p style="font-size: 15px; font-weight: 400;">
                                        {{ env('SITE_NAME_SHORT') }} Investment Funds is dedicated to helping investors around the world reach
                                        their desired investment goals and broaden their financial horizons.
                                        <br>
                                        We provide investment products and solutions to our clients across the world. Our
                                        breadth of investment capabilities is extensive and among the most innovative within the
                                        market.
                                        <br><br>
                                        {{ env('SITE_NAME_SHORT') }} Investment Funds was founded on a simple but revolutionary idea that an
                                        investment company
                                        should be run for the sole benefit of its investors. And so {{ env('SITE_NAME_SHORT') }} Investment Funds was
                                        designed to be
                                        different, removing outside owners and outside interests from the equation. Because of
                                        our investor-owned structure, {{ env('SITE_NAME_SHORT') }} Investment Funds's success can only be measured by
                                        your success.
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <img alt="" style="width: 100% !important"
                                    src="{{ asset('visitor/site-images/compressed-assets/image-0-compressed.jpg') }}">
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


                <div style="padding-top: 60px; padding-bottom: 20px;"
                class="uk-section theme-bg in-padding-large-vertical@s in-profit-9">
                    <div class="uk-container">
                        <div class="uk-grid-divider uk-grid" data-uk-grid="">
                            <div class="uk-width-expand@m in-margin-top-20@s uk-first-column">
                                <h2 class="c-w" style="color: #fff !important">Investment products</h2>
                                <p style="color: #fff !important">Choose from our array of 3 different investment packages and
                                    get started investing.</p>
                            </div>
                            <div class="uk-width-2-3@m">
                                <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m uk-text-center uk-grid"
                                    data-uk-grid="">
                                    <!-- <div class="uk-first-column">
                                        <i class="fa fa-home in-icon-wrap circle uk-box-shadow-small"></i>
                                        <p class="uk-text-bold uk-margin-small-top">Real Estate</p>
                                    </div> -->
                                    <div>
                                        <i class="fa fa-btc in-icon-wrap circle uk-box-shadow-small"></i>
                                        <p class="uk-text-bold uk-margin-small-top">Cryptocurrency</p>
                                    </div>
                                    <div>
                                        <!-- <i class="fas fa-file-invoice-dollar"></i> -->
                                        <i class="fa fa-chart-line in-icon-wrap circle uk-box-shadow-small"></i>
                                        <p class="uk-text-bold uk-margin-small-top">Retirement</p>
                                    </div>
                                    <div>
                                        <i class="fa fa-chart-area in-icon-wrap circle uk-box-shadow-small"></i>
                                        <p class="uk-text-bold uk-margin-small-top">PAMM/MAMM</p>
                                    </div>
                                    <!-- <div>
                                        <i class="fa fa-leaf in-icon-wrap circle uk-box-shadow-small"></i>
                                        <p class="uk-text-bold uk-margin-small-top">Cannabis</p>
                                    </div> -->
                                    <!-- <div>
                                        <i class="fa fa-cube in-icon-wrap circle uk-box-shadow-small"></i>
                                        <p class="uk-text-bold uk-margin-small-top">NFP</p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="padding: 20px !important; padding-bottom:0px !important; max-height:750px; overflow: hidden"
                class="uk-section theme-bg in-padding-large-vertical@s in-profit-9">
                    <div class="uk-container">
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <div class="uk-text-center">

                                    <h2 class="uk-margin-small-top uk-margin-remove-bottom" style="color: #fff !important;">An
                                        account for everyone</h2>
                                    <p class="uk-margin-remove-top" style="color: #fff !important;">Our goal is to make
                                        investing in financial markets more
                                        affordable, more intuitive, and more fun, no matter how much experience you have(or
                                        don't have) <br>
                                        Whatever your circumstances, we offer wealth planning and investment management that is
                                        appropriate, personal, honest and clear. And whatever your ambitions, we are there to
                                        help you use investing in the financial markets to enrich your life.
                                    </p>
                                </div>

                            </div>
                        </div>
                        <br>

                        <style>
                        .carousel.ooskssksu2 .post-image img,
                        .carousel.ooskssksu2 .post-slider img {
                            height: 240px !important;
                            object-fit: cover !important;
                        }

                        .carousel.ooskssksu2 .post-item-wrap {
                            height: 500px;
                            overflow: hidden;
                        }

                        .post-item .post-item-description>h2,
                        .post-item .post-item-description>h2>a {
                            padding-top: 10px;
                            text-transform: uppercase;
                        }

                        .ooskssksu2 .post-meta-category,
                        .ooskssksu2 .post-meta-category a,
                        .ooskssksu2 .post-item-description h2 a,
                        .ooskssksu2 .post-item-description p,
                        .ooskssksu2 * {
                            color: #fff !important;
                            font-size: 13px !important;
                        }


                        p,
                        span,
                        div {
                            font-family: 'Lora', serif !important;
                        }
                        </style>

                        <div class="carousel ooskssksu2" data-items="3">

                            <div class="post-item border">
                                <div class="post-item-wrap">
                                    <div class="post-slider">
                                        <div class="carousel dots-inside arrows-visible arrows-only" data-items="1"
                                            data-loop="true" data-autoplay="true" data-lightbox="gallery">
                                            <a href="{{ asset('visitor/img/Investment-October.jpg') }}" data-lightbox="gallery-image">
                                                <img alt="" src="{{ asset('visitor/img/Investment-October.jpg') }}"></a>
                                            <a href="{{ asset('visitor/img/retire4.jpg') }}" data-lightbox="gallery-image">
                                                <img alt="" src="{{ asset('visitor/img/retire4.jpg') }}"></a>
                                        </div>
                                        <span class="post-meta-category"><a href="/retirement-and-pension"
                                                target="_blank">Retirement and Pension
                                                Funds</a></span>
                                    </div>
                                    <div class="post-item-description">
                                        <h2><a href="/retirement-and-pension" target="_blank">Retirement and Pension Funds
                                                INVESTMENT package</a></h2>
                                        <p>After retirement, there needs to be a regular source of income which is possible only
                                            when you make the right investments. Investing in the right plans help you get a
                                            regular
                                            income and also help you deal with the rising inflation. </p>
                                        <a href="/retirement-and-pension" target="_blank" class="item-link">Learn More <i
                                                class="icon-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="post-item border">
                                <div class="post-item-wrap">
                                    <div class="post-slider">
                                        <div class="carousel dots-inside arrows-visible arrows-only" data-items="1"
                                            data-loop="true" data-autoplay="true" data-lightbox="gallery">
                                            <a href="{{ asset('visitor/img/yuuyuu.jpg') }}" data-lightbox="gallery-image">
                                                <img alt="" src="{{ asset('visitor/img/yuuyuu.jpg') }}"></a>
                                            <a href="{{ asset('visitor/img/ttyuuik.jpg') }}" data-lightbox="gallery-image">
                                                <img alt="" src="{{ asset('visitor/img/ttyuuik.jpg') }}"></a>
                                            <a href="{{ asset('visitor/img/ttyu.jpg') }}" data-lightbox="gallery-image">
                                                <img alt="" src="{{ asset('visitor/img/ttyu.jpg') }}"></a>
                                        </div>
                                        <span class="post-meta-category"><a target="_blank"
                                                href="/cryptocurrency-investments">CRYPTOCURRENCY</a></span>
                                    </div>
                                    <div class="post-item-description">
                                        <h2><a target="_blank" href="/cryptocurrency-investments">CRYPTOCURRENCY
                                                INVESTMENT
                                                package</a></h2>
                                        <p> We offer our investors access to high-growth
                                            investment opportunities in the Bitcoin markets.<br>
                                            You don't need to be a cryptocurrency expert to earn from this sector.
                                            Our professional team will take charge of trading and mining management.
                                            Your investment profit (ROI) is secured.
                                        </p>
                                        <a target="_blank" href="/cryptocurrency-investments" class="item-link">Learn More
                                            <i class="icon-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="post-item border">
                                <div class="post-item-wrap">
                                    <div class="post-slider">
                                        <div class="carousel dots-inside arrows-visible arrows-only" data-items="1"
                                            data-loop="true" data-autoplay="true" data-lightbox="gallery">
                                            <a href="{{ asset('visitor/img/1605-trading-750x500.jpg') }}.webp" data-lightbox="gallery-image">
                                                <img alt="" src="{{ asset('visitor/img/1605-trading-750x500.jpg') }}.webp"></a>
                                            <a href="/pamm-and-mamm-account" data-lightbox="gallery-image">
                                                <img alt="" src="{{ asset('visitor/img/pamm.jpg') }}"></a>
                                            <a href="{{ asset('visitor/img/stock-exchange-market-concept-businessman.jpg') }}"
                                                data-lightbox="gallery-image">
                                                <img alt="" src="{{ asset('visitor/img/stock-exchange-market-concept-businessman.jpg') }}"></a>
                                        </div>
                                        <span class="post-meta-category"><a target="_blank"
                                                href="/pamm-and-mam-account">PAMM AND MAMM
                                                FOREX</a></span>
                                    </div>
                                    <div class="post-item-description">

                                        <h2><a target="_blank" href="/pamm-and-mam-account">PAMM AND MAMM FOREX INVESTMENT
                                                package</a>
                                        </h2>
                                        <p>{{ env('SITE_NAME_SHORT') }} Investment Funds PAMM Managers trade using invested capital of
                                            investors in this investment package. Any profits and losses generated
                                            will be shared between all accounts that are invested in the PAMM
                                            Manager on a proportional basis.</p>
                                        <a target="_blank" href="/pamm-and-mam-account" class="item-link">Learn More <i
                                                class="icon-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="background-color: #01123c;"
                class="uk-section uk-section-secondary uk-padding-large uk-background-contain uk-background-bottom-center in-padding-large-vertical@s in-profit-3"
                data-src="{{ asset('visitor/img/in-section-profit-3.png') }}" data-uk-img>
                    <div class="uk-container uk-margin-small-bottom">
                        <div class="uk-grid-large" data-uk-grid>
                            <div class="uk-width-1-1@m">
                                <h2 style="color: #fff !important; font-size: 20px; text-transform: uppercase;">We are committed
                                    to offering high-performing
                                    investment packages to our investors.
                                </h2>
                                <p class="uk-text-lead" style="font-size: 16px;">Our
                                    primary focus has been on
                                    emerging and rapid growth investment markets with an emphasis on Forex (PAMM/MAM), Cryptocurrencies and other top performing investment solutions. We are proud to work
                                    to the
                                    highest ethical standards of Bitcoin mining and other trading strategies.
                                    We are pleased to offer some of the most dynamic and high-performing
                                    investment packages available.</p>
                            </div>
                            <div class="uk-width-1-1">
                                <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-small-top jkjsksks"
                                    data-uk-grid>
                                    <div>
                                        <h1 class="uk-heading-bullet" style="color: #fff !important">
                                            $<span class="count" data-counter-end="563">0</span>Bn+
                                        </h1>
                                        <p style="color: #fff !important;" class="tup">In Active Investments</p>
                                    </div>
                                    <div>
                                        <h1 class="uk-heading-bullet" style="color: #fff !important">
                                            <span class="count" data-counter-end="80">0</span>M+
                                        </h1>
                                        <p style="color: #fff !important;" class="tup">Active Investment Accounts</p>
                                    </div>
                                    <div>
                                        <h1 class="uk-heading-bullet" style="color: #fff !important">
                                            $<span class="count" data-counter-end="394">0</span>Bn+
                                        </h1>
                                        <p style="color: #fff !important;" class="tup">Total gross interest earned by investors
                                            to date</p>
                                    </div>
                                                                <div>
                                        <h1 class="uk-heading-bullet" style="color: #fff !important">
                                            <span class="count" data-counter-end="11">0</span>+
                                        </h1>
                                        <p style="color: #fff !important;" class="tup">Years of Experience</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="pftb theme-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12" style="padding-bottom: 30px;">

                                <h2 style="font-size: 23px; margin-bottom: 0; color: #fff !important;" class="tup text-center">
                                    Note : {{ env('SITE_NAME_SHORT') }} INVESTMENT FUNDS  COMPANY tends to also deal with a VIP plan known as “FIXED FUNDS DEPOSIT “
                                </h2>
                            </div>
                            <div class="col-lg-6 m-b-30" data-animate="fadeInLeft">
                                <h2 style="font-size: 23px; margin-bottom: 0; color: #fff !important;" class="tup text-center">
                                    ABOUT FIXED FUNDS DEPOSIT  
                                </h2>
                                <div class="m-b-40 f15">
                                    <p style="color: #fff !important">Fixed Deposit (FD) Is an organized investment package that allows you as an investor to manage your Bitcoin account with a higher interest rate other than the ordinary investment packages,this involves depositing and making withdrawals ‘monthly or yearly’.</p>
                                    <p style="color: #fff !important"> In this package, you either do the fixed deposit ‘starter plan or standard plan’ and having in mind that no withdrawals are to be made until the agreed monthly or yearly date. No separate account is needed in this package, you can start with a direct fixed deposit account or migrate from your ordinary account to it, and no fees are to be paid to do this. In a fixed investment, investors are opportune to get a 28% weekly interest for the starter plan and 56% weekly interest rate for the standard plan.. This also means that the stater plan minimum deposit is with the range of $300 to $9,999(maximum). And standard to be (minimum) $9,999 to unlimited.</p>
                                    <p style="color: #fff !important"> You are also eligible to request for a premature withdrawal from your fixed deposit funds in case of any emergency or sudden financial situations. However,as a certain amount of penalty will be paid to achieve this, having the knowledge of not withdrawing till the agreed time with cost you 5% of your investment from the company both in starter and standard plan has same deductions in this case. Furthermore, not been able to roll up with the weekly deposit of the fixed funds deposit will attract your account to be frozen by the company and to unfreeze this comes with a deposit of the Company’s ordinary minimum investment which is the deposit of $200 to activate your fixed account permanently.</p>
                                    <p style="color: #fff !important"> <strong>Benefits:</strong> 
                                        <ul style="color:#fff!important">
                                            <li>Fixed Investment allows you to accumulate more funds in a random role while investing</li>
                                            <li>It’s a risk-free investment plan and guarantees fixed returns from the PAMM AND CySec Policy.</li>
                                            <li>Fixed Investment interest rates are earned massively at the end of the investment that the ordinary packages.</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-6 p-l-40 p-r-40" data-animate="fadeInRight">
                                <h2 style="font-size: 23px; margin-bottom: 0; color: #fff !important;" class="tup text-center">
                                    LOAN OFFER WITH {{ env('SITE_NAME_SHORT') }} INVESTMENT FUNDS FUNDS COMPANY 
                                </h2>
                                <div class="m-b-40 f15">
                                    <p style="color: #fff !important">We offer our investors access to high-growth In terms of Loan offer from the company, {{ env('SITE_NAME_SHORT') }} INVESTMENT FUNDS COMPANY grants this offer from two(2) ways “ The Semi-Annual Offer” and “ The Annual Offer “...</p>
                                    <p style="color: #fff !important"> You are only eligible to apply for loan from the company only when you must have been an active investor with at least two(2) active referrals under your name, and this two referred must have invested respectively in accordance with the company.</p>

                                    
                                    <p style="color: #fff !important"> You should also note that, while paying back your loan, Installmental Payments are not allowed!!!... this condition is applied both in Semi-Annual Offer and Annual Offer.</p>
                                    <h4 style=" margin-bottom: 0; color: #fff !important;" class="tup text-left">
                                    THE SEMI-ANNUAL OFFER  
                                    </h4>
                                    <p style="color: #fff !important"> This plan range it’s loan offer from $5,000 to $49,999. No charges or interest is required, the deadline for this loan offer is for the period of six(6) months, given a minimum Grace of two(2) weeks.</p>
                                    <h4 style=" margin-bottom: 0; color: #fff !important;" class="tup text-left">
                                    THE ANNUAL OFFER  
                                    </h4>
                                    <p style="color: #fff !important"> This offer range from $50,000 to $ 100,000.<br> 2% of the loan or Bitcoin borrowed will be paid as the company’s interest in low returns. It’s deadline is for the period of twelve(12) months ie within a year, minimum Grace of two(2) weeks.</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </section>


                <section class="pftb theme-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12" style="padding-bottom: 30px;">

                                <h2 style="font-size: 23px; margin-bottom: 0; color: #fff !important;" class="tup text-center">
                                    THE REVOLUTION IN ASSET INVESTMENTS MANAGEMENT
                                </h2>
                            </div>
                            <div class="col-lg-6 m-b-30" data-animate="fadeInLeft">
                                <div class="carousel yuwnk7826stef" data-items="1">
                                    <a target="_blank" href="{{ asset('visitor/images/certificate.png') }}"
                                        data-lightbox="gallery-image" title="Your image title here!"><img
                                            src="{{ asset('visitor/images/certificate.png') }}" alt=""></a>

                                    <a target="_blank" href="{{ asset('visitor/site-images/compressed-assets/image-0-compressed.jpg') }}"
                                        data-lightbox="gallery-image" title="Your image title here!"><img
                                            src="{{ asset('visitor/site-images/compressed-assets/image-0-compressed.jpg') }}" alt=""></a>

                                    <a target="_blank" href="{{ asset('visitor/site-images/BMO_CS_TradingFloor.jpg') }}"
                                        data-lightbox="gallery-image" title="Your image title here!"><img
                                            src="{{ asset('visitor/site-images/BMO_CS_TradingFloor.jpg') }}" alt=""></a>

                                    <a target="_blank" href="{{ asset('visitor/site-images/compressed-assets/image-1-compressed.jpg') }}"
                                        data-lightbox="gallery-image" title="Your image title here!"><img
                                            src="{{ asset('visitor/site-images/compressed-assets/image-1-compressed.jpg') }}" alt=""></a>

                                    <a target="_blank" href="{{ asset('visitor/site-images/WhatWeDoPeople2x.jpg') }}" data-lightbox="gallery-image"
                                        title="Your image title here!"><img src="{{ asset('visitor/site-images/WhatWeDoPeople2x.jpg') }}" alt=""></a>

                                    <a target="_blank" href="{{ asset('visitor/site-images/compressed-assets/image-5-compressed.jpg') }}"
                                        data-lightbox="gallery-image" title="Your image title here!"><img
                                            src="{{ asset('visitor/site-images/compressed-assets/image-5-compressed.jpg') }}" alt=""></a>


                                    <a target="_blank" href="{{ asset('visitor/site-images/team1.jpg') }}" data-lightbox="gallery-image"
                                        title="Your image title here!"><img src="{{ asset('visitor/site-images/team1.jpg') }}" alt=""></a>
                                    <a target="_blank" href="{{ asset('visitor/site-images/team2.jpg') }}" data-lightbox="gallery-image"
                                        title="Your image title here!"><img src="{{ asset('visitor/site-images/team2.jpg') }}" alt=""></a>
                                    <a target="_blank" href="{{ asset('visitor/site-images/team3.jpg') }}" data-lightbox="gallery-image"
                                        title="Your image title here!"><img src="{{ asset('visitor/site-images/team3.jpg') }}" alt=""></a>

                                    <a target="_blank" href="{{ asset('visitor/site-images/stock-trading.jpg') }}" data-lightbox="gallery-image"
                                        title="Your image title here!"><img src="{{ asset('visitor/site-images/stock-trading.jpg') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-6 p-l-40 p-r-40" data-animate="fadeInRight">
                                <div class="m-b-40 f15">
                                    <p style="color: #fff !important">We offer our investors access to high-growth investment
                                        opportunities in the financial
                                        markets through the utility of state-of-the-art technical facilities and the
                                        implementation of industry standard cryptocurrency trading strategies.</p>
                                    <p style="color: #fff !important"> We’re proud to be an asset management company whose
                                        culture is driven by strong values
                                        and a long-term vision. At {{ env('SITE_NAME_SHORT') }} Investment Funds Investments, our vision, mission and
                                        core values serve as the catalyst in our relations with our clients, employees,
                                        shareholders and in the communities in which we live and work. They are our guiding
                                        compass in our business each day.</p>
                                </div>
                                <a class="btn" href="#"><span>Learn more</span></a>
                            </div>
                        </div>
                    </div>
                </section>

                <style>
                    .yuwnk7826stef img {
                        height: 420px !important;
                        object-fit: cover !important;
                    }
                </style>


                <div class="uk-section" data-animate="fadeIn">
                    <div class="uk-container">
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <h2 class="tup hhhsuusjsj9wjkwmkkwuuuwu" style="font-size: 25px">Invest in Forex and other
                                    high-performing investment packages on our Intuitive,<br>easy-to-use and powerful platform
                                </h2>
                                <div class="uk-child-width-1-1 uk-child-width-1-3@m uk-child-width-1-2@s uk-grid"
                                    data-uk-grid="">
                                    <div class="uk-first-column">
                                        <p class="uk-margin-remove-top" style="font-size: 15px !important;"> Due to the
                                            professionalism of our employees and the introduction of cutting-edge trading
                                            facilities, we manage to provide top-quality investment services at minimal costs.
                                            We currently have about 15 million plus investors globally and about 90-120 new
                                            investment
                                            accounts opened daily.</p> <a
                                            class="uk-button uk-button-primary uk-button-large uk-border-rounded"
                                            href="/secured/auth/create-new-account">Open an
                                            Account Now</a>
                                    </div>
                                    <div class="mt-4">
                                        <div class="uk-text-center monee-fee-wrapper">
                                            <h3 class="uk-text-uppercase uk-margin-remove-bottom">Investment</h3>
                                            <h1 class="uk-margin-remove-top"> <span class="monee-currency">$</span> <span
                                                    class="monee-fee">200</span> </h1>
                                            <p class="uk-margin-remove-top uk-margin-remove-bottom">Minimum investment rate</p>
                                            <span class="uk-label uk-label-warning uk-margin-remove-top">Other fees may
                                                apply</span>
                                        </div>
                                    </div>
                                    <div class="uk-visible@m"> <img class="in-top-offset-50 uk-align-right"
                                            src="{{ asset('visitor/img/monee-content-platform2.png') }}" data-src="{{ asset('visitor/img/monee-content-platform2.png') }}"
                                            alt="monee-platform" width="350" height="258" data-uk-img=""> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section style="height: 80vh_; min-height: 400px; object-fit: cover;"
                class="section-video text-light d-flex-center" data-bg-video="{{ asset('visitor/site-images/vid.mp4') }}">
                    <div class="html5vid video-loaded" id="video-rpptn">
                        <video playsinline="" style="object-fit: cover;"
                        autoplay loop muted="true" poster="{{ asset('visitor/site-images/konsulting_bull_reverse.jpg') }}" preload="auto">
                            <source src="{{ asset('visitor/site-images/bg-chc.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="bg-overlay yuwjw7jjjk" style="opacity: .5 !important; background-color: #112b77 !important;">
                    </div>
                    <div class="container container-fullscreen">
                        <div class="text-middle text-center text-light">
                            <h1 class="text-uppercase text-lg headng_stef d-font-exempt"
                                style=" font-size: 26px !important; margin-bottom: 0; color: #fff !important">{{ env('SITE_NAME_SHORT') }} Investment Funds                        INVESTMENTS
                            </h1>
                            <p class="lead">
                                <span style="font-size: 20px; font-weight: bold; text-transform: uppercase !important;">The Revolution In asset investments Management <br>
                                </span>
                                <span class="d-sm-none_c">
                                    We offer our investors access to high-growth investment opportunities in the financial
                                    markets
                                    through the utility of state-of-the-art technical facilities and the implementation of
                                    industry standard cryptocurrency trading strategies.
                                    We are pleased to offer some of the most dynamic and high-performing
                                    investments services available.
                                </span>

                            </p>
                            <a href="images/{{ env('SITE_NAME_SHORT') }}pdf.pdf" target="_blank" class="btn">View Company Presentation</a>
                        </div>
                    </div>
                </section>

                <section style="padding: 0 !important; margin-top: 0px;">
                    <div class="uk-container uk-container-expand uk-background-primary uk-light"
                        style="max-width: none !important;">
                        <div class="uk-container uk-margin-large-top uk-margin-medium-bottom">
                            <div class="uk-grid">
                                <div class="uk-width-4-5@l uk-width-1-1@s uk-align-center">
                                    <div
                                        class="idz-icon-circle large white uk-float-left uk-margin-top uk-margin-medium-right idz-content-adjust3">
                                        <i class="fa fa-5x fa-percent"></i>
                                    </div>
                                    <h2 class="uk-margin-small-bottom uk-margin-remove-top uk-text-center c-w"
                                        style="color: #fff !important;">Earn more - invest tax-free</h2>
                                    <p class="uk-margin-remove-top uk-text-lead uk-text-center c-w">The Government lets you
                                        invest up to £20,000 each year tax-free in an ISA. You can 'wrap' any {{ env('SITE_NAME_SHORT') }} Investment Funds                                investment in an ISA, so that you don't pay tax on the interest you earn, and you can
                                        transfer in any other ISAs you have and invest those too.

                                        <span class="uk-text-bold">For investors in the United Kingdom (UK) only.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>




                <style>
                    .yuwnk7826stef img {
                        height: 420px !important;
                        object-fit: cover !important;
                    }
                </style>




                <style>
                .jdjjwjwjw9292992_stef .in-wave-12-counter h1 {
                font-size: 30px !important;
                text-transform: uppercase !important;
                }

                .jdjjwjwjw9292992_stef .in-wave-12-counter h1 .in-wave-12-small {
                font-size: 17px !important;
                }

                .jdjjwjwjw9292992_stef .in-wave-12-counter .uk-text-muted.uk-margin-remove-top {
                font-size: 13px !important;
                }

                .jdjjwjwjw9292992_stef .in-wave-12-counter .uk-margin-top.uk-margin-remove-bottom {
                font-size: 14px !important;
                }


                .in-wave-12 blockquote .uk-label {
                background-color: #01123c !important;
                }

                .in-wave-12 .in-wave-12-counter {
                border-bottom: 1px solid #01123c !important;
                }
                </style>


                <style>
                .monee-fee-wrapper .monee-currency {
                top: 20px;
                position: relative;
                }

                .monee-fee-wrapper .monee-fee {
                top: 63px !important;
                }
                </style>

                <style>
                .testimonial-item p {
                font-size: 14px !important;
                }
                </style>

                <section data-animate="fadeIn" style="padding-top: 70px; padding-bottom: 60px !important;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-12">
                                <h2 class="tup" style="font-size: 23px;">What our investors are saying about us</h2>
                                <p class="lead" style="font-size: 15px">We use the reviews of our investors as the yard stick to
                                    measure how well or otherwise we are doing in the dispensation of our services to our
                                    investors all over the world. <br> We are always happy to share the positive reviews of our
                                    investors and improve on the areas we have been found wanting.</p>
                            </div>
                            <div class="col-lg-7">
                                <div class="carousel arrows-visibile testimonial testimonial-single testimonial-left"
                                    data-items="1" data-animate-in="fadeIn" data-animate-out="fadeOut" data-arrows="false">

                                    <div class="testimonial-item">
                                        <img src="{{ asset('visitor/img/reviewer2.jpg') }}" alt="">
                                        <p>I've had incredible customer service since i started investing here, I'm a repeat
                                            investor. I've been investng with {{ env('SITE_NAME_SHORT') }} Investment Funds. Investments for nearly 3
                                            years
                                            now and i've loved every bit of the experience so far.</p>
                                        <span>Ron DiCicco</span>
                                        <span>Florida, United States</span>
                                    </div>


                                    <div class="testimonial-item">
                                        <img src="{{ asset('visitor/img/reviewer3.jpg') }}" alt="">
                                        <p>Transparent, profitable, and reliable bitcoin investment company that will make you
                                            real money. Thanks to all of you at {{ env('SITE_NAME_SHORT') }} Investment Funds for the excellent
                                            service. </p>
                                        <span>Diane Podmanik</span>
                                        <span>Budapest, Hungary</span>
                                    </div>


                                    <div class="testimonial-item">
                                        <img src="{{ asset('visitor/img/reviewer5.jpg') }}" alt="">
                                        <p>I have always been searching for an opportunity to earn on bitcoin and finally I
                                            found {{ env('SITE_NAME_SHORT') }} Investment Funds and they have proven to be very reliable since
                                            i've been investing with them.</p>
                                        <span>Joe Tantillo</span>
                                        <span>Prague, Czech Republic</span>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <div class="uk-section">
                    <div class="uk-container uk-container-expand">
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <div class="uk-card uk-card-primary uk-border-rounded uk-background-cover"
                                    style="background-image: linear-gradient(#012c6d80, #012c6da3),url({{ asset('visitor/site-images/WhatWeDoPeople2x.jpg') }});">
                                    <div class="uk-card-body">
                                        <h2 class="uk-margin-remove-bottom c-w" style="color: #fff !important">Built for you
                                        </h2>
                                        <p class="uk-margin-small-top c-w" style="max-width: 700px">Our platform is designed for
                                            everybody. You can
                                            manually pick your own investment package and let our qualified professionals and
                                            automated systems manage your
                                            investments for you. And if you need help, there are real people to talk to via our
                                            live chat.</p>
                                        <a class="uk-button uk-button-primary uk-border-rounded c-w" href="#">Open an
                                            Account Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section style="padding-top: 70px !important; padding-bottom: 60px !important;">
                    <div class="container">
                        <h2 class="tup" style="font-size: 25px !important; font-weight: bold !important;">Our Investors:</h2>
                        <div class="row client-logos carousel-description-clients carousel-description-style ">
                            <div class="col-lg-4">
                                <div class="description">
                                    <h2 class="tup" style="font-size: 15px !important;">$562.9bn+ under management on behalf of
                                        our
                                        world leading
                                        investors</h2> <span style="font-size: 15px !important;">
                                        Today, we manage a total of £455.6bn (€501.2bn/$562.9bn) of assets on behalf of
                                        governments, pension funds, insurers, companies, charities, foundations and individuals
                                        across 80 countries (as at 30 June 2020).
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="carousel dots-grey tyu6ytyujh" data-items="4" data-arrows="false">
                                    <div>
                                        <a href="#"><img alt="" src="{{ asset('visitor/site-images/logos/coinone-1.svg') }}"></a>
                                    </div>
                                    <div>
                                        <a href="#"><img alt="" src="{{ asset('visitor/site-images/logos/plasmapay-1.svg') }}"></a>
                                    </div>
                                    <div>
                                        <a href="#"><img alt="" src="{{ asset('visitor/site-images/logos/bbva-2019.svg') }}"></a>
                                    </div>
                                    <div>
                                        <a href="#"><img alt=""
                                                src="{{ asset('visitor/site-images/logos/montex-network-cryptocurrency-connecting.svg') }}"></a>
                                    </div>
                                    <div>
                                        <a href="#"><img alt="" src="{{ asset('visitor/site-images/logos/zcash.svg') }}"></a>
                                    </div>
                                    <div>
                                        <a href="#"><img alt="" src="{{ asset('visitor/site-images/logos/the-blockchain-group-tbg.svg') }}"></a>
                                    </div>
                                    <div>
                                        <a href="#"><img alt="" src="{{ asset('visitor/site-images/logos/waves-6.svg') }}"></a>
                                    </div>
                                    <div>
                                        <a href="#"><img alt="" src="{{ asset('visitor/site-images/logos/keep-solutions.svg') }}"></a>
                                    </div>
                                    <div>
                                        <a href="#"><img alt="" src="{{ asset('visitor/site-images/logos/huobi-1.svg') }}"></a>
                                    </div>
                                    <div>
                                        <a href="#"><img alt="" src="{{ asset('visitor/site-images/logos/ledger-new-logo-.svg') }}"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <style>
                @media(max-width: 550px) {
                .uk-section.kwlwkwwlw {
                    display: none
                }
                }
                </style>
                <div class="uk-section theme-bg kwlwkwwlw" data-animate="zoomIn">
                    <div class="uk-container">
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <div class="uk-card uk-card-secondary uk-background-center-right uk-background-contain uk-background-image@m"
                                    style="background-image: url({{ asset('visitor/site-images/compressed-assets/image-1-compressed.jpg') }}); background-size: 30%; height: 380px">
                                    <div class="uk-card-body">
                                        <div class="uk-grid">
                                            <div class="uk-width-1-2@m uk-margin-small-left">
                                                <h2 class="uk-margin-remove-bottom"
                                                    style="text-transform: uppercase;     font-size: 23px;">Professional
                                                    asset/investment managers and financial analysts</h2>
                                                <p class="uk-margin-small-top">With employees in more than 40 locations
                                                    worldwide, our operations extend across global
                                                    financial capitals and important regional centres. This brings us closer to
                                                    our investors
                                                    around the world, and provides invaluable asset management and
                                                    investments services to our investors.
                                                    <br>
                                                    We combine our deep knowledge of local markets with the power of coordinated
                                                    global
                                                    oversight to drive better investment outcomes for you.
                                                </p> <a class="uk-button uk-button-primary uk-border-rounded"
                                                    href="/register">Open an
                                                    Investment account now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-animate="fadeIn"
                class="uk-section uk-section-muted uk-padding-large uk-background-cover uk-background-center-center"
                style="background-image: url({{ asset('visitor/img/in-wave-background-3.jpg') }});">
                    <div class="uk-container in-wave-7">
                        <div class="uk-grid uk-flex uk-flex-center">
                            <div class="uk-width-3-4@m">
                                <h4 class="uk-text-primary uk-margin-remove-bottom">Invest with confidence</h4>
                                <h1 class="uk-margin-small-top uk-margin-remove-bottom">New level of capital <span
                                        class="in-highlight">security</span></h1>
                                <div class="uk-grid-divider uk-child-width-1-2@s uk-child-width-1-2@m uk-margin-medium-top uk-grid"
                                    data-uk-grid="">

                                    <div class="uk-first-column ujwsu8k_stef37hjh">
                                        <img class="uk-margin-remove-bottom" style="width: 200px" src="{{ asset('visitor/img/undraw_safe_bnk7.svg') }}"
                                            alt="wave-icon" width="64">
                                        <h3 class="uk-margin-small-top tup" style="font-size: 23px">{{ env('SITE_NAME_SHORT') }} Investment Funds is
                                            secured
                                        </h3>
                                        <p>Guaranteed protection. When we say that you are secured we really mean it. We have
                                            built one of the world most sophisticated security system that have never been
                                            compromised. Members records are kept confidential from third parties.</p>
                                    </div>

                                    <div>
                                        <img class="uk-margin-remove-bottom" style="width: 200px"
                                            src="{{ asset('visitor/img/undraw_business_deal_cpi9.svg') }}" alt="wave-icon" width="64">
                                        <h3 class="uk-margin-small-top tup" style="font-size: 20px">Fully regulated &amp;
                                            invested funds are protected by insurance </h3>
                                        <p>Our company is fully regulated by the FCA and CySec and your funds are, additionally,
                                            covered by our insurance policy so you don't have to worry about losing your
                                            invested capital.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- section content begin -->
                <div data-animate="fadeInLeft" class="uk-section">
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
                                                    href="/register">Open an Account</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- section content end -->

                <section class="fullscreen" data-bg-parallax="{{ asset('visitor/site-images/image-8.jpg') }}">
                    <div class="bg-overlay"></div>
                    <!-- <div class="shape-divider" data-style="20"></div> -->
                    <div class="container-wide">
                        <div class="container-fullscreen">
                            <div class="text-middle">
                                <div class="heading-text text-light col-lg-6">
                                    <h2 class="font-weight-800" style="line-height: 30px;"><span
                                            style="font-size: 28px;">Combining
                                            high-quality, focused
                                            investment management with a rich service experience.</span></h2>
                                    <p> Bringing together the specialist areas of expert investment management and holistic
                                        financial advice to provide you with a robust and personalised strategy for achieving
                                        your financial objectives.</p>
                                    <a href="/register" class="btn btn-light btn-rounded"
                                        style="background-color: #fff !important">Get started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>         
        @include('visitor.layouts.footer')
