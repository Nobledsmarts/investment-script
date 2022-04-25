    @include('visitor.layouts.head')
        @include('visitor.layouts.header')

            <main>
            <div id="slider" class="inspiro-slider dots-creative" data-height-xs="360">

<div class="slide kenburns"
    style="background-image:url('{{ asset('visitor/site-images/WZMH-Architects-National-Bank-Trading-Floor-Toronto.jpg') }}');">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="slide-captions text-center text-light">

            <span class="strong">Who we are</span>
            <h1 style="color: #fff !important">About our company</h1>

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



<section class="theme-bg" style="padding-top:40px; padding-bottom: 20px;">
<div class="container">
    <div class="uk-text-center">
        <div class="in-icon-wrapper circle uk-margin-remove-bottom">
            <span data-uk-icon="icon:fa-medal; ratio: 0.054" class="uk-icon"><svg
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="27.648" height="27.648"
                    data-svg="fa-medal">
                    <path
                        d="M223.75 130.75L154.62 15.54A31.997 31.997 0 0 0 127.18 0H16.03C3.08 0-4.5 14.57 2.92 25.18l111.27 158.96c29.72-27.77 67.52-46.83 109.56-53.39zM495.97 0H384.82c-11.24 0-21.66 5.9-27.44 15.54l-69.13 115.21c42.04 6.56 79.84 25.62 109.56 53.38L509.08 25.18C516.5 14.57 508.92 0 495.97 0zM256 160c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm92.52 157.26l-37.93 36.96 8.97 52.22c1.6 9.36-8.26 16.51-16.65 12.09L256 393.88l-46.9 24.65c-8.4 4.45-18.25-2.74-16.65-12.09l8.97-52.22-37.93-36.96c-6.82-6.64-3.05-18.23 6.35-19.59l52.43-7.64 23.43-47.52c2.11-4.28 6.19-6.39 10.28-6.39 4.11 0 8.22 2.14 10.33 6.39l23.43 47.52 52.43 7.64c9.4 1.36 13.17 12.95 6.35 19.59z">
                    </path>
                </svg></span>
        </div>
    </div>
    <div class="heading-text heading-line text-center">
        <p data-animate="zoomIn" style="color: #fff !important;">{{ env('SITE_NAME_SHORT') }}</p>
    </div>
    <div class="row">
        <div class="col-lg-12" data-animate="bounceInDown" style="max-width: 970px;margin: auto;">
            <h2 style="font-size: 23px; margin-bottom: 0; color: #fff !important;" class="tup text-center">
                WHY CHOOSE {{ env('SITE_NAME_SHORT') }}?</h2>
            <p class="text-center" style="color: #fff !important;">{{ env('SITE_NAME_SHORT') }} is a leading
                investment/ asset management
                company
                offering premium investment services to investors; both individuals and corporations. We
                pride ourselves in our guarantees and success track record in the
                trading/investment market.
                <br>
                Our goal is to enhance lives by providing a safe avenue, inspired by effective and
                innovative solutions for investing in the different, emerging investment packages in
                order to improve our investors' financial situation and ultimately provide them financial
                freedom.

            </p>

        </div>
    </div>
</div>
</section>



