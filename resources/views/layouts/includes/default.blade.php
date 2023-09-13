<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>@yield('title')</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/home_style.css') }}">

    <!-- icomoon font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icomoon.css') }}">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/swiper-bundle.min.css') }}">




    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/fav1.png') }}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->

    {{-- @vite(['public/assets/css/home_style.css', 'public/assets/js/main.js']) --}}

</head>

<body class="header-fixed counter-scroll">

    <!-- preloader -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <!-- /preloader -->
    <div id="wrapper" class="animsition">
        <div id="page" class="clearfix">
            <!-- Header Wrap -->
            {{-- @include('layouts.includes.header') --}}
            <!-- #site-header-wrap -->

            <button class="e_service_btn navigation_btn large return_home" type="submit">
                Back</button>
            <button class="e_service_btn navigation_btn small  return_home" type="submit">
            </button>
    
            @section('main_content')


            @show

            {{-- @include('layouts.includes.footer') --}}

        </div>
        <div>
                <img src="assets/images/certificate.png" class="img-fluid" style="width:100px;position:fixed;bottom:20px;left:20px;z-index:9999">
            </div>
        
        <a id="scroll-top"></a>
        <!-- /#page -->
    </div>



    <!-- /#wrapper -->



    <!-- Javascript -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-validate.js') }}"></script>
    <script src="{{ asset('assets/js/countto.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/shortcodes.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

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


</body>

</html>