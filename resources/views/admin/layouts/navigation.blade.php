<div class="header">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
                <b>
                    &nbsp;
                    <!-- <img src="/assets/images/logo.png" alt="homepage" class="dark-logo" /> -->
                </b>

                <span>{{ env('SITE_NAME_SHORT') }}</span>
            </a>
        </div>

        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto mt-md-0">
                <li class="nav-item">
                    <a class="nav-link toggle-nav hidden-md-up text-light" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                </li>
                <li class="nav-item m-l-10">
                    <a class="nav-link sidebartoggle hidden-sm-down text-light" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                    <div class="dropdown-menu dropdown-menu-right animated slideInRight">
                        <ul class="dropdown-user">
                            <li role="separator" class="divider"></li>
                            <li><a href="#"> Profile</a></li>
                            <li><a href="#"> Balance</a></li>
                            <li><a href="#"> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"> Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"> Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>