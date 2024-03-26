<header class="main-header">
    <!-- header-top -->
    <div class="header-top">
        <div class="top-inner clearfix">
            <div class="left-column pull-left">
                <ul class="info clearfix">
                    <li><i class="fas fa-bullhorn"></i> TELEKREHÁZAT, NÉZD MEG AZ ÁRAT!</li>

                </ul>
            </div>
            <div class="right-column pull-right">
                <ul class="social-links clearfix">
                    <li><a href="https://www.facebook.com/telekrehazatkft"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/telekrehazatkft/?hl=en"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li><a href="https://www.linkedin.com/company/telekrehazat/about/"><i
                                class="fab fa-linkedin"></i></a></li>

                </ul>
                @auth

                    <div class="sign-box">
                        <a href="{{ route('dashboard') }}"><i class="fas fa-user"></i>Dashboard</a>
                        <a href="{{ route('user.logout') }}"><i class="fas fa-user"></i>Logout</a>
                    </div>
                @else
                    <div class="sign-box">
                        <a href="{{ route('login') }}"><i class="fas fa-user"></i>Bejelentkezés</a>
                    </div>

                @endauth
            </div>
        </div>
    </div>
    <!-- header-lower -->
    <div class="header-lower">
        <div class="outer-box">
            <div class="main-box">
                <div class="logo-box">
                    <figure class="logo"><a href="/"><img
                                src="{{ asset('frontend/assets/images/nav_logo.png') }}" alt=""></a>
                    </figure>
                </div>
                <div class="menu-area clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="{{ route('properties.all') }}"><span>Típustervek
                                        </span></a></li>


                                <li><a href="/littlesmart"><span>Kisokos</span></a></li>
                                <li><a href="/#house"><span>Útmutató</span></a></li>


                                <li><a href="/to_be_partner"><span><img
                                                src="{{ asset('frontend/assets/images/legyenpartner.png') }}"style="max-width:150px; height:auto;"
                                                alt=""></span></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="btn-box">
                    <a href="index.html" class="theme-btn btn-one"><span>+</span>Add Listing</a>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="outer-box">
            <div class="main-box">
                <div class="logo-box">
                    <figure class="logo"><a href="/"><img
                                src="{{ asset('frontend/assets/images/nav_logo.png') }}" alt=""></a>
                    </figure>
                </div>
                <div class="menu-area clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
                <div class="btn-box">
                    <a href="/" class="theme-btn btn-one"><span>+</span>Add Listing</a>
                </div>
            </div>
        </div>
    </div>
</header>
