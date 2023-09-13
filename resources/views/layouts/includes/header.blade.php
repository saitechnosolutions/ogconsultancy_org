<div id="site-header-wrap">
    <!-- /#site-logo -->
    <!-- Header -->
    <header id="site-header">
        <div id="site-logo" class="clearfix">
            <div class="site-logo-inner-wrap">
                <div id="site-logo-inner">
                    <a href="{{ isset($home) ? '#' : route('home') }}" rel="home" class="main-logo">
                        <img src="assets/images/logo1.png" alt="logo_image" width="200" height="48"
                            class="logo-background" data-retina="assets/images/logo/logo-light@3x.png" data-width="183"
                            data-height="48">
                    </a>
                </div>
            </div>
        </div>
        <div class="header-box">
            <!-- Top Bar -->
            <div id="top-bar">
                <div id="top-bar-inner">
                    <div class="top-bar-content">
                        <div class="top-bar-left">

                            <span class="mail section-14px-regular"><a
                                    href="mailto:
                                    info@ogconsultancy.in">info@ogconsultancy.in</a></span>
                        </div>
                        <div class="top-bar-right">
                            <span class="phone section-14px-regular"><a href="tel:+91 9159600753">
                                    +91 91596 00753</a></span>
                            <div class="socials-header">
                                <ul class="widget-socials link-style-3">
                                    <li><a href="#" class="facebook"></a></li>
                                    <li><a href="#" class="twitter"></a></li>
                                    <li><a href="#" class="linked-in"></a></li>
                                    <li><a href="#" class="instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.top-bar-content -->
                </div>
            </div>
            <!-- /#top-bar -->
            <div id="site-header-inner">
                <div class="wrap-inner clearfix">
                    <div class="mobile-button">
                        <span></span>
                    </div>
                    <!-- /.mobile-button -->
                    <nav id="main-nav" class="main-nav">
                        <ul id="menu-primary-menu" class="menu">
                            <li class="menu-item ">
                                <a href="{{ url('/') }}" class="main_nav">Home</a>
                            </li>

                            <li class="menu-item {{ isset($about) ? 'current-menu-item' : '' }}">
                                <a href="{{ isset($about) ? '#' : route('about') }}" class="main_nav">About Us</a>
                            </li>
                            <li class="menu-item {{ isset($services) ? 'current-menu-item' : '' }}">
                                <a href="{{ isset($services) ? '#' : route('e_services') }}"
                                    class="main_nav">E-Services</a>
                            </li>
                            <li
                                class="menu-item menu-item-has-children {{ isset($immigration_type) ? 'current-menu-item' : '' }}">
                                <a href="#" class="main_nav">Immigration Type</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="{{ route('skilled_immigration') }}"
                                            class="sub_nav_menu">Skilled Immigration</a>
                                    </li>
                                    <li class="menu-item"><a href="{{ route('student_visa') }}"
                                            class="sub_nav_menu">Student Visa</a>
                                    </li>
                                    <li class="menu-item"><a href="{{ route('business_immigration') }}"
                                            class="sub_nav_menu">Business
                                            Immigration</a></li>
                                    <li class="menu-item menu-item-has-children nested_nav_menu">
                                        <a href="{{ route('visit_visa') }}"
                                            class=" nested_sub_menu_link sub_nav_menu">Visit Visa</a>
                                        {{-- sub_nav_menu link_has-submenu --}}
                                        {{-- <ul class="sub-menu" style="display: none">
                                            <li class="menu-item"><a href="#" class="sub_nav_menu">Canada</a></li>
                                            <li class="menu-item"><a href="#" class="sub_nav_menu">Australia</a>
                                            </li>
                                            <li class="menu-item"><a href="#" class="sub_nav_menu">New Zealand</a>
                                            </li>
                                            <li class="menu-item"><a href="#" class="sub_nav_menu">UK</a></li>
                                            <li class="menu-item"><a href="#" class="sub_nav_menu">USA</a></li>
                                        </ul> --}}
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item {{ isset($success_gallery) ? 'current-menu-item' : '' }}">
                                <a href="{{ isset($success_gallery) ? '#' : route('success_gallery') }}"
                                    class="main_nav">Success Gallery</a>
                            </li>
                             <li class="menu-item {{ isset($careers) ? 'current-menu-item' : '' }}">
                                <a href="{{ isset($careers) ? '#' : route('careers') }}"
                                    class="main_nav">Careers</a>
                            </li>
                            <li class="menu-item {{ isset($contact) ? 'current-menu-item' : '' }}">
                                <a href="{{ isset($contact) ? '#' : route('contact') }}" class="main_nav">Contact</a>
                            </li>

                        </ul>
                    </nav>
                    <!-- /#main-nav -->
                </div>

            </div>
            <!-- /#site-header-inner -->
        </div>
    </header>
    <!-- /#site-header -->

    <div class="side-menu__block">
        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
        <div class="side-menu__block-inner">
            <div class="side-menu__top justify-content-end">
                <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="assets/icon/close-1-1.png"
                        alt="images"></a>
            </div>
            <div class="side-menu__top-introduce">
                <a href="index.html" rel="home" class="main-logo">
                    <img src="assets/images/logo/logo.png" alt="images">
                </a>
                <p>Etiam efficitur, metus in cursus imperdiet, neque nisl porta erat, nec volutpat
                    felis lacus a tellus. Nunc tristique nulla nisi.</p>
                <hr>
            </div>
            <div class="side-menu__top-search">
                <div class="widget widget-search">
                    <h3 class="widget-title section-24px-barlow">
                        Search
                    </h3>
                    <form action="#" method="get" role="search" class="search-form">
                        <input type="search" class="search-field" placeholder="Search..." value=""
                            name="s" title="Search for" required="">
                        <button class="search search-submit" type="submit" title="Search"></button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="side-menu__top-category">
                <div class="widget widget-category">
                    <h3 class="widget-title section-24px-barlow">
                        Categories
                    </h3>
                    <ul>
                        <li class="cat-item active"><a href="blog.html">Graphics
                                Design</a><span>36</span></li>
                        <li class="cat-item"><a href="blog.html">ui/ux brand design</a><span>32</span>
                        </li>
                        <li class="cat-item"><a href="blog.html">web devolopment</a><span>26</span></li>
                        <li class="cat-item"><a href="blog.html">branding design</a><span>16</span></li>
                        <li class="cat-item"><a href="blog.html">ui/ux brand design</a><span>32</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /#main-nav -->
        </div>
    </div>


</div>