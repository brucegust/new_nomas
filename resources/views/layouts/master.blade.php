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
    <link href="{{asset ('assets/css/style.css') }}" rel="stylesheet">
	
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

    <!-- boxed bg -->
    <link id="bodybg" href="{{asset ('assets/bodybg/bg1.css') }}" rel="stylesheet" type="text/css" />
    <!-- template skin -->
    <link id="t-colors" href="{{asset ('assets/color/pink.css') }}" rel="stylesheet">
	
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
   
   <div class="modal fade" id="loginModal" tabindex="1" role="dialog" aria-labelledby="loginFormLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			...
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>

	
	@yield('content')
	
	<!-- footer -->
	
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
                            <h5>Marjorie Meyer Palmer</h5>
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

<!-- end of footer -->