<div class="uk-section" style="padding-top: 40px !important;" data-animate="fadeIn">
<div class="uk-container">
    <div class="uk-grid">
        <div class="uk-width-1-1 in-wave-16">
            <div class="in-margin-medium-top@s">
                <div class="uk-grid" data-uk-grid="">
                    <div
                        class="uk-width-expand@s uk-width-2-5@m uk-card-media-right uk-cover-container uk-first-column">
                        <img class="uk-width-1-1 uk-margin-remove-bottom" src="{{ asset('visitor/img/in-wave-image-2.jpg') }}"
                            alt="sample-image">
                    </div>
                    <div class="uk-width-1-2@s uk-width-expand@m uk-flex uk-flex-middle">
                        <div class="">
                            <h1 class="uk-margin-top uk-margin-remove-bottom"
                                style="text-transform: uppercase; font-size: 22px">Trusted by more than 45
                                thousand investors around the world.</h1>
                            <hr>
                            <h4 class="uk-margin-remove-top uk-margin-remove-bottom">Fully regulated</h4>
                            <p class="uk-margin-small-top uk-margin-bottom">We adhere to the strictest
                                regulatory
                                standards, and are fully licensed and regulated across Europe, the Middle
                                East and Asia.</p>
                            <h4 class="uk-margin-remove-bottom">Multi-award winner</h4>
                            <p class="uk-margin-small-top uk-margin-bottom">We’ve been consistently
                                recognised by our industry
                                and have won the highest accolades for our products, platform and investment
                                services.</p>
                            <hr class="">
                            <div class="uk-child-width-1-3@m uk-text-center uk-visible@m uk-grid"
                                data-uk-grid="">
                                <div class="uk-first-column">
                                    <img src="{{ asset('visitor/img/in-wave-award.svg') }}" alt="wave-award">
                                    <h6 class="uk-margin-small-top uk-margin-remove-bottom">Most Reliable
                                        International Crypto Trading Platform</h6>
                                    <p class="uk-text-small uk-margin-remove-top">BTC TradeON Summit 2017
                                    </p>
                                </div>
                                <div>
                                    <img src="{{ asset('visitor/img/in-wave-award.svg') }}" alt="wave-award">
                                    <h6 class="uk-margin-small-top uk-margin-remove-bottom">Best
                                        Investments, Asset Management and Brokerage Platform</h6>
                                    <p class="uk-text-small uk-margin-remove-top">2017
                                        International Business
                                        Magazine Awards
                                    </p>
                                </div>
                                <div>
                                    <img src="{{ asset('visitor/img/in-wave-award.svg') }}" alt="wave-award">
                                    <h6 class="uk-margin-small-top uk-margin-remove-bottom">Best Blockchain
                                        Accelerator and Execution Broker </h6>
                                    <p class="uk-text-small uk-margin-remove-top">AZTOMARKETS EXPO Dubai
                                        2019</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
            </div>
            <div class="heading-text heading-line text-center">
                <p data-animate="zoomIn" style="color: #fff !important;">{{ env('SITE_NAME_SHORT') }}</p>
            </div>

            <h2 style="font-size: 23px; margin-bottom: 0; color: #fff !important;" class="tup text-center">
                THE REVOLUTION IN ASSET INVESTMENTS MANAGEMENT
            </h2>
        </div>
        <div class="col-lg-6 m-b-30" data-animate="fadeInLeft">
            <div class="carousel yuwnk7826stef" data-items="1">
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
                    and a long-term vision. At {{ env('SITE_NAME_SHORT') }} Investments, our vision, mission and
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



<section style="padding-top: 25px; padding-bottom: 35px;">
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-8">
            <div class="heading-text heading-section mt-5">
                <h4 style="font-size: 20px" class="tup m-b-0">Our Investment Philosophy</h4>
                <p style="font-size: 15px; font-weight: 400;">
                    We will maintain a consistent decision making process within the organization and invest
                    responsibly as a major investment firm.

                    By looking for market inefficiencies, we determine the gap between the optimal
                    price and the current market price of the asset, and produce excess revenue.

                    We look for investment opportunities through intensive research, analysis and insight.
                    With a continuous and consistent investment approach and extensive risk management, we
                    aim to steadily reach our investment goal.
                    We combine our deep knowledge of local markets with the power of coordinated global
                    oversight to drive better investment outcomes for our investors.

                </p>
            </div>
        </div>

        <div class="col-lg-4">
            <img alt="" style="width: 100% !important;"
                src="{{ asset('visitor/site-images/compressed-assets/image-4-compressed.jpg') }}">
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



