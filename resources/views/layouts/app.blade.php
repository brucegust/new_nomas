<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	 <meta name="csrf-token" content="{{ csrf_token() }}">

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
	
	 <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


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
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
						<div class="row">
							<div class="col-xs-6 training_schedule">
								<b>NOMAS<sup>&reg;</sup> Training Schedule</b>
							</div>
							<div class="col-xs-6 training_register">
							<!-- start dashboard links-->
								<ul class="navbar-nav ml-auto">
								<!-- Authentication Links -->
								@guest
									<li class="nav-item">
										<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
									</li>
									@if (Route::has('register'))
										<li class="nav-item">
											<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
										</li>
									@endif
								@else
									<li class="nav-item dropdown">
										<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
											{{ Auth::user()->name }} <span class="caret"></span>
										</a>

										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="{{ route('logout') }}"
											   onclick="event.preventDefault();
															 document.getElementById('logout-form').submit();">
												{{ __('Logout') }}
											</a>

											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												@csrf
											</form>
										</div>
									</li>
								@endguest
							</ul>
							<!-- end dashboard links -->
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
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
