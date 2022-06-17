<header class="main-header header-style-nine">
            <!-- header-top-one -->
            <div class="header-top-two p_relative d_block">
                <div class="auto-container">
                    <div class="top-inner clearfix p_relative">
                        <div class="top-left pull-left">
                            <ul class="social-links-two clearfix">
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_40 font_family_oxygen fw_bold">Follow Us:</li>
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_40"><a href="https://twitter.com/SenseUganda" class="p_relative d_iblock fs_16"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_40"><a href="https://www.facebook.com/Sense-International-Uganda-106911491178468" class="p_relative d_iblock fs_16"><i class="fab fa-twitter"></i></a></li>
                                <!-- <li class="p_relative d_iblock fs_16 float_left mr_25 lh_40"><a href="index.html" class="p_relative d_iblock fs_16"><i class="fab fa-linkedin-in"></i></a></li> -->
                            </ul>
                        </div>
                        <div class="top-right pull-right">
                            <ul class="info clearfix">
                                <!-- <li class="search-box-outer search-toggler p_relative d_iblock float_left mr_30 lh_40">
                                    <i class="icon-1"></i>
                                </li> -->
                                <li class="p_relative d_iblock float_left mr_30 lh_40 pl_25 fs_16 font_family_oxygen">
                                    <i class="icon-2"></i>
                                    <p class="font_family_oxygen"><span style="color:#fff">Call:</span> <a href="tel:+25675585585">+256 75585585</a></p>
                                </li>
                                <li class="p_relative d_iblock float_left lh_40 pl_25 fs_16 font_family_oxygen">
                                    <i class="icon-3"></i>
                                    <p class="font_family_oxygen">Email: <a href="mailto:sample@example.com">info@senseinternational.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="/"><img src="assets/frontend_assets/assets/sense/white.png" alt=""></a></figure>
                            <!-- <h2 class="text-white">SENSE</h2> -->
                        </div>
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix home-menu">
                                        <!-- Home page -->
                                        <li class="{{ Request::is('/') ? 'current' : '' }}">
											<a href="/">Home</a>
                                        </li>
                                        <!-- About Page -->
                                        <li class="{{ Request::is('about') ? 'current' : '' }}"><a href="/about">About</a></li>
                                        <!-- Resources page -->
										<li class="{{ Request::is('our_resources') ? 'current' : '' }}"><a href="/our_resources">Resources</a></li>
                                        <!-- Careers Page -->
										<li class="{{ Request::is('careers') ? 'current' : '' }}"><a href="/careers">Careers</a></li>
                                        <!-- Contact page -->
                                        <li class="{{ Request::is('contact/create') ? 'current' : '' }}"><a href="/contact/create">Support</a></li>
                                        <!-- global website -->
                                        <li class="{{ Request::is('contact/create') ? 'current' : '' }}"><a href="https://deafblindness.info" target="_blank">Global Website</a></li>
                                    
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- <div class="btn-box">
                            <a href="index-9.html" class="theme-btn theme-btn-eight">Get A Quote</a>
                        </div> -->
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                        <figure class="logo"><a href="/"><img src="assets/frontend_assets/assets/sense/white.png"  width="150" alt=""></a></figure>

                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <!-- <div class="btn-box">
                            <a href="index-9.html" class="theme-btn theme-btn-eight">Get A Quote</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </header>

		  <!-- Mobile Menu  -->
		  <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo">
                    <a href="/">
                        <!-- <img src="assets/frontend_assets/assets/images/mobile-logo.png" alt="" title=""> -->
                        <h2 class="text-white">SENSE</h2>
                    </a>
            </div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Kampala, Uganda</li>
                        <li><a href="tel:+8801682648101">+256 786 345295</a></li>
                        <li><a href="mailto:info@example.com">info@senseinternational.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        
        <!-- End Mobile Menu -->