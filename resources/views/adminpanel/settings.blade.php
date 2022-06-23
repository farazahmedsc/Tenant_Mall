<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Settings | Madina Mall Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Plugins css -->
        <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

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
                                        <ol class="breadcrumb m-0">
                                            
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Settings</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
									
									<h5 class="form-section mb-3 font-24">Info</h5>
                                        <div class="row">
   <div class="form-group col-md-6 mb-3">
      <label>Company Name <sup class="text-danger">*</sup></label>
      <input type="text" name="name" value="Madina Mall" class="form-control form-control-solid" placeholder="Company Name..." required>
   </div>
   <div class="form-group col-md-6 mb-3">
      <label>Street <sup class="text-danger">*</sup></label>
      <input type="text" name="street" value="Site Area, Commercial lane" class="form-control form-control-solid" placeholder="Street..." required>
   </div>
</div>
<div class="row">
   <div class="form-group col-md-6 mb-3">
      <label>Apt/Suite/Other <sup class="text-danger">*</sup></label>
      <input type="text" name="suite" value="A233/D" class="form-control form-control-solid" placeholder="Apt/Suite/Other..." required>
   </div>
   <div class="form-group col-md-6 mb-3">
      <label>Zip <sup class="text-danger">*</sup></label>
      <input type="text" name="zip" value="55488" class="form-control form-control-solid" placeholder="Zip..." required>
   </div>
</div>
<div class="row">
   <div class="form-group col-md-6 mb-3">
      <label>State <sup class="text-danger">*</sup></label>
      <select name="state_id" class="form-control form-select form-select-solid" onChange="fetchCitiesByState(this, 'city_id', 'https://fleetly.app')" required>
         <option value="">Select State</option>
         <option value="3919" >Alabama</option>
         <option value="3920" >Alaska</option>
         <option value="3921" >Arizona</option>
         <option value="3922" >Arkansas</option>
         <option value="3923" >Byram</option>
         <option value="3924" >California</option>
         <option value="3925" >Cokato</option>
         <option value="3926" >Colorado</option>
         <option value="3927" >Connecticut</option>
         <option value="3928" >Delaware</option>
         <option value="3929" >Dist. of Columbia</option>
         <option value="3930" >Florida</option>
         <option value="3931" >Georgia</option>
         <option value="3932">Hawaii</option>
         <option value="3933" >Idaho</option>
         <option value="3934" >Illinois</option>
         <option value="3935" >Indiana</option>
         <option value="3936" >Iowa</option>
         <option value="3937" >Kansas</option>
         <option value="3938" >Kentucky</option>
         <option value="3939" >Louisiana</option>
         <option value="3940" >Lowa</option>
         <option value="3941" >Maine</option>
         <option value="3942" >Maryland</option>
         <option value="3943" >Massachusetts</option>
         <option value="3944" >Medfield</option>
         <option value="3945" >Michigan</option>
         <option value="3946" selected>Minnesota</option>
         <option value="3947" >Mississippi</option>
         <option value="3948" >Missouri</option>
         <option value="3949" >Montana</option>
         <option value="3950" >Nebraska</option>
         <option value="3951" >Nevada</option>
         <option value="3952" >New Hampshire</option>
         <option value="3953" >New Jersey</option>
         <option value="3955" >New Mexico</option>
         <option value="3956" >New York</option>
         <option value="3957" >North Carolina</option>
         <option value="3958" >North Dakota</option>
         <option value="3959" >Ohio</option>
         <option value="3960" >Oklahoma</option>
         <option value="3961" >Ontario</option>
         <option value="3962" >Oregon</option>
         <option value="3963" >Pennsylvania</option>
         <option value="3964" >Ramey</option>
         <option value="3965" >Rhode Island</option>
         <option value="3966" >South Carolina</option>
         <option value="3967" >South Dakota</option>
         <option value="3968" >Sublimity</option>
         <option value="3969" >Tennessee</option>
         <option value="3970" >Texas</option>
         <option value="3971" >Trimble</option>
         <option value="3972" >Utah</option>
         <option value="3973" >Vermont</option>
         <option value="3974" >Virginia</option>
         <option value="3975" >Washington</option>
         <option value="3976" >West Virginia</option>
         <option value="3977" >Wisconsin</option>
         <option value="3978" >Wyoming</option>
      </select>
   </div>
   <div class="form-group col-md-6 mb-3">
      <label>City <sup class="text-danger">*</sup></label>
      <div id="loadingCity"></div>
      <select name="city_id" class="form-control form-select form-select-solid" required>
         <option value="">Select City</option>
         <option value="44063" >Ahuimanu</option>
         <option value="44064" >Aiea</option>
         <option value="44065" >Aliamanu</option>
         <option value="44066" >Ewa Beach</option>
         <option value="44067" >Haiku</option>
         <option value="44068" >Halawa</option>
         <option value="44069" >Hanalei</option>
         <option value="44070" >Hilo</option>
         <option value="44071" >Holualoa</option>
         <option value="44072"  selected >Minneapolis</option>
         <option value="44073" >Kahului</option>
         <option value="44074" >Kailua</option>
         <option value="44075" >Kalaheo</option>
         <option value="44076" >Kamuela</option>
         <option value="44077" >Kaneohe</option>
         <option value="44078" >Kaneohe Station</option>
         <option value="44079" >Kapaa</option>
         <option value="44080" >Kapolei</option>
         <option value="44081" >Kihei</option>
         <option value="44082" >Kula</option>
         <option value="44083" >Lahaina</option>
         <option value="44084" >Lanai City</option>
         <option value="44085" >Lihue</option>
         <option value="44086" >Makaha</option>
         <option value="44087" >Makakilo City</option>
         <option value="44088" >Makawao</option>
         <option value="44089" >Mi-Wuk Village</option>
         <option value="44090" >Mililani Town</option>
         <option value="44091" >Naalehu</option>
         <option value="44092" >Nanakuli</option>
         <option value="44093" >Pahoa</option>
         <option value="44094" >Pearl City</option>
         <option value="44095" >Schofield Barracks</option>
         <option value="44096" >Wahiawa</option>
         <option value="44097" >Waialua</option>
         <option value="44098" >Waianae</option>
         <option value="44099" >Wailuku</option>
         <option value="44100" >Waimalu</option>
         <option value="44101" >Waipahu</option>
         <option value="44102" >Waipio</option>
      </select>
   </div>
