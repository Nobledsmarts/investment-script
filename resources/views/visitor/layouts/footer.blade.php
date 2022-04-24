                <footer>
            
                    <div class="container footer-partners">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-sm-12 col-md-9">
                                        <div class="dis20"></div>
                                        <p>
                                            <span class="case-breaker"> </span> <a href="/privacy-policy">Privacy Policy</a> | <a href="/how-it-works">How it works</a> |
                                            <a href="/terms" target="_blank">Terms and Conditions</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        </div>
        <link rel='stylesheet' id='responsive-lightbox-tosrus-css' href='{{ asset('visitor/wp-content/plugins/responsive-lightbox/assets/tosrus/jquery.tosrus.min95b8.css?ver=2.3.2') }}' type='text/css' media='all' />
        <script src="{{ asset('visitor/wp-includes/js/wp-embed.min4024.js?ver=fc4c3a316670000640d679ba4b9d645a') }}" id="wp-embed-js"></script>
        <noscript id="deferred-styles">
            <link rel="stylesheet" href="{{ asset('visitor/cloud/assets/css/new_structure/libraries/fontAwesome.min55c7.css?ver=feea3335b90751c281a90bf7dc0d1159') }}" />
            <link rel="stylesheet" href="{{ asset('visitor/cloud/assets/css/new_structure/libraries/popper_tippy.min3810.css?ver=cee0883c3737303f4995fcad52e4637a') }}" />
            <link rel="stylesheet" href="{{ asset('visitor/cloud/assets/css/minified/sources/xmFontsNew0669.css?ver=45f2927f1d32fa9fac6aa6fd027babc0') }}" />
            <link rel="stylesheet" href="{{ asset('visitor/cloud/assets/css/minified/sources/textblocksf64a.css?ver=50421e7f22633830566e8172d478234b') }}" />
            <link rel="stylesheet" href="{{ asset('visitor/cloud/assets/css/minified/sources/tabs476a.css?ver=e1d5c71e4b27d59b5dc7ea8c612d4089') }}" />
            <link rel="stylesheet" href="{{ asset('visitor/cloud/assets/css/minified/sources/video53c1.css?ver=b07bd97117a57b5c79b64611b4cc14db') }}" />
            <link rel="stylesheet" href="{{ asset('visitor/cloud/assets/css/minified/sources/footer35da.css?ver=c6e629e6a41d1d4d08de114d25672392') }}" />
            <link rel="stylesheet" href="{{ asset('visitor/cloud/assets/css/minified/sources/forms95ac.css?ver=d89487907ce7eac10d254d2afc257f13') }}" />
            <link rel="stylesheet" href="{{ asset('visitor/cloud/assets/css/minified/sources/alertsbbc0.css?ver=bacac506316e55a523f3fbe7fafd36ca') }}" />
            <link rel="stylesheet" href="{{ asset('visitor/cloud/assets/css/minified/sources/livechatCustomdf1d.css?ver=b3f87af42788ce8f409ccdfa6f0cdcdc') }}" />
            <link rel="stylesheet" href="{{ asset('visitor/cloud/assets/css/minified/sources/modalsdb47.css?ver=48ddde9a8ac4fd1f94c05cb6cf93cb26') }}" />
        </noscript>
        <script>
            var loadDeferredStyles = function () {
            var b = document.getElementById("deferred-styles");
            var a = document.createElement("div");
            a.innerHTML = b.textContent;
            document.body.appendChild(a);
            b.parentElement.removeChild(b);
            };
            var raf =
            window.requestAnimationFrame ||
            window.webkitRequestAnimationFrame ||
            window.mozRequestAnimationFrame ||
            function (a) {
                window.setTimeout(a, 1000 / 60);
            };
            if (raf) {
            raf(function () {
                window.setTimeout(loadDeferredStyles, 0);
            });
            } else {
            window.addEventListener("load", loadDeferredStyles);
            }
        </script>
        <!--[if lte IE 10]> <script defer="defer" src="https://cloud/assets/js/minified/match_media.js?ver=71472cf8d7a1c736aa45542aff31af50"></script><![endif]-->
        <!--[if lt IE 9]> <script defer="defer" src="https://cloud/assets/js/minified/shiv_respond.js?ver=502dbe8cd6c1c20b194864044db52711"></script><![endif]-->
        @if(strtolower(Request::segment(1)) != 'faq')
        <script async="async" src="{{ asset('visitor/cloud/assets/js/minified/main_homepage7ffb.js?ver=5e683b671178504352a561cf6f76731c') }}"></script>
        @endif
        <script async="async" src="{{ asset('visitor/cloud/assets/js/minified/jquery_cookie87d2.js?ver=0d34c1f7feb9ea77ce3988585bc1f11b') }}"></script>
        <script src="{{ asset('visitor/cloud/assets/js/libraries/popper_tippy.min6777.js?ver=3733682753ca0df994153ec3f76104b7') }}"></script>
        <script>
            // var imgAsync = document.getElementById("imgAsync");
            // var img = new Image();
            // img.onload = function () {
            // imgAsync.style.background = "#000 url('" + imgAsync.dataset.large + "')repeat-x center top";
            // imgAsync.classList.add("loaded");
            // };
            // img.src = imgAsync.dataset.large;
        </script>
        <script>
            var pleaseWait = "Please wait..";
        </script>
        <script src="{{  asset('assets/js/fn.js') }}"></script>
        <script defer="defer" src="{{ asset('visitor/cloud/assets/js/minified/formsaf07.js?ver=6104f94f8edf3a75952c2a63752e459b') }}"></script>
        <link rel="stylesheet" href="{{  asset('visitor/cloud/assets/css/minified/sources/xmappdbdc.css?ver=85f02bf057ae4e87e1ad7b255a420867') }}" />
        <style>
            #yt-widget[data-theme="dark"] .yt-servicelink, #yt-widget[data-theme="dark"] .yt-servicelink:first-letter{
                display : none !important;
            }
        </style>
        <script src="{{  asset('visitor/cloud/assets/js/minified/xmappfd17.js?ver=d41d8cd98f00b204e9800998ecf8427e') }}"></script>


<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+61 417 560 326", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
 </script>
// <!-- /GetButton.io widget -->

<script src="//code.tidio.co/0gogrohchtcunjvfm7wiqdnhitblen4m.js" async></script>