<section style="height: 80vh_; min-height: 400px; object-fit: cover;"
class="section-video text-light d-flex-center" data-bg-video="{{ asset('visitor/site-images/vid.mp4') }}">
<div class="html5vid video-loaded" id="video-rpptn"><video playsinline="" style="object-fit: cover;"
        autoplay loop muted="true" poster="{{ asset('visitor/site-images/konsulting_bull_reverse.jpg') }}" preload="auto">
        <source src="{{ asset('visitor/site-images/bg-chc.mp4') }}" type="video/mp4">
    </video></div>
<div class="bg-overlay yuwjw7jjjk" style="opacity: .5 !important; background-color: #112b77 !important;">
</div>
<div class="container container-fullscreen">
    <div class="text-middle text-center text-light">
        <h1 class="text-uppercase text-lg headng_stef d-font-exempt"
            style=" font-size: 26px !important; margin-bottom: 0; color: #fff !important">{{ env('SITE_NAME_SHORT') }}</h1>
        <p class="lead">
            <span style="font-size: 20px; font-weight: bold;
text-transform: uppercase !important;">THE REVOLUTION IN asset investmentS MANAGEMENT <br>
            </span>
            <span class="d-sm-none_c">
                We offer our investors access to high-growth investment opportunities in the financial
                markets through the utility of state-of-the-art technical facilities and the implementation
                of industry standard cryptocurrency trading strategies. We are pleased to offer some of the
                most dynamic and high-performing investments services available.
            </span>

        </p>
        <a href="#" class="btn">Get Started</a>
    </div>
</div>
</section>

<section style="padding-top: 25px !important; padding-bottom: 25px !important;">
<div class="container">
    <h2 class="tup" style="font-size: 25px !important; font-weight: bold !important;">Our Investors:</h2>
    <div class="row client-logos carousel-description-clients carousel-description-style ">
        <div class="col-lg-4">
            <div class="description">
                <h2 class="tup" style="font-size: 18px !important;">$562.9BN+ UNDER MANAGEMENT ON BEHALF OF
                    OUR WORLD LEADING INVESTORS
                </h2> <span style="font-size: 15px !important;">
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






<style>
.testimonial-item p {
font-size: 14px !important;
}
</style>
<section style="padding-top: 35px; padding-bottom: 55px !important;">
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
                        investor. I've been investng with {{ env('SITE_NAME_SHORT') }}s Investments for nearly 3
                        years now and i've loved every bit of the experience so far.</p>
                    <span>Ron DiCicco</span>
                    <span>Florida, United States</span>
                </div>


                <div class="testimonial-item">
                    <img src="{{ asset('visitor/img/reviewer3.jpg') }}" alt="">
                    <p>Transparent, profitable, and reliable bitcoin investment company that will make you
                        real money. Thanks to all of you at {{ env('SITE_NAME_SHORT') }} for the excellent
                        service. </p>
                    <span>Diane Podmanik</span>
                    <span>Budapest, Hungary</span>
                </div>


                <div class="testimonial-item">
                    <img src="{{ asset('visitor/img/reviewer5.jpg') }}" alt="">
                    <p>I have always been searching for an opportunity to earn on bitcoin and finally I
                        found {{ env('SITE_NAME_SHORT') }} and they have proven to be very reliable since i've
                        been investing with them.</p>
                    <span>Joe Tantillo</span>
                    <span>Prague, Czech Republic</span>
                </div>

            </div>
        </div>

    </div>
</div>
</section>

<style>
.theme-bg.klkwlwlllwm ul li {
color: #fff !important;
}

.klkwlwlllwm {
padding-top: 54px;
padding-bottom: 60px;
}
</style>

