<div class="header">
    <div class="" align="center" style="background:#9e041f;">
        <div id="ytWidget" class="hidden-s"></div>
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
    </div>
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-header">
            <a class="navbar-brand" href="/user">
                     <img src="/assets/images/logo.jpg" alt="homepage" class="dark-logo" style="width:40px"/> 
                <span class="small text-light">{{ env('SITE_NAME') }}</span>
            </a>
        </div>

        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto mt-md-0">
                <li class="nav-item">
                    <a class="nav-link toggle-nav hidden-md-up text-muted" href="javascript:void(0)"><i class="fa fa-bars text-light"></i></a>
                </li>
                <li class="nav-item m-l-10">
                    <a class="nav-link sidebartoggle hidden-sm-down text-muted" href="javascript:void(0)"><i class="fa fa-bars text-light"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                    <div class="dropdown-menu dropdown-menu-right animated slideInRight">
                        <ul class="dropdown-user">
                            <li role="separator" class="divider"></li>
                            <li><a href="/user/profile"> Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/user/security"> Security</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/user/logout"> Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>