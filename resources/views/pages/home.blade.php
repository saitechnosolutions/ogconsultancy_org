    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        {{-- seo start --}}
        <meta name="description" content="OG CONSULTANCY WEBSITE" />
        <meta name="keywords" content="OG CONSULTANCY, CONSULTANCT, OG , OG WORLD" />
        <meta name="author" content="OG Consuktancy" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        {{-- seo end --}}

        <!-- Bootstrap CSS -->
        <title>OG CONSULTANCY | HOME</title>
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="shortcut icon" href="{{ asset('assets/images/fav1.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    </head>

    <body>
        @if (isset($home2))
        @else
            <div class="preload preload-container">
                <div class="preload-logo">
                    <img src="{{ asset('assets/images/logo1.svg') }}" alt="brand-logo" class="og_brand_logo"
                        width="203">
                </div>
            </div>
        @endif


        {{-- desktop --}}
        <div class="main-container desktop">
            {{-- header section  --}}
            <section class="header-section-container">
                <header class="header-container">
                    <div class="logo_container">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/logo1.svg') }}" alt="brand-logo" class="og_brand_logo"
                                width="203">
                        </a>
                    </div>
                    <div class="nav_section_container">
                        <nav aria-labelledby="footer">
                            <ul class="social-media-container">

                                <div class="social-media-container">
                                    <li>
                                        <a class="social-icon" href="https://www.facebook.com/ogconsultancyoff"
                                            target="_blank"><i class="fab social_media_icon fa-facebook-f"></i></a>

                                    </li>

                                    <li>
                                        <a class="social-icon" href="#"><i
                                                class="fab social_media_icon fa-skype"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon" href="#"><i
                                                class="fab social_media_icon fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon" href="#"><i
                                                class="fab social_media_icon fa-pinterest-p"></i></a>
                                    </li>
                                </div>
                            </ul>
                        </nav>
                    </div>
                    <!--<div class="logo_container">-->
                    <!--    <a href="{{ url('/') }}">-->
                    <!--        <img src="{{ asset('assets/images/certificate.png') }}" alt="brand-logo" class="og_brand_logo"-->
                    <!--            width="100">-->
                    <!--    </a>-->
                    <!--</div>-->
                </header>
            </section>
            <div>
                <img src="assets/images/certificate.png" class="img-fluid" style="width:100px;position:fixed;left:30px;bottom:60px">
            </div>

            {{-- content -section --}}

            <section class="main_content_section_container"
                style="background:url('{{ asset('assets/images/banner-background.jpg') }}');background-size:cover;">

                {{-- home-page --}}

                <div class="home_content_container home-section active" id="home">
                    <div class="home-banner-bottom-align">
                        <p class="og_brand_content">Reputed Immigration Consultant</p>
                        <h2 class="main_heading">
                            Welcome to OG Consultancy
                        </h2>
                        <p class="banner-about-us-content">
                            Welcome to the home of reliable consultancy solutions, where all your migration-related
                            dreams
                            are achieved through certified Immigration consultants.
                        </p>
                        <div>
                            <a href="{{ route('e_services') }}" class="custom-btn home-banner-btn">
                                <i class="fa-solid fa-hand-point-right hand-icon"></i>
                                Learn More</a>
                        </div>
                    </div>
                    <div class="home-first-image">
                        <img src="{{ asset('assets/images/home-banner_update.jpg') }}" alt="home-banner-image"
                            class="home-page-banner-image first_page">
                    </div>
                </div>
                {{-- e-services section --}}
                <div class="home_content_container home-section active" id="e_services"
                    style="background:url('{{ asset('assets/images/banner-background2.jpg') }}');background-size:cover;">
                    <div class="home-banner-bottom-align">
                        <h2 class="main_heading">
                            E-Services
                        </h2>
                        <p class="banner-about-us-content ">
                            Being the top immigration consultants , we understand the challenges that may arise
                            during the process of migrating to another country. Our goal is to assist you in scaling
                            through
                            these processes, such as assessment, documentation, and filing.
                        </p>
                        <div>
                            <a href="{{ route('e_services') }}" class="custom-btn home-banner-btn">
                                <i class="fa-solid fa-hand-point-right hand-icon"></i> Learn More</a>
                        </div>
                    </div>
                    <div class="home-first-image">
                        <img src="{{ asset('assets/images/image-box/e_services_bg.jpg') }}" alt="home-banner-image"
                            class="home-page-banner-image e_services_image">
                    </div>
                </div>


                {{-- about section --}}
                <div class="home_content_container immigration-container" id="about">
                    <div class="grid-section skilled_immi_section about_section about_content_section">

                        <h2 class="main_heading contact_us_heading">
                            About OG Consultancy
                        </h2>

                        <div>
                            <a href="{{ route('about') }}" class="custom-btn home-banner-btn">
                                <i class="fa-solid fa-hand-point-right hand-icon"></i> Learn More</a>
                        </div>
                    </div>
                    <div class="grid-section skilled_immi_section about_section about_content_section">

                        <h2 class="main_heading contact_us_heading  ">
                            Board Of Directors
                        </h2>




                        <div>
                            <a href="{{ route('directors') }}" class="custom-btn home-banner-btn">
                                <i class="fa-solid fa-hand-point-right hand-icon"></i> Learn More</a>
                        </div>
                    </div>

                    <div class="grid-section skilled_immi_section about_section about_content_section">

                        <h2 class="main_heading contact_us_heading  ">
                            What We Do</h2>

                        <div>
                            <a href="{{ route('whatWeDo') }}" class="custom-btn home-banner-btn">
                                <i class="fa-solid fa-hand-point-right hand-icon"></i> Learn More</a>
                        </div>
                    </div>


                </div>


                {{-- immigration section --}}
                <div class="home_content_container immigration-container" id="immigration">
                    <div class="grid-section skilled_immi_section">
                        <div class="animi_lgo_container">
                            <img class="animation_icon" src="{{ asset('assets/images/animi2.gif') }}" alt=""
                                width="50px" height="50px" srcset="">
                        </div>
                        <h2 class="main_heading grid_heading">
                            Skilled Immigration
                        </h2>

                        <div>
                            <a href="{{ route('skilled_immigration') }}" class="custom-btn home-banner-btn">
                                <i class="fa-solid fa-hand-point-right hand-icon"></i> Learn More</a>
                        </div>
                    </div>
                    <div class="grid-section skilled_immi_section">
                        <div class="animi_lgo_container">
                            <img class="animation_icon" src="{{ asset('assets/images/animi1.gif') }}" alt=""
                                width="50px" height="50px" srcset="">
                        </div>
                        <h2 class="main_heading grid_heading">
                            Student Visa
                        </h2>

                        <div>
                            <a href="{{ route('student_visa') }}" class="custom-btn home-banner-btn">
                                <i class="fa-solid fa-hand-point-right hand-icon"></i> Learn More</a>
                        </div>
                    </div>
                    <div class="grid-section skilled_immi_section">
                        <div class="animi_lgo_container">
                            <img class="animation_icon" src="{{ asset('assets/images/animi3.gif') }}" alt=""
                                width="50px" height="50px" srcset="">
                        </div>
                        <h2 class="main_heading grid_heading">
                            Business Immigration
                        </h2>

                        <div>
                            <a href="{{ route('business_immigration') }}" class="custom-btn home-banner-btn">
                                <i class="fa-solid fa-hand-point-right hand-icon"></i> Learn
                                More</a>
                        </div>
                    </div>
                    <div class="grid-section skilled_immi_section">
                        <div class="animi_lgo_container">
                            <img class="animation_icon" src="{{ asset('assets/images/animi4.gif') }}" alt=""
                                width="50px" height="50px" srcset="">
                        </div>
                        <h2 class="main_heading grid_heading">
                            Visit Visa
                        </h2>
                        <div>
                            <a href="{{ route('visit_visa') }}" class="custom-btn home-banner-btn">
                                <i class="fa-solid fa-hand-point-right hand-icon"></i> Learn More</a>
                        </div>
                    </div>
                </div>



                {{-- success gallery --}}
                <div class="home_content_container home-section active" id="success">
                    <div class="home-banner-bottom-align ">
                        <h2 class="main_heading">
                            Success Gallery
                        </h2>
                        <p class="banner-about-us-content">
                            "To be the finest consulting firm accessing worldwide. We determine to be premier in
                            client's
                            value, The staff we employ, and spirit as a firm."
                        </p>
                        <div>
                            <a href="{{ route('success_gallery') }}" class="custom-btn home-banner-btn">
                                <i class="fa-solid fa-hand-point-right hand-icon"></i> Learn More</a>
                        </div>
                    </div>
                    <div class="home-first-image">
                        <img src="{{ asset('assets/images/image-box/about_4.jpg') }}" alt="home-banner-image"
                            class="home-page-banner-image success_gallery_image">
                    </div>
                </div>

                {{-- contact --}}
                <div class="home_content_container immigration-container" id="contact">
                    <div class="grid-section skilled_immi_section about_section about_content_section">

                        <h2 class="main_heading contact_us_heading">
                            Contact Us
                        </h2>
                        <p class="banner-about-us-content update_banner_about_content">
                            Get in touch with us today and let us help you get started on our professional immigration
                            services.
                        </p>

                        <div>
                            <a href="{{ route('contact') }}" class="custom-btn home-banner-btn">
                                <i class="fa-solid fa-hand-point-right hand-icon"></i> Here</a>
                        </div>
                    </div>
                    <div class="grid-section skilled_immi_section about_section about_content_section">

                        <h2 class="main_heading contact_us_heading  ">
                            Our Office Locations
                        </h2>
                        <p class="banner-about-us-content update_banner_about_content ">
                            With over 12 office locations in over 6 countries, we provide local knowledge with global
                            experience.
                        </p>

                        <div>
                            <a href="{{ route('locations') }}" class="custom-btn home-banner-btn">
                                <i class="fa-solid fa-hand-point-right hand-icon"></i> Learn More</a>
                        </div>
                    </div>


                </div>
            </section>

            {{-- footer section --}}
            <section class="footer_section_container">
                <footer class="footer_section">
                    <nav class="navigation_links_container" aria-labelledby="header">
                        <ul class="navigation_links_container_lists">
                            <li class="footer_nav_link active" style="flex: 0 0 12.2857142857%;" data-target="home"><a href="#"
                                    data-href="#">Home</a>
                            </li>
                             <li class="footer_nav_link" style="flex: 0 0 12.2857142857%;" data-target="careers"><a href="{{ url('careers') }}"
                                    data-href="{{ url('careers') }}">OG Career</a></li>
                            <li class="footer_nav_link" style="flex: 0 0 12.2857142857%;" data-target="e_services"><a href="#"
                                    data-href="#">E-Services</a></li>
                            <li class="footer_nav_link" style="flex: 0 0 12.2857142857%;" data-target="about"><a href="#"
                                    data-href="#">About</a>
                            </li>
                            <li class="footer_nav_link" style="flex: 0 0 12.2857142857%;" data-target="immigration"><a href="#"
                                    data-href="#">Immigration</a></li>
                            <li class="footer_nav_link" style="flex: 0 0 12.2857142857%;" data-target="prImport"><a href="{{ url('business_setup') }}"
                                    data-href="#">Business Setup</a></li>
                            <li class="footer_nav_link" style="flex: 0 0 12.2857142857%;" data-target="success"><a href="#"
                                    data-href="#">Success
                                    Gallery</a></li>
                                    <!--<li class="footer_nav_link" style="flex: 0 0 12.2857142857%;" data-target="careers"><a href="{{ url('careers') }}"-->
                                    <!--data-href="{{ url('careers') }}">Careers</a></li>-->
                            <li class="footer_nav_link" style="flex: 0 0 12.2857142857%;" data-target="contact"><a href="#"
                                    data-href="#">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </footer>
            </section>
        </div>



        {{-- mobile --}}
        <div class="main-container mobile">
            {{-- header section  --}}
            <section class="header-section-container">
                <header class="header-container">
                    <div class="logo_container">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/logo1.svg') }}" alt="brand-logo" class="og_brand_logo"
                                width="203">
                        </a>
                    </div>
                    <div class="nav_section_container">
                        <nav aria-labelledby="footer">
                            <ul class="social-media-container">

                                <div class="social-media-container">
                                    <li>
                                        <a class="social-icon" href="https://www.facebook.com/ogconsultancyoff"
                                            target="_blank"><i class="fab social_media_icon fa-facebook-f"></i></a>

                                    </li>

                                    <li>
                                        <a class="social-icon" href="#"><i
                                                class="fab social_media_icon fa-skype"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon" href="#"><i
                                                class="fab social_media_icon fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon" href="#"><i
                                                class="fab social_media_icon fa-pinterest-p"></i></a>
                                    </li>
                                </div>
                            </ul>
                        </nav>
                    </div>
                </header>
            </section>

            <section class="footer_section_container mobile">
                <footer class="footer_section">
                    <nav class="navigation_links_container" aria-labelledby="header">
                        <ul class="navigation_links_container_lists mobile">
                            <li class="footer_nav_link mobile active" data-target="home"><a href="#"
                                    data-href="#">Home</a>
                            </li>
                            <li class="footer_nav_link mobile " data-target="careers"><a href="{{ url('careers') }}"
                                    data-href="{{ url('careers') }}">OG Career</a>
                            </li>
                            <li class="footer_nav_link mobile" data-target="e_services"><a href="#id_e_services"
                                    data-href="#">E-Services</a></li>
                            <li class="footer_nav_link mobile" data-target="about"><a href="#id_about"
                                    data-href="#">About</a>
                            </li>
                            <li class="footer_nav_link mobile" data-target="immigration"><a href="#id_immigration"
                                    data-href="#">Immigration</a></li>
                            <li class="footer_nav_link mobile"><a href="{{ url('business_setup') }}"
                                    data-href="#">Business Setup</a></li>
                            <li class="footer_nav_link mobile large" data-target="success"><a href="#id_success"
                                    data-href="#">Success
                                    Gallery</a></li>
                            <li class="footer_nav_link mobile small" data-target="success"><a href="#id_success"
                                    data-href="#">
                                    Success Gallery</a></li>
                            <!--<li class="footer_nav_link mobile " data-target="careers"><a href="{{ url('careers') }}"-->
                            <!--        data-href="{{ url('careers') }}">Careers</a>-->
                            <!--</li>-->
                             <li class="footer_nav_link mobile " data-target="contact"><a href="#id_contact"
                                    data-href="#">Contact</a>
                            </li>
                            <li class="footer_nav_link mobile hide" data-target="contact"><a href="#"
                                    data-href="#"></a>
                            </li>
                            <li class="footer_nav_link mobile hide" data-target="contact"><a href="#"
                                    data-href="#"></a>
                            </li>
                            <li class="footer_nav_link mobile hide" data-target="contact"><a href="#"
                                    data-href="#"></a>
                            </li>
                            <li class="footer_nav_link mobile hide" data-target="contact"><a href="#"
                                    data-href="#"></a>
                            </li>


                        </ul>
                    </nav>
                </footer>
            </section>
            {{-- content -section --}}

            <section class="main_content_section_container"
                style="background:url('{{ asset('assets/images/banner-background.jpg') }}');background-size:cover;">

                {{-- home-page --}}

                <div class="home_content_container home-section active" id="home">

                    <div class="home-banner-bottom-align ">
                        <p class="og_brand_content update">Reputed Immigration Consultant</p>
                        <h2 class="main_heading update">
                            Welcome to OG Consultancy
                        </h2>
                        <p class="banner-about-us-content update">
                            Welcome to the home of reliable consultancy solutions, where all your migration-related
                            dreams
                            are achieved through certified Immigration consultants.
                        </p>
                        <div>
                            <a href="{{ route('e_services') }}" class="custom-btn home-banner-btn">
                                <i class="fa-solid fa-hand-point-right hand-icon"></i>
                                Learn More</a>
                        </div>
                    </div>

                    <div id="id_e_services"></div>
                </div>






                {{-- e-services section --}}
                <div class="home_content_container home-section active" id="e_services"
                    style="background:url('{{ asset('assets/images/banner-background2.jpg') }}');background-size:cover;">
                    <div class="home-banner-bottom-align">
                        <h2 class="main_heading">
                            E-Services
                        </h2>
                        <p class="banner-about-us-content e_services_content_update">
                            Being the top immigration consultants, we understand the challenges that may arise
                            during the process of migrating to another country. Our goal is to assist you in scaling
                            through
                            these processes, such as assessment, documentation, and filing.
                        </p>
                        <div>
                            <a href="{{ route('e_services') }}" class="custom-btn home-banner-btn">
                                <i class="fa-solid fa-hand-point-right hand-icon"></i> Learn More</a>
                        </div>

                    </div>

                    <div class="home-first-image">
                        <img src="{{ asset('assets/images/image-box/about_3.jpg') }}" alt="home-banner-image"
                            class="home-page-banner-image e_services_image">
                    </div>
                    <div id="id_about"></div>


                </div>



                {{-- about section --}}
                <div class="home_content_container immigration-container" id="about">
                    <div class="grid-section skilled_immi_section about_section about_content_section">

                        <h2 class="main_heading contact_us_heading">
                            About OG Consultancy
                        </h2>


                        <div>
                            <a href="{{ route('about') }}" class="custom-btn home-banner-btn">
                                <i class="fa-solid fa-hand-point-right hand-icon"></i> Learn More</a>
                        </div>
                    </div>
                    <div class="grid-section skilled_immi_section about_section about_content_section">

                        <h2 class="main_heading contact_us_heading  ">
                            Board Of Directors
                        </h2>



                        <div>
                            <a href="{{ route('directors') }}" class="custom-btn home-banner-btn">
                                <i class="fa-solid fa-hand-point-right hand-icon"></i> Learn More</a>
                        </div>
                        <div id="id_immigration"></div>
                    </div>

                    <div class="grid-section skilled_immi_section about_section about_content_section">

                        <h2 class="main_heading contact_us_heading  ">
                            What We Do</h2>

                        <div>
                            <a href="{{ route('whatWeDo') }}" class="custom-btn home-banner-btn">
                                <i class="fa-solid fa-hand-point-right hand-icon"></i> Learn More</a>
                        </div>
                    </div>



                </div>


                {{-- immigration section --}}
                <div class="home_content_container immigration-container" id="immigration">
                    <div class="grid-section skilled_immi_section">
                        <div class="animi_lgo_container">
                            <img class="animation_icon" src="{{ asset('assets/images/animi2.gif') }}" alt=""
                                width="50px" height="50px" srcset="">
                        </div>
                        <h2 class="main_heading grid_heading">
                            Skilled Immigration
                        </h2>

                        <div>
                            <a href="{{ route('skilled_immigration') }}" class="custom-btn home-banner-btn">
                                <i class="fa-solid fa-hand-point-right hand-icon"></i> Learn More</a>
                        </div>
                    </div>
                    <div class="grid-section skilled_immi_section">
                        <div class="animi_lgo_container">
                            <img class="animation_icon" src="{{ asset('assets/images/animi1.gif') }}" alt=""
                                width="50px" height="50px" srcset="">
                        </div>
                        <h2 class="main_heading grid_heading">
                            Student Visa
                        </h2>

                        <div>
                            <a href="{{ route('student_visa') }}" class="custom-btn home-banner-btn">
                                <i class="fa-solid fa-hand-point-right hand-icon"></i> Learn More</a>
                        </div>
                    </div>
                    <div class="grid-section skilled_immi_section">
                        <div class="animi_lgo_container">
                            <img class="animation_icon" src="{{ asset('assets/images/animi3.gif') }}" alt=""
                                width="50px" height="50px" srcset="">
                        </div>
                        <h2 class="main_heading grid_heading">
                            Business Immigration
                        </h2>

                        <div>
                            <a href="{{ route('business_immigration') }}" class="custom-btn home-banner-btn">
                                <i class="fa-solid fa-hand-point-right hand-icon"></i> Learn
                                More</a>
                        </div>
                    </div>
                    <div class="grid-section skilled_immi_section">
                        <div class="animi_lgo_container">
                            <img class="animation_icon" src="{{ asset('assets/images/animi4.gif') }}" alt=""
                                width="50px" height="50px" srcset="">
                        </div>
                        <h2 class="main_heading grid_heading">
                            Visit Visa
                        </h2>
                        <div>
                            <a href="{{ route('visit_visa') }}" class="custom-btn home-banner-btn">
                                <i class="fa-solid fa-hand-point-right hand-icon"></i> Learn More</a>
                        </div>
                        <div id="id_success"></div>
                    </div>

                </div>




                {{-- success gallery --}}
                <div class="home_content_container home-section active" id="success">
                    <div class="home-banner-bottom-align success_gallery_left">
                        <h2 class="main_heading">
                            Success Gallery
                        </h2>
                        <p class="banner-about-us-content">
                            "To be the finest consulting firm accessing worldwide. We determine to be premier in
                            client's
                            value, The staff we employ, and spirit as a firm."
                        </p>
                        <div>
                            <a href="{{ route('success_gallery') }}" class="custom-btn home-banner-btn">
                                <i class="fa-solid fa-hand-point-right hand-icon"></i> Learn More</a>
                        </div>
                    </div>
                    <div class="home-first-image">
                        <img src="{{ asset('assets/images/image-box/about_4.jpg') }}" alt="home-banner-image"
                            class="home-page-banner-image success_gallery_image">

                    </div>
                    <div id="id_contact"></div>
                </div>


                {{-- contact --}}
                <div class="home_content_container immigration-container" id="contact">
                    <div class="grid-section skilled_immi_section about_section about_content_section contact_section">

                        <h2 class="main_heading contact_us_heading update">
                            Contact Us
                        </h2>
                        <p class="banner-about-us-content update_banner_about_content update">
                            Get in touch with us today and let us help you get started on our professional immigration
                            services.
                        </p>

                        <div>
                            <a href="{{ route('contact') }}" class="custom-btn home-banner-btn">
                                <i class="fa-solid fa-hand-point-right hand-icon"></i> Here</a>
                        </div>
                    </div>
                    <div class="grid-section skilled_immi_section about_section about_content_section contact_section">

                        <h2 class="main_heading contact_us_heading  update">
                            Our Office Locations
                        </h2>
                        <p class="banner-about-us-content update_banner_about_content update ">
                            With over 12 office locations in over 6 countries, we provide local knowledge with global
                            experience.
                        </p>

                        <div>
                            <a href="{{ route('locations') }}" class="custom-btn home-banner-btn">
                                <i class="fa-solid fa-hand-point-right hand-icon"></i> Learn More</a>
                        </div>
                         <div>
                <img src="assets/images/certificate.png" class="img-fluid" style="width:100px;margin-top:20px">
            </div>
                    </div>


                </div>
            </section>

            {{-- footer section --}}

        </div>






        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script>
            window.addEventListener("keyup", (e) => {
                if (e.keyCode == 44 || e.keyCode == 45) {
                    const html = `
                   <div class="alert alert-warning alert-fade" role="alert" style="position:fixed;top:100px;right:50px;background:#fff;padding:10px 20px;font-size:24px">
        ScreenShot Resctricted
</div>

              `
                    document.body.insertAdjacentHTML("beforeend", html)
                    setTimeout(() => {
                        window.navigator.clipboard.writeText("Screenshot Restricted");
                    }, 500)
                    setTimeout(() => {
                        document
                            .querySelectorAll(".alert-warning")
                            .forEach((item) => item.remove());
                    }, 2000);

                }
            });
        </script>

        <script>
            @if (isset($home2))
            @else

                $(document).ready(function() {
                    setTimeout(() => {
                        $(".preload").fadeOut("slow");
                    }, 2000)
                });
            @endif
        </script>




    </body>

    </html>