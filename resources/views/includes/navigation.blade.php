<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
						<div class="row">
							<div class="col-sm-6 training_schedule">
								<b>NOMAS<sup>&reg;</sup> Training Schedule</b>
							</div>
							<div class="col-sm-6  training_register">
							<!-- start login links-->
								@if(Auth::check())
									@if(Auth::user()->admin==1)
										<a href="{{ route('adminDashboard') }}" style="color:#fff; font-weight:bold;">Admin Page</a> |
										<a href="{{ route('userDashboard') }}" style="color:#fff; font-weight:bold;">Dashboard</a> |
										<form method="Post" id="logout-form" action="{{ route('logout') }}" style="display:inline;">@csrf</form>
										<a href="#" style="font-weight:bold; color:#fff;" onclick="document.getElementById('logout-form').submit();">Logout</a>
									@else
										<a href="{{ route('userDashboard') }}" style="color:#fff; font-weight:bold;">Dashboard</a> |
										<form method="Post" id="logout-form" action="{{ route('logout') }}" style="display:inline;">@csrf</form>
										<a href="#" style="font-weight:bold; color:#fff;" onclick="document.getElementById('logout-form').submit();">Logout</a>								
								@endif
							@endif
							@if(Auth::guest())
									<a href="/login" style="color:#fff; font-weight:bold;" >Login</a>&nbsp;|&nbsp;
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
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="" class="logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ route('index') }}">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                        <ul class="dropdown-menu">
						 <li><a href="/page/44">About NOMAS<sup>&reg;</sup> International<sup></a></li>
                            <li><a href="/page/43">Marjorie Meyer Palmer</a></li>
                            <li><a href="/page/45">NOMAS<sup>&reg;</sup> Success Stories</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">NOMAS<sup>&reg;</sup> Training / Testing <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.html">Online CEU</a></li>
                            <li><a href="/page/46">Training &amp; Testing Info</a></li>
                            <li><a href="/page/47">NOMAS<sup>&reg;</sup> Training Agenda</a></li>
                            <li><a href="/page/48">License Renewal Info</a></li>
                            <li><a href="index-video.html">Feeding Disorders Login</a></li>
                            <li><a href="index-video.html">Renewal Liability Login</a></li>
                            <li><a href="http://www.nomasinternational.org/smf/" target="_blank">Infant Feeding Forum</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">NOMAS<sup>&reg;</sup>Professionals <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/professionals">Professionals Worldwide</a></li>
                            <li><a href="/professionalsUSA">USA Professionals</a></li>
                            <li><a href="/professionalsWorld">International Professionals</a></li>
                            <li><a href="/page/46">Become a NOMAS<sup>&reg;</sup> Professional</a></li>
                        </ul>
                    </li>
                    <li><a href="#pricing">Contact</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>