<!-- section content begin -->
<div class="uk-section theme-bg klkwlwlllwm">
<div class="uk-container">
    <div class="uk-grid">
        <div class="uk-width-1-1@m">
            <div class="uk-grid uk-grid-small" data-uk-grid="">
                <div class="uk-width-auto@m uk-first-column">
                    <div class="in-icon-wrapper circle large theme-color uk-margin-small-right"> <i
                            class="fas fa-money-bill-wave fa-2x"></i> </div>
                </div>
                <div class="uk-width-expand">
                    <h3 class="tup" style="color: #fff !important">Why become an investor at {{ env('SITE_NAME_SHORT') }}?</h3>
                    <p style="color: #fff !important">Invest with confidence and benefit from the
                        reliability of a trusted broker with a
                        proven record of stability, security and strength.</p>
                    <div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@m">
                        <div>
                            <ul class="uk-list uk-list-bullet">
                                <li>Lucrative Returns (ROI)</li>
                                <li>Leverage up to 1:500</li>
                                <li>Fast executions</li>
                                <li>World Class Financial Trading Technologies</li>
                            </ul>
                        </div>
                        <div class="in-margin-small-top@s in-margin-bottom@s">
                            <ul class="uk-list uk-list-bullet">
                                <li>Investor Support & guide</li>
                                <li>Investor Oriented</li>
                                <li>Strongly regulated</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div> <!-- section content end -->


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


<div class="uk-section" data-animate="zoomIn">
<div class="uk-container">
    <div class="uk-grid">
        <div class="uk-width-1-1">
            <div class="uk-card uk-card-secondary uk-background-center-right uk-background-contain uk-background-image@m"
                style="background-image: url({{ asset('visitor/site-images/compressed-assets/image-6-compressed.jpg') }});">
                <!-- {{ asset('visitor/img/monee-content-image7.jpg') }} -->
                <div class="uk-card-body">
                    <div class="uk-grid">
                        <div class="uk-width-1-2@m uk-margin-small-left">
                            <h2 class="uk-margin-remove-bottom"
                                style="text-transform: uppercase;     font-size: 23px;">PROFESSIONAL
                                ASSET/INVESTMENT MANAGERS AND FINANCIAL ANALYSTS
                            </h2>
                            <p class="uk-margin-small-top">With employees in more than 40 locations
                                worldwide, our operations extend across global financial capitals and
                                important regional centres. This brings us closer to our investors around
                                the world, and provides invaluable asset management and investments services
                                to our investors.
                                We combine our deep knowledge of local markets with the power of coordinated
                                global oversight to drive better investment outcomes for you.
                            </p> <a class="uk-button uk-button-primary uk-border-rounded"
                                href="secured/auth/create-new-account.html">Open an
                                Investment account now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<section class="box-fancy theme-bg hy8ikeol section-fullwidth text-light"
style="padding-top: 20px; padding-bottom: 20px;">
<div class="container">

    <style>
    .row.yu8i9kl-uuh span:not(.btn-label) {
        font-size: 14px !important;
        color: black !important;
    }

    .hy8ikeol .yu8i9kl-uuh h2.tup,
    .hy8ikeol .yu8i9kl-uuh h2.tup+span {
        color: #fff !important;
    }

    .hy8ikeol .yu8i9kl-uuh h2.tup {
        font-size: 22px;
    }
    </style>

    <div class="row yu8i9kl-uuh">
        <div style="" class="col-lg-4">

            <h2 class="tup">OUR MISSION</h2>
            <span>Empowering investors by providing them an avenue for controlling their financial future by
                providing outstanding service, innovation, and expertise in the custody of alternative and
                traditional assets.
                {{ env('SITE_NAME_SHORT') }} is dedicated to helping investors around the world reach
                their desired investment goals and broaden their financial horizons.

                We provide investment products and solutions to our clients across the world. Our
                breadth of investment capabilities is extensive and among the most innovative within the
                market.
            </span>
        </div>
        <div style="" class="col-lg-4">

            <h2 class="tup">Investor-first focus.</h2>
            <span>Our plan is to not only protect the value of your assets but to increase them with our
                trading desk. Involving professional traders that manage money in high risk markets. This is
                achieved by strict standards of risk management through technical and fundamental analysis.
                Our trading operations are online and around the clock to ensure immediate reaction to
                movements in the market.</span>
        </div>
        <div style="background-color:" class="col-lg-4">

            <h2 class="tup">Our Values</h2>
            <span>Our values are based on three tenets: reliability, security, and performance. With our
                deep understanding of technology, economics, and finance, and by applying knowledge and
                innovation, we have created one of the most sophisticated and technologically advanced
                trading platforms in the industry. Our vision extends also to be an innovative partner for
                investors to achieve their wealth goals.

            </span>
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




