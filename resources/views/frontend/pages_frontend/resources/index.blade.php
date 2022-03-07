@extends('frontend.layouts_frontend.master')

@section('title')

@endsection

@section('content')
<!-- content  -->


        <!-- Page Title -->
        <section class="page-title about-page-3 p_relative centred">
            <div class="bg-layer p_absolute l_0 parallax_none parallax-bg" data-parallax='{"y": 100}' style="background-image: url(assets/frontend_assets/assets/images/background/page-title-2.jpg);"></div>
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
                    <p class="text-center">Great Business Solutions System</p>


                </div>
           
            <div class="auto-container">
                <div class="row clearfix">
                    <!-- fetch resources -->
                    @foreach($resources as $resource)
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-12 wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block b_shadow_6 b_radius_10">
                                <figure class="image-box"><a href="service-details.html">
                                    <!-- <img src="assets/frontend_assets/assets/images/service/service-23.jpg" alt=""> -->
                                    <!-- Image thumbnail -->

                                    @if (($resource->attachment))
                                                <a href="{!! asset($resource->attachment) !!}" target="_blank">
                                                    <img 
                                                        onerror="if (this.src != '{{ asset('assets/backend_assets/assets/images/users/avatar-2.jpg') }}') this.src = '{{ asset('assets/backend_assets/assets/images/users/avatar-2.jpg') }}';"
                                                        src="{{ asset($resource->attachment) }}" alt="preview"
                                                        style="height:250px !important; width:500px !important; ">
                                                </a>

                                        @else
                                            <p class="text-danger">No Photo</p>
                                        @endif

                                    <!-- End of image thumbnail -->
                                </a></figure>
                                <div class="lower-content p_relative pl_30 pr_30 pb_35">
                                    <div class="icon-box p_relative d_iblock w_80 h_80 lh_80 d_iblock fs_45 centred b_radius_50 z_1 tran_5 mb_25">
                                        <!-- Download icon  -->
                                        <a href="{!! asset($resource->attachment) !!}" target="_blank" style="color:white;"><div class="icon"><i class="icon-120"></i></div></a>
                                    <!-- End of download icon -->

                                        <div class="icon-img hidden-icon">
                                            <img src="assets/frontend_assets/assets/images/icons/hid-icon-93.png" alt="">
                                        </div>
                                    </div>
                                    <h3 class="d_block fs_24 lh_30 fw_bold font_family_frank mb_16"><a href="service-details.html" class="d_iblock color_black">{{ $resource->title }}</a></h3>
                                    <p class="fs_16 font_family_poppins mb_12">{{ $resource->audience }}</p>
                                    <div class="link"><a href="service-details.html" class="d_iblock fs_16 fw_medium font_family_poppins color_black">Read more<i class="icon-4"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End of fetch resources -->
                  
                   
                </div>
            </div>
        </section>
        <!-- service-15 end -->


@endsection