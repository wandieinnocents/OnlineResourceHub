<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Online Portal</title>

<!-- Fav Icon -->
<link rel="icon" href="{{ asset('assets/frontend_assets/assets/images/favicon-9.ico') }}" type="image/x-icon">

<!-- Stylesheets -->
<link href="{{ asset('assets/frontend_assets/assets/css/font-awesome-all.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend_assets/assets/css/flaticon.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend_assets/assets/css/owl.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend_assets/assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend_assets/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend_assets/assets/css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend_assets/assets/css/color.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend_assets/assets/css/global.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend_assets/assets/css/nice-select.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend_assets/assets/css/jquery-ui.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend_assets/assets/css/elpath.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend_assets/assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend_assets/assets/css/responsive.css') }}" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- mouse-pointer -->
        <div class="mouse-pointer display_none" id="mouse-pointer">
            <div class="icon"><i class="far fa-angle-left"></i><i class="far fa-angle-right"></i></div>
        </div>
        <!-- mouse-pointer end -->


        <!-- preloader -->

        <!-- <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader home-9">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="t" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="i" class="letters-loading">
                                i
                            </span>
                            <span data-text-preloader="x" class="letters-loading">
                                x
                            </span>
                        </div>
                    </div>  
                </div>
            </div>
        </div> -->

        <!-- preloader end -->


        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href="index.html"><img src="assets/frontend_assets/assets/images/logo-8.png" alt=""></a></figure>
                    <div class="close-search pull-right"><span class="icon-179"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="#">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value="" placeholder="Type your keyword and hit" required >
                                    <button type="submit"><i class="icon-1"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- main header -->

       @include('frontend.includes_frontend.header_frontend')

        <!-- main-header end -->

      
	@yield('content')


        <!-- footer-one -->

       @include('frontend.includes_frontend.footer')
        <!-- footer-one end -->


        <!--Scroll to top-->
        <div class="scroll-to-top">
            <div>
                <div class="scroll-top-inner">
                    <div class="scroll-bar">
                        <div class="bar-inner"></div>
                    </div>
                    <div class="scroll-bar-text g_color_2">Go To Top</div>
                </div>
            </div>
        </div>
        <!-- Scroll to top end -->
    </div>


    <!-- jequery plugins -->
    <script src="{{ asset('assets/frontend_assets/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/frontend_assets/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend_assets/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend_assets/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/frontend_assets/assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/frontend_assets/assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/frontend_assets/assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/frontend_assets/assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/frontend_assets/assets/js/scrollbar.js') }}"></script>
    <script src="{{ asset('assets/frontend_assets/assets/js/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/frontend_assets/assets/js/circle-progress.js') }}"></script>
    <script src="{{ asset('assets/frontend_assets/assets/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('assets/frontend_assets/assets/js/nav-tool.js') }}"></script>
    <script src="{{ asset('assets/frontend_assets/assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/frontend_assets/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/frontend_assets/assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/frontend_assets/assets/js/jquery.paroller.min.js') }}"></script>

    <!-- main-js -->
    <script src="{{ asset('assets/frontend_assets/assets/js/script.js') }}"></script>

</body><!-- End of .page_wrapper -->

</html>
