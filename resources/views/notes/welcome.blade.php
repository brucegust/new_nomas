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
                    <div class="col-md-12">
						<div class="row">
							<div class="col-xs-6 training_schedule">
								<b>NOMAS<sup>&reg;</sup> Training Schedule</b>
							</div>
							<div class="col-xs-6 training_register">
							<!-- start login links-->
								@if(Auth::check())
									<a href="{{ route('dashboard') }}">Dashboard</a>
									<form method="Post" id="logout-form" action="{{ route('logout') }}">@csrf</form>
									<a href="#" style="font-weight:bold;" onclick="document.getElementById('logout-form').submit();">Logout</a>
								@else
										<a href="#" style="color:#fff; font-weight:bold;" href="{{ route('login') }}">Login</a>&nbsp;|&nbsp;
										<a href="#" style="color:#fff; font-weight:bold;" href="{{ route('register') }}">Register</a>
								@endif
							<!-- end login links -->
							</div>
						</div>
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
                    <img src="{{ asset('assets/img/logo.png') }}" alt="" class="logo">
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

    <!-- Section: intro -->
    <section id="intro" class="intro">
        <div class="intro-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                            <h2 class="h-ultra">NOMAS<sup>&reg;</sup> International</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                            <h4 class="h-light">...it's all about the feeding!</h4>
                        </div>
                        <div class="well well-trans">
                            <div class="wow fadeInRight" data-wow-delay="0.1s">

                                <ul class="lead-list">
                                    <li><span class="fa fa-check fa-2x icon-success" style="color:#ea7fea;"></span> <span class="list"><strong>Online Training Courses</strong><br />receive CEU credits for completed courses</span></li>
                                    <li><span class="fa fa-check fa-2x icon-success" style="color:#ea7fea;"></span> <span class="list"><strong>Become a Licensed Practitioner</strong><br />join the international community of NOMAS<sup>&reg;</sup> practitioners</span></li>
                                    <li><span class="fa fa-check fa-2x icon-success" style="color:#ea7fea;"></span> <span class="list"><strong>Incorporate NOMAS<sup>&reg;</sup> into your practice</strong><br />make NOMAS<sup>&reg;</sup> a part of the way you care for your patients</span></li>
                                </ul>
                                <p class="text-right wow bounceIn" data-wow-delay="0.4s">
                                    <a href="#" class="btn btn-skin btn-lg">Learn more <i class="fa fa-angle-right"></i></a>
                                </p>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                            <img src="{{asset ('assets/img/dummy/img-1.png') }}" class="img-responsive" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
    <!-- /Section: intro -->

    <!-- Section: boxes -->
    <section id="boxes" class="home-section paddingtop-80">

        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">

                            <i class="fa fa-question fa-3x circled bg-skin"></i>
                            <h4 class="h-bold">What is NOMAS<sup>&reg;</sup>?</h4>
                            <p>
                                Click here to learn what NOMAS<sup>&reg;</sup> is and the difference it has made around the world!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">

                            <i class="fa fa-university fa-3x circled bg-skin"></i>
                            <h4 class="h-bold">Online Training</h4>
                            <p>
                                Receive CEU training credits from AOTA, ASHA and the California Board of Registered Nursing!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-user-md fa-3x circled bg-skin"></i>
                            <h4 class="h-bold">Licensed Practitioner</h4>
                            <p>
                                Learn more about how to become a licensed NOMAS<sup>&reg;</sup> Practitioner
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">

                            <i class="fa fa-comments fa-3x circled bg-skin"></i>
                            <h4 class="h-bold">Feeding Forum</h4>
                            <p>
                                Join the online community of professionals dedicated to neonatal health and innovation!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /Section: boxes -->

    <!--
    <section id="callaction" class="home-section paddingtop-40">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="callaction bg-gray">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="cta-text">
                                        <h3>In an emergency? Need help now?</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit uisque interdum ante eget faucibus. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                                    <div class="cta-btn">
                                        <a href="#" class="btn btn-skin btn-lg">Book an appoinment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->

    <!-- Section: services -->
    <section id="service" class="home-section nopadding paddingtop-60">

        <div class="container">

            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{ asset('assets/img/dummy/img-1.jpg') }}" class="img-responsive" alt="" />
                    </div>
                </div>
                <div class="col-sm-6 col-md-6" style="margin-top:50px;">

                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-book fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">Training Catalog</h5>
                                <p>Online CEU instruction for medical professionals</p>
                            </div>
                        </div>
                    </div>

                    <div class="wow fadeInRight" data-wow-delay="0.2s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-graduation-cap fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">CEU Credits</h5>
                                <p>CEU education credits for completed courses</p>
                            </div>
                        </div>
                    </div>

                    <div class="wow fadeInRight" data-wow-delay="0.3s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-clipboard fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">Accreditation</h5>
                                <p>ASHA, AOTA, BRN...</p>
                            </div>
                        </div>
                    </div>

                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                        <div class="service-box">
                            <div class="service-icon">
                                <span class="fa fa-sign-in fa-3x"></span>
                            </div>
                            <div class="service-desc">
                                <h5 class="h-light">Campus Login</h5>
                                <p>Login to campus and renewal page</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- /Section: services -->

