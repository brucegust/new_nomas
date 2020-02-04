<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NOMAS International</title>
    <!-- css -->
    <link href="{{asset ('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{asset ('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/cubeportfolio/css/cubeportfolio.min.css') }}">
    <link href="{{asset ('assets/css/nivo-lightbox.css') }}" rel="stylesheet" />
    <link href="{{asset ('assets/css/nivo-lightbox-theme/default/default.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset ('assets/css/owl.carousel.css') }}" rel="stylesheet" media="screen" />
    <link href="{{asset ('assets/css/owl.theme.css') }}" rel="stylesheet" media="screen" />
    <link href="{{asset ('assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{asset ('assets/css/satellite.style.css') }}" rel="stylesheet">
	
	<!-- Core JavaScript Files -->
	<script src="{{asset ('assets/js/jquery.min.js') }}"></script>
	<script src="{{asset ('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{asset ('assets/js/jquery.easing.min.js') }}"></script>
	<script src="{{asset ('assets/js/wow.min.js') }}"></script>
	<script src="{{asset ('assets/js/jquery.scrollTo.js') }}"></script>
	<script src="{{asset ('assets/js/jquery.appear.js') }}"></script>
	<script src="{{asset ('assets/js/stellar.js') }}"></script>
	<script src="{{asset ('assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
	<script src="{{asset ('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{asset ('assets/js/nivo-lightbox.min.js') }}"></script>
	<script src="{{asset ('assets/js/custom.js') }}"></script>
	 <script src="{{ asset ('assets/js/tinymce/tinymce.min.js') }}"></script>
	
	<script>
	$(document).ready(function() {
		tinymce.init({
		theme_advanced_font_sizes: "10px,12px,13px,14px,16px,18px,20px",
			font_size_style_values: "12px,13px,14px,16px,18px,20px",
			force_br_newlines : false,
			force_p_newlines : false,
			forced_root_block : '',
		mode:"textareas",
					//editor_selector: "mceEditor",
					paste_data_images: true,
			theme: "modern",
			width : "665",
			height:"350",
			relative_urls : false,
			remove_script_host : true,
			plugins: [
				"advlist autolink lists link image charmap print preview hr anchor pagebreak",
				"searchreplace wordcount visualblocks visualchars code fullscreen",
				"insertdatetime media nonbreaking save table contextmenu directionality",
				"emoticons template paste textcolor moxiemanager"
			],
			toolbar1: "insertfile undo redo | styleselect | bold italic | | fontselect |  fontsizeselect | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
			toolbar2: "print preview media | forecolor backcolor emoticons",
			image_advtab: true,
			templates: [
				{title: 'Test template 1', content: '<b>Test 1</b>'},
				{title: 'Test template 2', content: '<em>Test 2</em>'}
			],
			autosave_ask_before_unload: false,
			entity_encoding : "raw"
		});

		// Prevent bootstrap dialog from blocking focusin
		$(document).on('focusin', function(e) {
			if ($(e.target).closest(".tox-tinymce-aux, .moxman-window, .tam-assetmanager-root").length) {
				e.stopImmediatePropagation();
			}
		});
	});
	</script>

    <!-- boxed bg -->
    <link id="bodybg" href="http://nomas.site/assets/bodybg/bg1.css" rel="stylesheet" type="text/css" />
    <!-- template skin -->
    <link id="t-colors" href="http://nomas.site/assets/color/pink.css" rel="stylesheet">
	
    <!-- =======================================================
      Theme Name: Medicio
      Theme URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<div id="wrapper">
@include('includes/navigation')
@yield('content')
    <footer>

        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>About NOMAS<sup>&reg;</sup> International</h5>
                            <p>
                                Click on the links below to learn more about NOMAS<sup>&reg;</sup>
                            </p>
                        </div>
                    </div>
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>Information</h5>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li
                                <li><a href="#">Online Training</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>Marjorie Palmer</h5>
                            <p>
                                Click on the links below to learn more about Marjorie or to schedule her for a conference.
                            </p>
                            <ul>
                                <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-microphone fa-stack-1x fa-inverse"></i>
								</span> Conference Booking
                                </li>
                                <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> marjorie@nomasinternational.org
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>Contact Us</h5>
                            <p>Click here to contact NOMAS<sup>&reg;</sup> International</p>

                        </div>
                    </div>
			   </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="text-left">
                                <p>&copy;Copyright - NOMAS International All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                            <div class="brucegust">
                                <div class="credits">
                                    <!--
                                      All the links in the footer should remain intact.
                                      You can delete the links only if you purchased the pro version.
                                      Licensing information: https://bootstrapmade.com/license/
                                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medicio
                                    -->
                                    Designed by <a href="http://brucegust.com/">brucegust.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

</body>

</html>
