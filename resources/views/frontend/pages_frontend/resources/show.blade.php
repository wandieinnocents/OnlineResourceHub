@extends('frontend.layouts_frontend.master')

@section('title')

@endsection

@section('content')
<!-- content  -->


        <!-- Page Title -->
        <section class="page-title about-page-3 p_relative centred">
            <div class="bg-layer p_absolute l_0 parallax_none parallax-bg" data-parallax='{"y": 100}' style="background-image: url({{ asset('assets/frontend_assets/assets/images/background/page-title-2.jpg') }});"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1 class="d_block fs_60 lh_70 fw_bold mb_10">RESOURCES Us </h1>
                    <ul class="bread-crumb p_relative d_block mb_8 clearfix">
                        <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inter mr_20"><a href="index.html">Home</a></li>
                        <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inter mr_20">Pages</li>
                        <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inter">About Us Modern</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- service-15 -->
        
        <section class="service-15 p_relative pt_110 pb_150 centred">
        <div class="sec-title p_relative d_block mb_45 centred">
                    <h2 class="d_block fs_45 fw_bold lh_55 fw_bold font_family_spartan">Our Resources</h2>
                    <p class="text-center">{{ $resource->title }}</p>


                </div>
           
            <div class="auto-container">
              
            </div>
        </section>
        <!-- service-15 end -->


@endsection