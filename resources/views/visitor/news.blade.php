@include('visitor.layouts.header')
<style>
    .
</style>
<div class="container-fluid top-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <h1 class="ltr text-left">
                    News
                </h1>
                <ol class="breadcrumb">
                    <li class="home">
                        <a href="/" class="home">{{ env('SITE_NAME') }}</a>
                    </li>
                    <li class="post post-page current-item">News</li>
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
        <div class="col-12">
                <div class="row">
                    <div class="col-12" style="min-height: 500px; width:100%" align="center">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container" style="" align="center">
                            <div class="tradingview-widget-container__widget" style="" align="center"></div>
                            
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                            {
                            "feedMode": "all_symbols",
                            "colorTheme": "light",
                            "isTransparent": true,
                            "displayMode": "adaptive",
                            "width": "100%",
                            "height": "500",
                            "locale": "en"
                        }
                            </script>
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