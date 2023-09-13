<!-- Footer -->
<footer id="footer" class="clearfix">
    <div id="footer-widgets" class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo-footer">
                    <a href="{{ route('home') }}" rel="home" class="main-logo">
                        <img src="assets/images/logo1.png" class="footer_logo" alt="images">
                    </a>
                </div>
                <p class="text-widget">To provide seamless professional consultancy services across the world. Our
                    purpose is to serve our clients and customers by understanding and addressing the need and persuade
                    with technical expertise and in-depth industrial knowledge.</p>
                <div class="widget-social">
                    <ul>
                        <li><a href="#" class="facebook-icon"></a></li>
                        <li><a href="#" class="twitter-icon"></a></li>
                        <li><a href="#" class="linked-icon"></a></li>
                        <li><a href="#" class="instagram-icon"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="footer-widgets-nav-menu text-white">
                    <div class="menu-1">
                        <h3 class="widget-title-link-wrap">Company</h3>
                        <div class="widget-links">
                            <ul class="link-wrap">
                                <li><a href="{{ isset($about) ? '#' : route('about') }}">About us</a></li>
                                <li><a href="{{ isset($immigration_type) ? '#' : route('skilled_immigration') }}">Immigration
                                        Type</a></li>
                                        
                                <li><a href="{{ isset($success_gallery) ? '#' : route('success_gallery') }}">Success
                                        Gallery</a></li>
                                <li><a href="{{ isset($careers) ? '#' : route('careers') }}">Careers</a></li>
                                <li><a href="{{ isset($contact) ? '#' : route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-2">
                        <h3 class="widget-title-link-wrap">Immigration</h3>
                        <ul class="link-wrap menu2">
                            <li><a href="{{ route('skilled_immigration') }}">Skilled Immigration</a></li>
                            <li><a href="{{ route('student_visa') }}">Student Visa</a></li>
                            <li><a href="{{ route('business_immigration') }}">Business Immigration</a></li>
                            <li><a href="{{ route('visit_visa') }}">Visit Visa</a></li>

                        </ul>
                    </div>

                    <div class="menu-2">
                        <h3 class="widget-title-link-wrap">Location</h3>
                        <div class="widget-links">
                            <ul class="link-wrap">
                                <li><a href="https://goo.gl/maps/UhAnJaWxaGB5DzD4A">India</a></li>
                                <li><a href="https://goo.gl/maps/zxz8YXoGMuUASH9y6">Sri Lanka</a></li>
                                <li><a href="https://goo.gl/maps/JVyAYXkFKLpbWDYh7">Singapore</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="menu-3">
                        <h3 class="widget-title-link-wrap style-2">Get in Touch</h3>
                        <ul class="widget-list-contact link-style-4">
                            {{-- <li>
                                <span class="meta-address">66 Broklyant, India 3269 Road.</span>
                            </li> --}}
                            <li><a href="mailto:info@ogconsultancy.in" class="meta-mail">info@ogconsultancy.in</a>
                            </li>
                            <li><a href="tel:+91 91596 00753" class="meta-phone">+91 91596 00753</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- /#footer -->
<!-- Bottom -->
<div id="bottom" class="clearfix has-spacer">
    <div id="bottom-bar-inner" class="container">
        <div class="bottom-bar-inner-wrap">
            <div class="bottom-bar-content-left link-style-4">
                <div id="copyright"><span class="text">Copyright © 2022 OG Consultancy. Design
                        by <a href="https://saitechnosolutions.com/">Sai Techno Solutions</a></span>
                </div>
            </div>
            <div class="bottom-bar-content-right">
                <div class="widget-links-bottom link-style-4">
                    <ul>
                        <li><a href="{{ isset($about) ? '#' : route('about') }}">About</a></li>
                        <li><a href="{{ isset($contact) ? '#' : route('contact') }}">Contact</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!-- /#bottom -->