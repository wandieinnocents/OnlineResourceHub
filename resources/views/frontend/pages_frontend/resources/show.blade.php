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
                        <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inter mr_20"><a href="/">Home</a></li>
                        <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inter mr_20">Resource</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- service-15 -->
        
        <section class="shop-details p_relative pt_140 pb_80">
            <div class="auto-container">
                <div class="product-details-content p_relative d_block mb_100">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box p_relative d_block">
                                <figure class="image"><img src="{{ asset('assets/frontend_assets/assets/images/sense/carpenter.JPG') }}" alt=""></figure>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="product-details p_relative d_block ml_20">
                                <h2 class="d_block fs_30 lh_40 fw_sbold font_family_inter mb_5">{{ $resource->title }}</h2>
                               
                                <span class="price p_relative d_block fs_20 lh_30 fw_medium color_black mb_25 font_family_inter">{{ $resource->topic }}</span>
                                <div class="text p_relative d_block mb_30">
                                    <p class="font_family_poppins mb_25">{{ $resource->description }}</p>
                                </div>
                                <div class="other-option">
                                    <ul class="list">
                                        <li class="p_relative d_block fs_16 font_family_poppins mb_5"><span class="fw_medium color_black">Product ID:</span> AZ-2305</li>
                                        <li class="p_relative d_block fs_16 font_family_poppins mb_5"><span class="fw_medium color_black">Category</span> Accessories</li>
                                        <li class="p_relative d_block fs_16 font_family_poppins"><span class="fw_medium color_black">Tags:</span> <a href="shop-details.html">Laptop</a>, <a href="shop-details.html">Device</a>, <a href="shop-details.html">Desktop</a></li>
                                    </ul>
                                </div>
                                <!-- download -->
                                <div class="addto-cart-box p_relative d_block mb_35"> 
                                    <ul class="clearfix">
                                        <li class="p_relative d_block float_left mr_10"><button type="button" class="theme-btn theme-btn-eight">DOWNLOAD</button></li>
                                    </ul>
                                </div>
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </section>
        <!-- service-15 end -->


@endsection