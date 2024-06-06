<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true">


	<title></title>
	<meta name="description" content=" add description  ... ">

    <!-- /// Favicons ////////  -->
    <link rel="shortcut icon" href="favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144-precomposed.png">

	<!-- /// Google Fonts ////////  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400,300,700">

    <!-- /// FontAwesome Icons 4.2.0 ////////  -->
	<link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/font-awesome.min.css') }}">

    <!-- /// Custom Icon Font ////////  -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/iconfontcustom/icon-font-custom.css') }}">

	<!-- /// Template CSS ////////  -->
    <link rel="stylesheet" href="{{ asset('assets/css/velvet.css') }}">

	<!-- /// JS Plugins CSS ////////  -->
	<link rel="stylesheet" href="{{ asset('assets/vendors/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bxslider/jquery.bxslider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/magnificpopup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/animations/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendors/itplayer/css/YTPlayer.css') }}">


</head>
<body class="sticky-header">

	<div id="page-loader">
		<div class="loader-img">

			<img src="assets/images/loader.gif" alt="">

		</div><!-- end .loader-img -->
	</div><!-- end .pageloader -->


	<div id="wrap">

		<div id="header" class="no-background">

		<!-- /// HEADER  //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			<div class="row">
				<div class="span3">

					<!-- // Logo // -->


				</div><!-- end .span3 -->
				<div class="span9">

					<!-- // Mobile menu trigger // -->

                    <a href="#" id="mobile-menu-trigger">
                        <i class="fa fa-bars"></i>
                    </a>

                    <!-- // Menu // -->

				</div><!-- end .span9 -->
			</div><!-- end .row -->

		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #header -->
		<div id="content">

            @yield('content')

		</div><!-- end #content -->
		<div id="footer">

		<!-- /// FOOTER     ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			<div class="row">
				<div class="span4" id="footer-widget-area-1">

                    <div class="widget ewf_custom_box_widget">

                        <div class="custom-box-item">

                            <i class="ifc-geo_fence"></i>
                            Sukamenak

                        </div><!-- end .custom-box-item -->

                    </div><!-- end .ewf_custom_box_widget -->

                </div><!-- end .span4 -->
                <div class="span4" id="footer-widget-area-2">

                    <div class="widget ewf_custom_box_widget">

                        <div class="custom-box-item">

                            <i class="ifc-message"></i>
                            <a href="mailto:#">nis@gmail.com</a>

                        </div><!-- end .custom-box-item -->

                    </div><!-- end .ewf_custom_box_widget -->


                </div><!-- end .span4 -->
                <div class="span4" id="footer-widget-area-3">

                    <div class="widget ewf_custom_box_widget">

                        <div class="custom-box-item">

                            <i class="ifc-phone1"></i>
                            (+62) 857 0305 4814

                        </div><!-- end .custom-box-item -->

                    </div><!-- end .ewf_custom_box_widget -->

                </div><!-- end .span4 -->
            </div><!-- end .row -->

				</div><!-- end .span12 -->
			</div><!-- end .row -->

		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #footer -->
		<div id="footer-bottom">

		<!-- /// FOOTER-BOTTOM     ////////////////////////////////////////////////////////////////////////////////////////////// -->


		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #footer-bottom -->

	</div><!-- end #wrap -->

    <a id="back-to-top" href="#">
    	<i class="ifc-up4"></i>
    </a>

    <!-- /// jQuery ////////  -->
	<script src="assets/vendors/jquery-2.1.1.min.js"></script>

    <!-- /// ViewPort ////////  -->
	<script src="assets/vendors/viewport/jquery.viewport.js"></script>

    <!-- /// Easing ////////  -->
	<script src="assets/vendors/easing/jquery.easing.1.3.js"></script>


    <!-- /// Slick ////////  -->
    <script src="assets/vendors/slick/slick.min.js"></script>

    <!-- /// Animations ////////  -->
    <script src="assets/vendors/animations/animate.js"></script>

    <!-- /// Superfish Menu ////////  -->
	<script src="assets/vendors/superfish/hoverIntent.js"></script>
    <script src="assets/vendors/superfish/superfish.js"></script>


    <!-- /// bxSlider ////////  -->
	<script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>

   	<!-- /// Magnific Popup ////////  -->
	<script src="assets/vendors/magnificpopup/jquery.magnific-popup.min.js"></script>

    <!-- /// Isotope ////////  -->
	<script src="assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="assets/vendors/isotope/isotope.pkgd.min.js"></script>

    <!-- /// Parallax ////////  -->
	<script src="assets/vendors/parallax/jquery.parallax.min.js"></script>

	<!-- /// EasyPieChart ////////  -->
	<script src="assets/vendors/easypiechart/jquery.easypiechart.min.js"></script>

	<!-- /// YTPlayer ////////  -->
	<script src="assets/vendors/itplayer/jquery.mb.YTPlayer.js"></script>

    <!-- /// Easy Tabs ////////  -->
    <script src="assets/vendors/easytabs/jquery.easytabs.min.js"></script>

    <!-- /// Form validate ////////  -->
    <script src="assets/vendors/jqueryvalidate/jquery.validate.min.js"></script>

	<!-- /// Form submit ////////  -->
    <script src="assets/vendors/jqueryform/jquery.form.min.js"></script>

    <!-- /// gMap ////////  -->
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyDG-gTAgMTtgV3DOK0UQIkcruOy2yDDauc&sensor=false"></script>
	<script src="assets/vendors/gmap/jquery.gmap.min.js"></script>


    <!-- /// ScrollSpy ////////  -->
    <script src="assets/vendors/scrollspy/scrollspy.min.js"></script>

	<!-- /// Custom JS ////////  -->
	<script src="assets/js/velvet.js"></script>


</body>
</html>
