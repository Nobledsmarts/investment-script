        <footer id="footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">

                            <div class="widget  widget-contact-us"
                                style="background-image: url('images/world-map-dark.png'); background-position: 50% 20px; background-repeat: no-repeat">
                                <h4>Our Contacts</h4>
                                <ul class="list-icon">
                                    <li><i class="fa fa-map-marker"></i> {{ env('SITE_ADDRESS') }} </li>
                                    <!-- <li><i class="fa fa-phone"></i> <a href="tel:+For VIP Members only">+For VIP Members only</a> </li> -->
                                    <li><i class="far fa-envelope"></i> <a
                                            href="support%40{{ env('SITE_NAME_SHORT') }}investmentfunds">support@{{ env('SITE_NAME_SHORT') }}investmentfunds.com</a> </li>
                                    <li>
                                        <i class="far fa-clock"></i>Monday - Friday: <strong>08:00 - 22:00</strong> <br>
                                        Saturday, Sunday: <strong>Closed</strong>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-3  col-lg-2 col-md-6">

                            <div class="widget">
                                <h4>Quick Links</h4>
                                <ul class="list" style="padding-left: 0 !important;">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about-us">About Us</a></li>
                                    <li><a href="/affiliate">Affiliate</a></li>
                                    <li><a href="/terms">Terms and Conditions</a></li>
                                    <li><a href="/register">Create Account</a></li>
                                    <li><a href="/login">Account Login</a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-5 col-lg-2 col-md-12">
                            <p><a href="#"><img style="height: 100px; width: 100%; object-fit: cover"
                                        src="{{ asset('visitor/site-images/site_logo/cover.png') }}" alt="logo"></a></p>
                            <p> {{ env('SITE_NAME_SHORT') }} Investment Funds is dedicated to helping investors around the world reach
                                their desired investment goals and broaden their financial horizons.
                                <br><br>
                                We seek to provide world-class investment expertise across a breadth of markets and
                                asset classes. Coupled with a wide
                                range of investment approaches, we transform new investment ideas into practical
                                investment products designed to deliver real value for money to investors.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
                


            <div class="copyright-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="social-icons social-icons">
                                <ul>
                                    <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <!--<li class="social-vimeo"><a href="#"><i class="fab fa-vimeo"></i></a></li>-->
                                    <!--<li class="social-youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>-->
                                    <!--<li class="social-pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>-->
                                    <li class="social-gplus"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-6 text-right">
                            <div class="copyright-text">© 2022 {{ env('SITE_NAME_SHORT') }} Investment Funds. All Rights Reserved. </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "3e40217ff06e26638dff4410e5ba8e241f66b3caeffaee75d3d0d194726b4eda38d4acc225e44ff5009462ded0261ab4", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.eu/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script>
        </div>


        <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

        <script src="{{ asset('visitor/js/plugins.js') }}"></script>
        <script src="{{ asset('visitor/plugins/particles/particles.js') }}"></script>
        <script src="{{ asset('visitor/plugins/particles/particles-dots.js') }}"></script>
        <script src="{{ asset('visitor/plugins/p.html') }}"></script>

        <script src="{{ asset('visitor/js/functions.js') }}"></script>

        <script src="{{ asset('visitor/imported-js.js') }}"></script>

        <script src="{{ asset('visitor/inc-js/js/vendors/indonez.min.js') }}"></script>
        <script src="{{ asset('visitor/inc-js/js/vendors/uikit.min.js') }}"></script>
        <script src="{{ asset('visitor/inc-js/js/config-theme.js') }}"></script>
    </body>
</html>