<!--

    <section id="doctor" class="home-section bg-gray paddingbot-60">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Doctors</h2>
                            <p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
                        </div>
                    </div>
                    <div class="divider-short"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div id="filters-container" class="cbp-l-filters-alignLeft">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All (
                            <div class="cbp-filter-counter"></div>)</div>
                        <div data-filter=".cardiologist" class="cbp-filter-item">Cardiologist (
                            <div class="cbp-filter-counter"></div>)</div>
                        <div data-filter=".psychiatrist" class="cbp-filter-item">Psychiatrist (
                            <div class="cbp-filter-counter"></div>)</div>
                        <div data-filter=".neurologist" class="cbp-filter-item">Neurologist (
                            <div class="cbp-filter-counter"></div>)</div>
                    </div>

                    <div id="grid-container" class="cbp-l-grid-team">
                        <ul>
                            <li class="cbp-item psychiatrist">
                                <a href="doctors/member1.html" class="cbp-caption cbp-singlePage">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="{{asset ('assets/img/team/1.jpg') }}" alt="" width="100%">
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="doctors/member1.html" class="cbp-singlePage cbp-l-grid-team-name">Alice Grue</a>
                                <div class="cbp-l-grid-team-position">Psychiatrist</div>
                            </li>
                            <li class="cbp-item cardiologist">
                                <a href="doctors/member2.html" class="cbp-caption cbp-singlePage">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="{{asset ('assets/img/team/2.jpg') }}" alt="" width="100%">
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="doctors/member2.html" class="cbp-singlePage cbp-l-grid-team-name">Joseph Murphy</a>
                                <div class="cbp-l-grid-team-position">Cardiologist</div>
                            </li>
                            <li class="cbp-item cardiologist">
                                <a href="doctors/member3.html" class="cbp-caption cbp-singlePage">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="{{asset ('assets/img/team/3.jpg') }}" alt="" width="100%">
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="doctors/member3.html" class="cbp-singlePage cbp-l-grid-team-name">Alison Davis</a>
                                <div class="cbp-l-grid-team-position">Cardiologist</div>
                            </li>
                            <li class="cbp-item neurologist">
                                <a href="doctors/member4.html" class="cbp-caption cbp-singlePage">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="{{asset ('assets/img/team/4.jpg') }}" alt="" width="100%">
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="doctors/member4.html" class="cbp-singlePage cbp-l-grid-team-name">Adam Taylor</a>
                                <div class="cbp-l-grid-team-position">Neurologist</div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>

