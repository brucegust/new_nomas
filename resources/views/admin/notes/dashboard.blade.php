<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NOMAS International Admin Page</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/iconfonts/ionicons/css/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/iconfonts/typicons/src/font/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.addons.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/shared/style.css') }}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/demo_1/style.css') }}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}" />
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background-color:#ccc;">
		<div class="text-center navbar-brand-wrapper d-flex align-items-top">
			<a class="navbar-brand brand-logo" href="index.html">
				<img src="{{ asset('admin/assets/images/logo.svg') }}" alt="logo" /> </a>
			<a class="navbar-brand brand-logo-mini" href="index.html">
				<img src="{{ asset('admin/assets/images/logo-mini.svg') }}" alt="logo" /> </a>
		</div>
        <div class="navbar-menu-wrapper d-flex">
			<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
				<span class="mdi mdi-menu"></span>
			</button>
		</div>
	</nav>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="menu-icon typcn typcn-document-text"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <i class="menu-icon typcn typcn-coffee"></i>
                    <span class="menu-title">Basic UI Elements</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/forms/basic_elements.html">
                    <i class="menu-icon typcn typcn-shopping-bag"></i>
                    <span class="menu-title">Form elements</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/charts/chartjs.html">
                    <i class="menu-icon typcn typcn-th-large-outline"></i>
                    <span class="menu-title">Charts</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/tables/basic-table.html">
                    <i class="menu-icon typcn typcn-bell"></i>
                    <span class="menu-title">Tables</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/icons/font-awesome.html">
                    <i class="menu-icon typcn typcn-user-outline"></i>
                    <span class="menu-title">Icons</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <i class="menu-icon typcn typcn-document-add"></i>
                    <span class="menu-title">User Pages</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/samples/login.html"> Login </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/samples/register.html"> Register </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                            <ul class="quick-links">
                                <li><a href="#">ICE Market data</a></li>
                                <li><a href="#">Own analysis</a></li>
                                <li><a href="#">Historic market data</a></li>
                            </ul>
                            <ul class="quick-links ml-auto">
                                <li><a href="#">Settings</a></li>
                                <li><a href="#">Analytics</a></li>
                                <li><a href="#">Watchlist</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
			</div>
            <div class="row">
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-0">Recent Events</h4>
                            <div class="d-flex py-2 border-bottom">
                                <div class="wrapper">
                                    <small class="text-muted">Mar 14, 2019</small>
                                    <p class="font-weight-semibold text-gray mb-0">Change in Directors</p>
                                </div>
                                <small class="text-muted ml-auto">Edit event</small>
                            </div>
                            <div class="d-flex py-2 border-bottom">
                                <div class="wrapper">
                                    <small class="text-muted">Mar 14, 2019</small>
                                    <p class="font-weight-semibold text-gray mb-0">Other Events</p>
                                </div>
                                <small class="text-muted ml-auto">Edit event</small>
                            </div>
                            <div class="d-flex py-2 border-bottom">
                                <div class="wrapper">
                                    <small class="text-muted">Mar 14, 2019</small>
                                    <p class="font-weight-semibold text-gray mb-0">Quarterly Report</p>
                                </div>
                                <small class="text-muted ml-auto">Edit event</small>
                            </div>
                            <div class="d-flex pt-2">
                                <div class="wrapper">
                                    <small class="text-muted">Mar 14, 2019</small>
                                    <p class="font-weight-semibold text-gray mb-0">Change in Directors</p>
                                </div>
                                <small class="text-muted ml-auto">Edit event</small>
                            </div>
                            <a class="d-block mt-5" href="#">Show all</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between pb-3">
                                <h4 class="card-title mb-0">Activities</h4>
                                <p class="mb-0 text-muted">20 finished, 5 remaining</p>
                            </div>
                            <ul class="timeline">
                                <li class="timeline-item">
                                    <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                                    <p class="event-time">Just now</p>
                                </li>
                                <li class="timeline-item">
                                    <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                                    <p class="event-time">Just now</p>
                                </li>
                                <li class="timeline-item">
                                    <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                                    <p class="event-time">Just now</p>
                                </li>
                                <li class="timeline-item">
                                    <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                                    <p class="event-time">Just now</p>
                                </li>
                                <li class="timeline-item">
                                    <p class="timeline-content"><a href="#">Ben Tossell</a> assign you a task</p>
                                    <p class="event-time">Just now</p>
                                </li>
                            </ul>
                            <a class="d-block mt-3" href="#">Show all</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-0">People Also Watch</h4>
                            <div class="table-responsive">
                                <table class="table table-stretched">
                                    <thead>
                                    <tr>
                                        <th>Symbol</th>
                                        <th>Last Price</th>
                                        <th>Change</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <p class="mb-1 text-dark font-weight-medium">NFLX</p><small class="font-weight-medium">Netflix, Inc.</small>
                                        </td>
                                        <td class="font-weight-medium">$250.00</td>
                                        <td class="text-success font-weight-medium">+12.64</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-1 text-dark font-weight-medium">TSLA</p><small class="font-weight-medium">Tesla, Inc.</small>
                                        </td>
                                        <td class="font-weight-medium">$458.00</td>
                                        <td class="text-danger font-weight-medium">-14.53</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-1 text-dark font-weight-medium">GOOG</p><small class="font-weight-medium">Alphabet, Inc.</small>
                                        </td>
                                        <td class="font-weight-medium">$250.00</td>
                                        <td class="text-danger font-weight-medium">+12.64</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-1 text-dark font-weight-medium">AMZN</p><small class="font-weight-medium">Amazon.com, Inc.</small>
                                        </td>
                                        <td class="font-weight-medium">$546.00</td>
                                        <td class="text-success font-weight-medium">+24.34</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a class="d-block mt-3" href="#">Show all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="container-fluid clearfix">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
              </span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('admin/assets/vendors/js/vendor.bundle.addons.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{ asset('admin/assets/js/shared/off-canvas.js') }}"></script>
<script src="{{ asset('admin/assets/js/shared/misc.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('admin/assets/js/demo_1/dashboard.js') }}"></script>
<!-- End custom js for this page-->
</body>
</html>