</div>
<div class="row">
   <div class="form-group col-md-6 mb-3">
      <label>Phone/Mobile <sup class="text-danger">*</sup></label>
      <input type="text" name="phone" value="(612) 123 4567" class="form-control form-control-solid" placeholder="Phone/Mobile..." required>
   </div>
   <div class="form-group col-md-6 mb-3">
      <label>Email <sup class="text-danger">*</sup></label>
      <input type="email" name="email" value="info@madina-mall.com" class="form-control form-control-solid" placeholder="Email..." required>
   </div>
</div>
<div class="row">
   <div class="form-group col-md-12 mb-3">
      <label>Description</label>
      <textarea name="note" class="form-control form-control-solid" placeholder="Description of your company..." rows="5">Madina Mall</textarea>
   </div>
</div>


                                        <div class="row mt-3">
                                            <div class="col-12 text-center">
                                                <button type="button" class="btn btn-success waves-effect waves-light m-1"><i class="fe-check-circle me-1"></i> Create</button>
                                                <button type="button" class="btn btn-light waves-effect waves-light m-1"><i class="fe-x me-1"></i> Cancel</button>
                                            </div>
                                        </div>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
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

        <!-- plugin js -->
        <script src="assets/libs/dropzone/min/dropzone.min.js"></script>
        <script src="assets/libs/select2/js/select2.min.js"></script>
        <script src="assets/libs/flatpickr/flatpickr.min.js"></script>

        <!-- Init js-->
        <script src="assets/js/pages/create-project.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>