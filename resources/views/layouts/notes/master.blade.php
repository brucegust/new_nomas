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

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="top-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-9" style="background-color:#cccccc;">
                        <p class="bold text-left" style="margin-top:3px;">NOMAS<sup>&reg;</sup> Training Schedules </p>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <p class="bold text-right" style="margin-top:3px;">Online CEU Courses &amp; Credits</p>
						@section('content')
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-md-8">
									<div class="card">
										<div class="card-header">Dashboard</div>

										<div class="card-body">
											@if (session('status'))
												<div class="alert alert-success" role="alert">
													{{ session('status') }}
												</div>
											@endif

											You are logged in!
										</div>
									</div>
								</div>
							</div>
						</div>
						@endsection

                    </div>
                </div>
            </div>
        </div>
        <div class="container navigation">

            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="" width="300" height="53" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#intro">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.html">Marjorie Meyer Palmer</a></li>
                            <li><a href="index-form.html">NOMAS<sup>&reg;</sup> Success Stories</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">NOMAS<sup>&reg;</sup> Training / Testing <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.html">Online CEU</a></li>
                            <li><a href="index-form.html">Training &amp; Testing Info</a></li>
                            <li><a href="index-video.html">NOMAS<sup>&reg;</sup> Training Agenda</a></li>
                            <li><a href="index-video.html">License Renewal Info</a></li>
                            <li><a href="index-video.html">Feeding Disorders Login</a></li>
                            <li><a href="index-video.html">Renewal Liability Login</a></li>
                            <li><a href="#doctor">Infant Feeding Forum</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Practitioners <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.html">Practitioners Worldwide</a></li>
                            <li><a href="index-form.html">USA Practitioners</a></li>
                            <li><a href="index-video.html">International Practitioners</a></li>
                            <li><a href="index-video.html">Become a Practitioner</a></li>
                        </ul>
                    </li>
                    <li><a href="#pricing">Contact</a></li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!--ends nav and all header info -->
    @yield('content')
    <!-- Footer stuff -->
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
                    <!--
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="widget">
                            <h5>Follow us</h5>
                            <ul class="company-social">
                                <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                <li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    -->
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
                            <div class="text-right">
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

</body>

</html>