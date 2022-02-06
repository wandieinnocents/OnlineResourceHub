<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<title>Restaurant</title>
	<!-- Stylesheets -->
	<link href="{{ asset('assets/frontend_assets/assets/css/bootstrap.css') }}" rel="stylesheet">

	<link href="{{ asset('assets/frontend_assets/assets/vendors/flat-icon/flaticon.css') }}" rel="stylesheet">


	<!-- Rev slider css -->
	<link href="{{ asset('assets/frontend_assets/assets/vendors/revolution/css/settings.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/frontend_assets/assets/vendors/revolution/css/layers.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/frontend_assets/assets/vendors/revolution/css/navigation.css') }}" rel="stylesheet">

	<link href="{{ asset('assets/frontend_assets/assets/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/frontend_assets/assets/css/responsive.css') }}" rel="stylesheet">

	<link rel="shortcut icon" href="{{ asset('assets/frontendassets/assets/images/favicon.png') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset('assets/frontendassets/assets/images/favicon.png') }}" type="image/x-icon">

	<link
		href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;600;700&amp;family=Open+Sans:wght@400;600;700;800&amp;family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap"
		rel="stylesheet">

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

	<div class="page-wrapper">

		<!-- Preloader -->
		<!-- <div class="prel	oader"></div> -->

		<!-- Navigation  -->
        @include('frontend.includes_frontend.header_frontend')

		

		<!-- Content section -->
		@yield('content')
		<!-- End content section -->

		<!--Main Footer-->
        @include('frontend.includes_frontend.footer')

	</div>
	<!--End pagewrapper-->

	<!--Scroll to top-->
	<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

	<!--Search Popup-->
	<div id="search-popup" class="search-popup">
		<div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
		<div class="popup-inner">
			<div class="overlay-layer"></div>
			<div class="search-form">
				<form method="post" action="">
					<div class="form-group">
						<fieldset>
							<input type="search" class="form-control" name="search-input" value=""
								placeholder="Search Here" required>
							<input type="submit" value="Search Now!" class="theme-btn">
						</fieldset>
					</div>
				</form>

				<br>
				<h3>Recent Search Keywords</h3>
				<ul class="recent-searches">
					<li><a href="#">Cake</a></li>
					<li><a href="#">Chocolate</a></li>
					<li><a href="#">Strawberry</a></li>
					<li><a href="#">Vanila</a></li>
					<li><a href="#">Mango Icecream</a></li>
				</ul>

			</div>

		</div>
	</div>






















	<!--Scroll to top-->
	<script src="{{ asset('assets/frontend_assets/assets/js/jquery.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/parallax.min.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/jquery-ui.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/bootstrap.min.js') }}"></script>

	<!-- Rev slider js -->
	<script src="{{ asset('assets/frontend_assets/assets/vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>

	<script src="{{ asset('assets/frontend_assets/assets/js/jquery.fancybox.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/owl.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/wow.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/mixitup.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/appear.js') }}"></script>
	<script src="{{ asset('assets/frontend_assets/assets/js/script.js') }}"></script>

</body>


</html>