<style>
.yuwnk7826stef img {
height: 420px !important;
object-fit: cover !important;
}
</style>
<section class="p-t-0 p-b-0">
<div class="container">
    <div class="row">
        <div class="col-lg-2">
            <div class="heading-text heading-section">
                <h2 style="font-size: 23px !important">What We Do</h2>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="row">
                <div class="col-lg-12" data-animate="fadeIn"> We’re proud to be an asset management company
                    whose culture is driven by strong values and a long-term vision. At {{ env('SITE_NAME_SHORT') }}, our vision, mission
                    and core values serve as the catalyst in our relations
                    with our clients, employees, shareholders and in the communities in which we live and
                    work. They are our guiding compass in our business each day.

                    <br><br>
                    {{ env('SITE_NAME_SHORT') }} is dedicated to helping investors around the world reach
                    their desired investment goals and broaden their financial horizons.
                    <br><br>
                    We provide investment products and solutions to our clients across the world. Our
                    breadth of investment capabilities is extensive and among the most innovative within the
                    market.
                    <br><br>
                    We’re a truly global asset manager, with offices in over 40 locations and investment
                    centres in more than 20 locations.

                    <br><br>
                    Investment involves risk. The value of investments, and the income from them, can go
                    down as well as up and an investor may get back less than the amount invested. Past
                    performance is not a guide to future results.
                    <br><br>

                    {{ env('SITE_NAME_SHORT') }} was founded on a simple but revolutionary idea that an
                    investment company
                    should be run for the sole benefit of its investors. And so {{ env('SITE_NAME_SHORT') }} was
                    designed to be
                    different, removing outside owners and outside interests from the equation. Because of
                    our investor-owned structure, {{ env('SITE_NAME_SHORT') }}'s success can only be measured by
                    your success.
                </div>
                <div class="col-lg-12" data-animate="fadeIn"> Low costs, a long-term orientation, and focus
                    on your goals are at the core of
                    {{ env('SITE_NAME_SHORT') }}'s investing philosophy, and not just because they sound good.
                    They're essential
                    to our approach because they're essential to the thing that really matters to you: the
                    opportunity for investment success. So however you shape your portfolio, you can be sure
                    that these principles run through everything we do.
                    <br><br>

                    {{ env('SITE_NAME_SHORT') }}'s mission is to help investors reach their goals, and that
                    means access to
                    advice that works for you. Whether through our own advisory services or supporting
                    financial advisors, we stand firm in our belief that all investors deserve advice that
                    can be trusted and puts your interests first. That's why we seek to provide the advice
                    offerings you need to build your financial future.
                    <br><br>

                    Strategy matters. {{ env('SITE_NAME_SHORT') }}'s approach to managing investments on behalf
                    of our clients is
                    to combine an in-depth appreciation of their unique circumstances and objectives with
                    the investment capacity of a large-scale institutional investor. That means knowing when
                    to apply traditional strategies and when to deviate to ensure consistent, strong
                    risk-adjusted returns.
                </div>
            </div>
        </div>
    </div>
</div>
</section>


<section style="padding: 30px">
<div class="container">
    <div class="tradingview-widget-container" style="width: 100% !important">
        <div class="tradingview-widget-container__widget"></div>

        <script type="text/javascript"
            src="../s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
        {
            "width": "100%",
            "height": "450",
            "defaultColumn": "overview",
            "screener_type": "crypto_mkt",
            "displayCurrency": "GBP",
            "colorTheme": "light",
            "locale": "en"
        }
        </script>
    </div>
    <!-- TradingView Widget END -->
</div>
</section>
            </main>
        @include('visitor.layouts.footer')