-->


    <!-- Section: works -->
    <section id="facilities" class="home-section paddingbot-60">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow fadeInDown" data-wow-delay="0.1s">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Videos</h2>
                            <p>See samples of Marjorie Palmer's clinics and curriculum...</p>
                        </div>
                    </div>
                    <div class="divider-short"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="wow bounceInUp" data-wow-delay="0.2s">
                        <div id="owl-works" class="owl-carousel">
                            <div class="item"><a href="img/photo/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg"><img src="{{asset ('assets/img/photo/1.jpg') }}" class="img-responsive" alt="img"></a></div>
                            <div class="item"><a href="img/photo/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/2@2x.jpg"><img src="{{asset ('assets/img/photo/2.jpg') }}" class="img-responsive " alt="img"></a></div>
                            <div class="item"><a href="img/photo/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/3@2x.jpg"><img src="{{asset ('assets/img/photo/3.jpg') }}" class="img-responsive " alt="img"></a></div>
                            <div class="item"><a href="img/photo/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/4@2x.jpg"><img src="{{asset ('assets/img/photo/4.jpg') }}" class="img-responsive " alt="img"></a></div>
                            <div class="item"><a href="img/photo/5.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/5@2x.jpg"><img src="{{asset ('assets/img/photo/5.jpg') }}" class="img-responsive " alt="img"></a></div>
                            <div class="item"><a href="img/photo/6.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/6@2x.jpg"><img src="{{asset ('assets/img/photo/6.jpg') }}" class="img-responsive " alt="img"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: works -->


    <!-- Section: testimonial -->
    <section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">

        <div class="carousel-reviews broun-block">
            <div class="container">
                <div class="row">
                    <div id="carousel-reviews" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Emergency Contraception</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                                                                                                                                                                                                                                                                                             class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                                        </div>
                                        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <i class="fa fa-user circled bg-skin" style="font-size:123px; background-color:#109eff;"></i>
                                        <!--<img src="{{asset ('assets/img/testimonials/1.jpg') }}" alt="" class="person img-circle" /> -->
                                        <a title="" href="#">Anna</a>
                                        <span>Chicago, Illinois</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Orthopedic Surgery</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span>
                        <span
                                data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                                        </div>
                                        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="{{asset ('assets/img/testimonials/2.jpg') }}" alt="" class="person img-circle" />
                                        <a title="" href="#">Matthew G</a>
                                        <span>San Antonio, Texas</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Medical consultation</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                                                                                                                                                                                                                                                                                             class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span> </span>
                                        </div>
                                        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="{{asset ('assets/img/testimonials/3.jpg') }}" alt="" class="person img-circle" />
                                        <a title="" href="#">Scarlet Smith</a>
                                        <span>Dallas, Texas</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Birth control pills</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                                                                                                                                                                                                                                                                                             class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                                        </div>
                                        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="{{asset ('assets/img/testimonials/4.jpg') }}" alt="" class="person img-circle" />
                                        <a title="" href="#">Lucas Thompson</a>
                                        <span>Austin, Texas</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Radiology</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span>
                        <span
                                data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span> </span>
                                        </div>
                                        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="{{asset ('assets/img/testimonials/5.jpg') }}" alt="" class="person img-circle" />
                                        <a title="" href="#">Ella Mentree</a>
                                        <span>Fort Worth, Texas</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Cervical Lesions</a>
                                        <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3"
                                                                                                                                                                                                                                                                                             class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span> </span>
                                        </div>
                                        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="{{asset ('assets/img/testimonials/6.jpg') }}" alt="" class="person img-circle" />
                                        <a title="" href="#">Suzanne Adam</a>
                                        <span>Detroit, Michigan</span>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: testimonial -->


    <!-- Section: pricing -->
    <!--
    <section id="pricing" class="home-section bg-gray paddingbot-60">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Health packages</h2>
                            <p>Take charge of your health today with our specially designed health packages</p>
                        </div>
                    </div>
                    <div class="divider-short"></div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row">

                <div class="col-sm-4 pricing-box">
                    <div class="wow bounceInUp" data-wow-delay="0.1s">
                        <div class="pricing-content general">
                            <h2>Basic Fit 1 Package</h2>
                            <h3>$33<sup>.99</sup> <span>/ one time</span></h3>
                            <ul>
                                <li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
                                <li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
                                <li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
                                <li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li>
                            </ul>

                            <div class="price-bottom">
                                <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 pricing-box featured-price">
                    <div class="wow bounceInUp" data-wow-delay="0.3s">
                        <div class="pricing-content featured">
                            <h2>Golden Glow Package</h2>
                            <h3>$65<sup>.99</sup> <span>/ one time</span></h3>
                            <ul>
                                <li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
                                <li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
                                <li>General Screening – Basic <i class="fa fa-check icon-success"></i></li>
                                <li>Body Composition Analysis <i class="fa fa-check icon-success"></i></li>
                                <li>GR Assessment & Scoring <i class="fa fa-check icon-success"></i></li>
                            </ul>

                            <div class="price-bottom">
                                <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 pricing-box">
                    <div class="wow bounceInUp" data-wow-delay="0.2s">
                        <div class="pricing-content general last">
                            <h2>Basic Fit 2 Package</h2>
                            <h3>$47<sup>.99</sup> <span>/ one time</span></h3>
                            <ul>
                                <li>Anthropometry (BMI, WH Ratio) <i class="fa fa-check icon-success"></i></li>
                                <li>Post Examination Review <i class="fa fa-check icon-success"></i></li>
                                <li>General Screening – Regular <i class="fa fa-check icon-success"></i></li>
                                <li><del>Health Screening Report</del> <i class="fa fa-times icon-danger"></i></li>
                            </ul>

                            <div class="price-bottom">
                                <a href="#" class="btn btn-skin btn-lg">Purchase</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    -->
    <!-- /Section: pricing -->

    <section id="partner" class="home-section paddingbot-60">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                        <div class="section-heading text-center">
                            <h2 class="h-bold">Our Partner</h2>
                            <p>NOMAS<sup>&reg;</sup> International is proud to be associated with Dr. Brown's Medical</p>
                        </div>
                    </div>
                    <div class="divider-short"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="partner">
                        <a href="#"><img src="http://www.nomasinternational.org/_grafix/logo-dr-brown.jpg" alt="" /></a>
                    </div>
                </div>
                <!--
                <div class="col-sm-6 col-md-3">
                    <div class="partner">
                        <a href="#"><img src="{{asset ('assets/img/dummy/partner-2.jpg') }}" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="partner">
                        <a href="#"><img src="{{asset ('assets/img/dummy/partner-3.jpg') }}" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="partner">
                        <a href="#"><img src="{{asset ('assets/img/dummy/partner-4.jpg') }}" alt="" /></a>
                    </div>
                </div>
                -->
            </div>
        </div>
    </section>

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
