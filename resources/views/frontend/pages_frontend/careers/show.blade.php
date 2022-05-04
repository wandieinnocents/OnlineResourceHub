@extends('frontend.layouts_frontend.master')

@section('title')
View Career
@endsection

@section('content')
<!-- content  -->


        <!-- Page Title -->
        <section class="page-title about-page-3 p_relative centred">
            <div class="bg-layer p_absolute l_0 parallax_none parallax-bg" data-parallax='{"y": 100}' style="background-image: url({{ asset('assets/frontend_assets/assets/images/background/page-title-2.jpg') }});"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1 class="d_block fs_60 lh_70 fw_bold mb_10">CAREER </h1>
                    <ul class="bread-crumb p_relative d_block mb_8 clearfix">
                        <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inter mr_20"><a href="/">Home</a></li>
                        <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inter mr_20">Career  Detail</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- service-15 -->
        
        <section class="shop-details p_relative pt_40 pb_50">
            <div class="auto-container">
               
                <div class="product-details-content p_relative d_block mb_100">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box p_relative d_block">
                                <br><br>
                                <figure class="image-box">
                                    <img src="assets/frontend_assets/assets/images/service/service-23.jpg" alt="">
                                    <!-- Image thumbnail -->

                                        
                                    <!-- End of image thumbnail -->
                            </figure>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="product-details p_relative d_block ml_20">
                                <h2 class="d_block fs_30 lh_40 fw_sbold font_family_inter mb_5">{{ $resource->title }}</h2>
                               
                                <span class="price p_relative d_block fs_20 lh_30 fw_medium color_black mb_25 font_family_inter">{{ $resource->topic }}</span>
                                <div class="text p_relative d_block mb_30">
                                    <p class="font_family_poppins mb_25">Career Description</p>
                                </div>
                                <div class="other-option">
                                    <ul class="list">
                                        <li class="p_relative d_block fs_16 font_family_poppins mb_5"><span class="fw_medium color_black">Audience:</span> {{ $resource->audience }}</li>
                                        <li class="p_relative d_block fs_16 font_family_poppins mb_5"><span class="fw_medium color_black">Link :</span> {{ $resource->link }}</li>
                                        <li class="p_relative d_block fs_16 font_family_poppins mb_5"><span class="fw_medium color_black">Written Permission:</span> {{ $resource->written_permission }}</li>
                                        <li class="p_relative d_block fs_16 font_family_poppins mb_5"><span class="fw_medium color_black">Created By:</span> {{ $resource->created_by }}</li>
                                    </ul>
                                </div>
                                <!-- download -->
                                <div class="addto-cart-box p_relative d_block mb_35"> 
                                    <ul class="clearfix">
                                        <li class="p_relative d_block float_left mr_10">
                                            <a href="#"><button type="button" class="theme-btn theme-btn-eight">DOWNLOAD</button></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end of download -->
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </section>
        <!-- service-15 end -->


@endsection