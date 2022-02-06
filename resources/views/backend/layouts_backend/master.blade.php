<!doctype html>
<html lang="en">

    
<head>

        <meta charset="utf-8" />
        <title>Backend </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Quality at its best" name="description" />
        <meta content="Wanran" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico"/>

        <!-- plugin css -->
        <link href="{{ asset('assets/backend_assets/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

        <!-- preloader css -->
        <!-- <link rel="stylesheet" href="{{ asset('assets/backend_assets/assets/css/preloader.min.css') }}" type="text/css" /> -->

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/backend_assets/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/backend_assets/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/backend_assets/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
       
        <!-- @notifyCss -->

    </head>
    
   
    @yield('extra_styles')
    <body>

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <!-- Header top bar -->
            @include('backend.includes_backend.header_top_bar')

            <!-- ========== Left Sidebar Start ========== -->
            @include('backend.includes_backend.admin_sidebar')
            <!-- Left Sidebar End -->

            
            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <!-- Page content -->
                @yield('content')
                
                <!-- End Page-content -->


                @include('backend.includes_backend.footer')
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        
        <!-- Right Sidebar -->
       @include('backend.includes_backend.admin_rightbar')
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/backend_assets/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/backend_assets/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/backend_assets/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/backend_assets/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/backend_assets/assets/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('assets/backend_assets/assets/libs/feather-icons/feather.min.js') }}"></script>
        <!-- pace js -->
        <script src="{{ asset('assets/backend_assets/assets/libs/pace-js/pace.min.js') }}"></script>

        <!-- apexcharts -->
        <script src="{{ asset('assets/backend_assets/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- Plugins js-->
        <script src="{{ asset('assets/backend_assets/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('assets/backend_assets/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>
        <!-- dashboard init -->
        <script src="{{ asset('assets/backend_assets/assets/js/pages/dashboard.init.js') }}"></script>

        <script src="{{ asset('assets/backend_assets/assets/js/app.js') }}"></script>
        


        <!-- pace js -->
        <script src="{{ asset('assets/backend_assets/assets/libs/pace-js/pace.min.js') }}"></script>

        <!-- ckeditor -->
        <!-- <script src="assets/backend_assets/assets/libs/ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script> -->

        <!-- init js -->
        <script src="{{ asset('assets/backend_assets/assets/js/pages/form-editor.init.js') }}"></script>

        <!-- @notifyJs
        <x:notify-messages /> -->


    </body>


</html>