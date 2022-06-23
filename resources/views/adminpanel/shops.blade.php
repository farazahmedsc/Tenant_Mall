<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Madina Mall Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

	    <!-- App css -->
	    <link href="assets/css/config/default/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
	    <link href="assets/css/config/default/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

	    <link href="assets/css/config/default/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
	    <link href="assets/css/config/default/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

	    <!-- icons -->
	    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <!-- body start -->
    <body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-end mb-0">

            <li class="d-none d-lg-block">
                <form class="app-search">
                    <div class="app-search-box dropdown">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search..." id="top-search">
                            <button class="btn input-group-text" type="submit">
                                <i class="fe-search"></i>
                            </button>
                        </div>
                        <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h5 class="text-overflow mb-2">Found 22 results</h5>
                            </div>
            
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-home me-1"></i>
                                <span>Analytics Report</span>
                            </a>
            
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-aperture me-1"></i>
                                <span>How can I help you?</span>
                            </a>
                            
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings me-1"></i>
                                <span>User profile settings</span>
                            </a>

                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                            </div>

                            <div class="notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex align-items-start">
                                        <img class="d-flex me-2 rounded-circle" src="assets/images/users/user-2.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                            <span class="font-12 mb-0">UI Designer</span>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex align-items-start">
                                        <img class="d-flex me-2 rounded-circle" src="assets/images/users/user-5.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Jacob Deo</h5>
                                            <span class="font-12 mb-0">Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
            
                        </div>  
                    </div>
                </form>
            </li>
    
            <li class="dropdown d-inline-block d-lg-none">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-search noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                    <form class="p-3">
                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                    </form>
                </div>
            </li>
    
            
            
            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-bell noti-icon"></i>
                    <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg">
    
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="m-0">
                            <span class="float-end">
                                <a href="" class="text-dark">
                                    <small>Clear All</small>
                                </a>
                            </span>Notification
                        </h5>
                    </div>
    
                    <div class="noti-scroll" data-simplebar>
    
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                            <div class="notify-icon">
                                <img src="assets/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                            <p class="notify-details">Cristina Pride</p>
                            <p class="text-muted mb-0 user-msg">
                                <small>Hi, How are you? What about our next meeting</small>
                            </p>
                        </a>
    
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-primary">
                                <i class="mdi mdi-comment-account-outline"></i>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admin
                                <small class="text-muted">1 min ago</small>
                            </p>
                        </a>
    
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon">
                                <img src="assets/images/users/user-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                            <p class="notify-details">Karen Robinson</p>
                            <p class="text-muted mb-0 user-msg">
                                <small>Wow ! this admin looks good and awesome design</small>
                            </p>
                        </a>
    
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-warning">
                                <i class="mdi mdi-account-plus"></i>
                            </div>
                            <p class="notify-details">New user registered.
                                <small class="text-muted">5 hours ago</small>
                            </p>
                        </a>
    
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-info">
                                <i class="mdi mdi-comment-account-outline"></i>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admin
                                <small class="text-muted">4 days ago</small>
                            </p>
                        </a>
    
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-secondary">
                                <i class="mdi mdi-heart"></i>
                            </div>
                            <p class="notify-details">Carlos Crouch liked
                                <b>Admin</b>
                                <small class="text-muted">13 days ago</small>
                            </p>
                        </a>
                    </div>
    
                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                        View all
                        <i class="fe-arrow-right"></i>
                    </a>
    
                </div>
            </li>
    
            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                    <span class="pro-user-name ms-1">
                        Geneva <i class="mdi mdi-chevron-down"></i> 
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>
    
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>My Account</span>
                    </a>
    
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings"></i>
                        <span>Settings</span>
                    </a>
    
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock"></i>
                        <span>Lock Screen</span>
                    </a>
    
                    <div class="dropdown-divider"></div>
    
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>
    
                </div>
            </li>
    
        </ul>
    
        <!-- LOGO -->
        <div class="logo-box">
            <a href="index.html" class="logo logo-dark text-center">
                <span class="logo-sm">
                    <img src="assets/images/logo-light.png" alt="" height="55">
                    <!-- <span class="logo-lg-text-light">UBold</span> -->
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo-light.png" alt="" height="55">
                    <!-- <span class="logo-lg-text-light">U</span> -->
                </span>
            </a>
    
            <a href="index.html" class="logo logo-light text-center">
                <span class="logo-sm">
                    <img src="assets/images/logo-light.png" alt="" height="55">
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo-light.png" alt="" height="55">
                </span>
            </a>
        </div>
    
        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li>
                <!-- Mobile menu toggle (Horizontal Layout)-->
                <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>   
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
<!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                            class="rounded-circle avatar-md">
                        <div class="dropdown">
                            <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                                data-bs-toggle="dropdown">Geneva Kennedy</a>
                            <div class="dropdown-menu user-pro-dropdown">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user me-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings me-1"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-lock me-1"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-log-out me-1"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </div>
                        <p class="text-muted">Admin Head</p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">

                            <li class="menu-title">Navigation</li>
                
                            <li class="menuitem-active">
                                <a href="index.html">
                                    <i data-feather="airplay"></i>
                                    <span class="badge bg-success rounded-pill float-end">4</span>
                                    <span> Dashboards </span></a></li>

                            <li class="menu-title mt-2">Manage</li>

                            <li>
                                <a href="tenants-list.html">
                                    <i data-feather="users"></i>
                                    <span> Tenant </span>
                                </a>
                            </li>

                            <li>
                                <a href="shops.html">
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="feather feather-file-text" width="256.000000pt" height="256.000000pt" viewBox="0 0 256.000000 256.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,256.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M320 2093 l-1 -148 -119 -159 c-128 -170 -132 -179 -108 -260 23 -78 135 -166 212 -166 15 0 16 -45 16 -520 l0 -520 960 0 960 0 0 520 c0 475 1 520 16 520 77 0 189 88 212 166 24 81 20 90 -108 260 l-119 159 -1 148 0 147 -960 0 -960 0 0 -147z m1760 -53 l0 -40 -800 0 -800 0 0 40 0 40 800 0 800 0 0 -40z m130 -320 c50 -66 93 -127 97 -136 9 -23 -35 -64 -69 -64 -31 0 -78 39 -78 65 0 12 -14 15 -77 15 -78 0 -78 0 -93 -33 -18 -38 -58 -55 -97 -41 -16 5 -34 23 -43 41 -15 32 -15 33 -90 33 -75 0 -75 -1 -90 -33 -29 -62 -111 -62 -140 0 -15 32 -15 33 -90 33 -75 0 -75 -1 -90 -33 -18 -38 -58 -55 -97 -41 -16 5 -34 23 -43 41 -15 32 -15 33 -90 33 -75 0 -75 -1 -90 -33 -18 -38 -58 -55 -97 -41 -16 5 -34 23 -43 41 -15 32 -15 33 -90 33 -75 0 -75 -1 -90 -33 -18 -38 -58 -55 -97 -41 -16 5 -34 23 -43 41 -15 33 -15 33 -92 33 -64 0 -78 -3 -78 -15 0 -26 -47 -65 -78 -65 -34 0 -78 41 -69 64 4 9 47 70 97 136 l91 120 839 0 839 0 91 -120z m-1570 -360 c32 0 65 9 104 28 l56 29 56 -29 c75 -37 133 -37 208 0 l56 29 56 -29 c39 -19 72 -28 104 -28 32 0 65 9 104 28 l56 29 56 -29 c39 -19 72 -28 104 -28 32 0 65 9 104 28 l56 29 56 -29 c39 -19 72 -28 104 -28 32 0 65 9 104 28 l56 29 0 -269 0 -268 -800 0 -800 0 0 268 0 269 56 -29 c39 -19 72 -28 104 -28z m1440 -760 l0 -120 -800 0 -800 0 0 120 0 120 800 0 800 0 0 -120z"/></g></svg>
                                    <span> Shops </span>
                                </a>
                            </li>
							
							
							
							<li>
                                <a href="rent-history.html">
                                    <i data-feather="layers"></i>
                                    <span> Rent History </span>
                                </a>
                            </li>
							
							<li>
                                <a href="invoices-list.html">
                                    <i data-feather="file-text"></i>
                                    <span> Invoices </span>
                                </a>
                            </li>
							
							<li>
                                <a href="users-list.html">
                                    <i data-feather="users"></i>
                                    <span> Users </span>
                                </a>
                            </li>

							<li>
                                <a href="settings.html">
                                    <i data-feather="settings"></i>
                                    <span> Settings </span>
                                </a>
                            </li>
							
							<li>
                                <a href="index.html">
                                    <i data-feather="power"></i>
                                    <span> Logout </span>
                                </a>
                            </li>				
							
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <a href="tenants-add.html" class="btn btn-primary waves-effect waves-light mb-2 me-2"><i class="mdi mdi-basket me-1"></i> Allot Shop</a>
                                    </div>
                                    <h4 class="page-title">Shops</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
						<div class="col-md-12 col-xl-12">
									<h2 class="fw-bolder fs-3x text-center my-2 border-gray-600 border-bottom py-3">Mall Front Shops <span class="badge bg-warning fw-bolder text-dark font-12 p-1">3 shops</span></h2>
									</div>
                            <div class="col-md-4 col-xl-4">
										<!--begin::Card-->
										<a href="#" class="card border border-2 border-gray-300 border-hover">
											<!--begin::Card header-->
											<div class="card-header bg-white border-0 pt-9">
												<!--begin::Card Title-->
												<div class="card-title m-0">
												<div class="float-end">
                                            <span class="badge badge-soft-secondary me-auto font-12 p-1 mt-2">Shop-F01</span>
                                        </div> <!-- end dropdown -->
                                        <!-- Title-->
                                        <div class="rounded-circle avatar-md">
														<img src="assets/images/users/plurk.svg" alt="image" class="rounded-circle avatar-md" />
													</div>
													<!--begin::Avatar-->
													
													
													<!--end::Avatar-->
												</div>
												
											</div>
											<!--end:: Card header-->
											<!--begin:: Card body-->
											<div class="card-body text-center p-9">
												<!--begin::Name-->
												<div class="fs-3 fw-bolder text-dark">Perfume Store</div>
												<!--end::Name-->
												<!--begin::Description-->
												<p class="text-gray-600 fw-bold font-14 mt-1 mb-7">Alam Sheikh <br><span class="text-dark">612-123-4567</span> </p>
												<!--end::Description-->
												<!--begin::Info-->
												<div class="d-flex justify-content-around mb-1">
													<!--begin::Due-->
													<div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
														<div class="fs-6 text-gray-800 fw-bolder">May 05, 2021</div>
														<div class="fw-bold text-dark">Alloted Date</div>
													</div>
													<!--end::Due-->
													<!--begin::Budget-->
													<div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 mb-3">
														<div class="fs-6 text-gray-800 fw-bolder">$1750</div>
														<div class="fw-bold text-dark">Monthly Rent</div>
													</div>
													<!--end::Budget-->
												</div>
												<!--end::Info-->
												<!--begin::Progress-->
												<div class="progress mb-1" style="height: 7px;">
                                            <div class="progress-bar"
                                                 role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 100%;">
                                            </div><!-- /.progress-bar .progress-bar-danger -->
                                        </div><!-- /.progress .no-rounded -->
												<!--end::Progress-->
												<!--begin::Users-->
												
											</div>
											<!--end:: Card body-->
										</a>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									
									<div class="col-md-4 col-xl-4">
										<!--begin::Card-->
										<a href="#" class="card border border-2 border-gray-300 border-hover">
											<!--begin::Card header-->
											<div class="card-header bg-white border-0 pt-9">
												<!--begin::Card Title-->
												<div class="card-title m-0">
												<div class="float-end">
                                            <span class="badge badge-soft-secondary me-auto font-12 p-1 mt-2">Shop-F02</span>
                                        </div> <!-- end dropdown -->
                                        <!-- Title-->
                                        <div class="rounded-circle avatar-md">
														<img src="assets/images/users/plurk.svg" alt="image" class="rounded-circle avatar-md" />
													</div>
													<!--begin::Avatar-->
													
													
													<!--end::Avatar-->
												</div>
												
											</div>
											<!--end:: Card header-->
											<!--begin:: Card body-->
											<div class="card-body text-center p-9">
												<!--begin::Name-->
												<div class="fs-3 fw-bolder text-dark">Cloth Store</div>
												<!--end::Name-->
												<!--begin::Description-->
												<p class="text-gray-600 fw-bold font-14 mt-1 mb-7">Alam Sheikh <br><span class="text-dark">612-123-4567</span> </p>
												<!--end::Description-->
												<!--begin::Info-->
												<div class="d-flex justify-content-around mb-1">
													<!--begin::Due-->
													<div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
														<div class="fs-6 text-gray-800 fw-bolder">May 05, 2021</div>
														<div class="fw-bold text-dark">Alloted Date</div>
													</div>
													<!--end::Due-->
													<!--begin::Budget-->
													<div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 mb-3">
														<div class="fs-6 text-gray-800 fw-bolder">$1750</div>
														<div class="fw-bold text-dark">Monthly Rent</div>
													</div>
													<!--end::Budget-->
												</div>
												<!--end::Info-->
												<!--begin::Progress-->
												<div class="progress mb-1" style="height: 7px;">
                                            <div class="progress-bar"
                                                 role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 100%;">
                                            </div><!-- /.progress-bar .progress-bar-danger -->
                                        </div><!-- /.progress .no-rounded -->
												<!--end::Progress-->
												<!--begin::Users-->
												
											</div>
											<!--end:: Card body-->
										</a>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									
									
                        </div>
                        <!-- end row -->

                        <div class="row">
						<div class="col-md-12 col-xl-12">
									<h2 class="fw-bolder fs-3x text-center my-2 border-gray-600 border-bottom py-3">Mall Center Shops <span class="badge bg-warning fw-bolder text-dark font-12 p-1">5 shops</span></h2>
									</div>
									
									
                            <div class="col-md-4 col-xl-4">
										<!--begin::Card-->
										<a href="#" class="card border border-2 border-gray-300 border-hover">
											<!--begin::Card header-->
											<div class="card-header bg-white border-0 pt-9">
												<!--begin::Card Title-->
												<div class="card-title m-0">
												<div class="float-end">
                                            <span class="badge badge-soft-secondary me-auto font-12 p-1 mt-2">Shop-C15</span>
                                        </div> <!-- end dropdown -->
                                        <!-- Title-->
                                        <div class="rounded-circle avatar-md">
														<img src="assets/images/users/plurk.svg" alt="image" class="rounded-circle avatar-md" />
													</div>
													<!--begin::Avatar-->
													
													
													<!--end::Avatar-->
												</div>
												
											</div>
											<!--end:: Card header-->
											<!--begin:: Card body-->
											<div class="card-body text-center p-9">
												<!--begin::Name-->
												<div class="fs-3 fw-bolder text-dark">Fitness Store</div>
												<!--end::Name-->
												<!--begin::Description-->
												<p class="text-gray-600 fw-bold font-14 mt-1 mb-7">Alam Sheikh <br><span class="text-dark">612-123-4567</span> </p>
												<!--end::Description-->
												<!--begin::Info-->
												<div class="d-flex justify-content-around mb-1">
													<!--begin::Due-->
													<div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
														<div class="fs-6 text-gray-800 fw-bolder">May 05, 2021</div>
														<div class="fw-bold text-dark">Alloted Date</div>
													</div>
													<!--end::Due-->
													<!--begin::Budget-->
													<div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 mb-3">
														<div class="fs-6 text-gray-800 fw-bolder">$1750</div>
														<div class="fw-bold text-dark">Monthly Rent</div>
													</div>
													<!--end::Budget-->
												</div>
												<!--end::Info-->
												<!--begin::Progress-->
												<div class="progress mb-1" style="height: 7px;">
                                            <div class="progress-bar"
                                                 role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 100%;">
                                            </div><!-- /.progress-bar .progress-bar-danger -->
                                        </div><!-- /.progress .no-rounded -->
												<!--end::Progress-->
												<!--begin::Users-->
												
											</div>
											<!--end:: Card body-->
										</a>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									
									<div class="col-md-4 col-xl-4">
										<!--begin::Card-->
										<a href="#" class="card border border-2 border-gray-300 border-hover">
											<!--begin::Card header-->
											<div class="card-header bg-white border-0 pt-9">
												<!--begin::Card Title-->
												<div class="card-title m-0">
												<div class="float-end">
                                            <span class="badge badge-soft-secondary me-auto font-12 p-1 mt-2">Shop-C15</span>
                                        </div> <!-- end dropdown -->
                                        <!-- Title-->
                                        <div class="rounded-circle avatar-md">
														<img src="assets/images/users/plurk.svg" alt="image" class="rounded-circle avatar-md" />
													</div>
													<!--begin::Avatar-->
													
													
													<!--end::Avatar-->
												</div>
												
											</div>
											<!--end:: Card header-->
											<!--begin:: Card body-->
											<div class="card-body text-center p-9">
												<!--begin::Name-->
												<div class="fs-3 fw-bolder text-dark">Fitness Store</div>
												<!--end::Name-->
												<!--begin::Description-->
												<p class="text-gray-600 fw-bold font-14 mt-1 mb-7">Alam Sheikh <br><span class="text-dark">612-123-4567</span> </p>
												<!--end::Description-->
												<!--begin::Info-->
												<div class="d-flex justify-content-around mb-1">
													<!--begin::Due-->
													<div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
														<div class="fs-6 text-gray-800 fw-bolder">May 05, 2021</div>
														<div class="fw-bold text-dark">Alloted Date</div>
													</div>
													<!--end::Due-->
													<!--begin::Budget-->
													<div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 mb-3">
														<div class="fs-6 text-gray-800 fw-bolder">$1750</div>
														<div class="fw-bold text-dark">Monthly Rent</div>
													</div>
													<!--end::Budget-->
												</div>
												<!--end::Info-->
												<!--begin::Progress-->
												<div class="progress mb-1" style="height: 7px;">
                                            <div class="progress-bar"
                                                 role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 100%;">
                                            </div><!-- /.progress-bar .progress-bar-danger -->
                                        </div><!-- /.progress .no-rounded -->
												<!--end::Progress-->
												<!--begin::Users-->
												
											</div>
											<!--end:: Card body-->
										</a>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									
									<div class="col-md-4 col-xl-4">
										<!--begin::Card-->
										<a href="#" class="card border border-2 border-gray-300 border-hover">
											<!--begin::Card header-->
											<div class="card-header bg-white border-0 pt-9">
												<!--begin::Card Title-->
												<div class="card-title m-0">
												<div class="float-end">
                                            <span class="badge badge-soft-secondary me-auto font-12 p-1 mt-2">Shop-C15</span>
                                        </div> <!-- end dropdown -->
                                        <!-- Title-->
                                        <div class="rounded-circle avatar-md">
														<img src="assets/images/users/plurk.svg" alt="image" class="rounded-circle avatar-md" />
													</div>
													<!--begin::Avatar-->
													
													
													<!--end::Avatar-->
												</div>
												
											</div>
											<!--end:: Card header-->
											<!--begin:: Card body-->
											<div class="card-body text-center p-9">
												<!--begin::Name-->
												<div class="fs-3 fw-bolder text-dark">Fitness Store</div>
												<!--end::Name-->
												<!--begin::Description-->
												<p class="text-gray-600 fw-bold font-14 mt-1 mb-7">Alam Sheikh <br><span class="text-dark">612-123-4567</span> </p>
												<!--end::Description-->
												<!--begin::Info-->
												<div class="d-flex justify-content-around mb-1">
													<!--begin::Due-->
													<div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
														<div class="fs-6 text-gray-800 fw-bolder">May 05, 2021</div>
														<div class="fw-bold text-dark">Alloted Date</div>
													</div>
													<!--end::Due-->
													<!--begin::Budget-->
													<div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 mb-3">
														<div class="fs-6 text-gray-800 fw-bolder">$1750</div>
														<div class="fw-bold text-dark">Monthly Rent</div>
													</div>
													<!--end::Budget-->
												</div>
												<!--end::Info-->
												<!--begin::Progress-->
												<div class="progress mb-1" style="height: 7px;">
                                            <div class="progress-bar"
                                                 role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 100%;">
                                            </div><!-- /.progress-bar .progress-bar-danger -->
                                        </div><!-- /.progress .no-rounded -->
												<!--end::Progress-->
												<!--begin::Users-->
												
											</div>
											<!--end:: Card body-->
										</a>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									
									<div class="col-md-4 col-xl-4">
										<!--begin::Card-->
										<a href="#" class="card border border-2 border-gray-300 border-hover">
											<!--begin::Card header-->
											<div class="card-header bg-white border-0 pt-9">
												<!--begin::Card Title-->
												<div class="card-title m-0">
												<div class="float-end">
                                            <span class="badge badge-soft-secondary me-auto font-12 p-1 mt-2">Shop-C15</span>
                                        </div> <!-- end dropdown -->
                                        <!-- Title-->
                                        <div class="rounded-circle avatar-md">
														<img src="assets/images/users/plurk.svg" alt="image" class="rounded-circle avatar-md" />
													</div>
													<!--begin::Avatar-->
													
													
													<!--end::Avatar-->
												</div>
												
											</div>
											<!--end:: Card header-->
											<!--begin:: Card body-->
											<div class="card-body text-center p-9">
												<!--begin::Name-->
												<div class="fs-3 fw-bolder text-dark">Fitness Store</div>
												<!--end::Name-->
												<!--begin::Description-->
												<p class="text-gray-600 fw-bold font-14 mt-1 mb-7">Alam Sheikh <br><span class="text-dark">612-123-4567</span> </p>
												<!--end::Description-->
												<!--begin::Info-->
												<div class="d-flex justify-content-around mb-1">
													<!--begin::Due-->
													<div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
														<div class="fs-6 text-gray-800 fw-bolder">May 05, 2021</div>
														<div class="fw-bold text-dark">Alloted Date</div>
													</div>
													<!--end::Due-->
													<!--begin::Budget-->
													<div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 mb-3">
														<div class="fs-6 text-gray-800 fw-bolder">$1750</div>
														<div class="fw-bold text-dark">Monthly Rent</div>
													</div>
													<!--end::Budget-->
												</div>
												<!--end::Info-->
												<!--begin::Progress-->
												<div class="progress mb-1" style="height: 7px;">
                                            <div class="progress-bar"
                                                 role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 100%;">
                                            </div><!-- /.progress-bar .progress-bar-danger -->
                                        </div><!-- /.progress .no-rounded -->
												<!--end::Progress-->
												<!--begin::Users-->
												
											</div>
											<!--end:: Card body-->
										</a>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									
									<div class="col-md-4 col-xl-4">
										<!--begin::Card-->
										<a href="#" class="card border border-2 border-gray-300 border-hover">
											<!--begin::Card header-->
											<div class="card-header bg-white border-0 pt-9">
												<!--begin::Card Title-->
												<div class="card-title m-0">
												<div class="float-end">
                                            <span class="badge badge-soft-secondary me-auto font-12 p-1 mt-2">Shop-C15</span>
                                        </div> <!-- end dropdown -->
                                        <!-- Title-->
                                        <div class="rounded-circle avatar-md">
														<img src="assets/images/users/plurk.svg" alt="image" class="rounded-circle avatar-md" />
													</div>
													<!--begin::Avatar-->
													
													
													<!--end::Avatar-->
												</div>
												
											</div>
											<!--end:: Card header-->
											<!--begin:: Card body-->
											<div class="card-body text-center p-9">
												<!--begin::Name-->
												<div class="fs-3 fw-bolder text-dark">Fitness Store</div>
												<!--end::Name-->
												<!--begin::Description-->
												<p class="text-gray-600 fw-bold font-14 mt-1 mb-7">Alam Sheikh <br><span class="text-dark">612-123-4567</span> </p>
												<!--end::Description-->
												<!--begin::Info-->
												<div class="d-flex justify-content-around mb-1">
													<!--begin::Due-->
													<div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
														<div class="fs-6 text-gray-800 fw-bolder">May 05, 2021</div>
														<div class="fw-bold text-dark">Alloted Date</div>
													</div>
													<!--end::Due-->
													<!--begin::Budget-->
													<div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 mb-3">
														<div class="fs-6 text-gray-800 fw-bolder">$1750</div>
														<div class="fw-bold text-dark">Monthly Rent</div>
													</div>
													<!--end::Budget-->
												</div>
												<!--end::Info-->
												<!--begin::Progress-->
												<div class="progress mb-1" style="height: 7px;">
                                            <div class="progress-bar"
                                                 role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 100%;">
                                            </div><!-- /.progress-bar .progress-bar-danger -->
                                        </div><!-- /.progress .no-rounded -->
												<!--end::Progress-->
												<!--begin::Users-->
												
											</div>
											<!--end:: Card body-->
										</a>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									
									
									
									
                        </div>
                        <!-- end row -->

                        <div class="row d-none">
                            <div class="col-12">
                                <div class="text-center mb-3">
                                    <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-spin mdi-loading me-1"></i> Load more </a>
                                </div>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; MadaniMallMN Developed by <a href="https://iconictek.com/">Iconictek</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-sm-block">
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>