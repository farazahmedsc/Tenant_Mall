<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{url('/adminpanel')}}/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
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
                    <a href="{{url('/logout')}}" class="dropdown-item notify-item">
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
                    <a href="dashboard.html">
                        <i data-feather="airplay"></i>
                        <span class="badge bg-success rounded-pill float-end">4</span>
                        <span> Dashboards </span></a></li>

                <li class="menu-title mt-2">Manage</li>


                <li>
                    <a href="{{url('/area_list')}}">
                        <i class="fe-map"></i>
                        <span> Area </span>
                    </a>
                </li>

                <li>
                    <a href="{{url('/tenant_list')}}">
                        <i data-feather="users"></i>
                        <span> Tenant </span>
                    </a>
                </li>

                <li>
                    <a href="{{url('/shops')}}">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="feather feather-file-text" width="256.000000pt" height="256.000000pt" viewBox="0 0 256.000000 256.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,256.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M320 2093 l-1 -148 -119 -159 c-128 -170 -132 -179 -108 -260 23 -78 135 -166 212 -166 15 0 16 -45 16 -520 l0 -520 960 0 960 0 0 520 c0 475 1 520 16 520 77 0 189 88 212 166 24 81 20 90 -108 260 l-119 159 -1 148 0 147 -960 0 -960 0 0 -147z m1760 -53 l0 -40 -800 0 -800 0 0 40 0 40 800 0 800 0 0 -40z m130 -320 c50 -66 93 -127 97 -136 9 -23 -35 -64 -69 -64 -31 0 -78 39 -78 65 0 12 -14 15 -77 15 -78 0 -78 0 -93 -33 -18 -38 -58 -55 -97 -41 -16 5 -34 23 -43 41 -15 32 -15 33 -90 33 -75 0 -75 -1 -90 -33 -29 -62 -111 -62 -140 0 -15 32 -15 33 -90 33 -75 0 -75 -1 -90 -33 -18 -38 -58 -55 -97 -41 -16 5 -34 23 -43 41 -15 32 -15 33 -90 33 -75 0 -75 -1 -90 -33 -18 -38 -58 -55 -97 -41 -16 5 -34 23 -43 41 -15 32 -15 33 -90 33 -75 0 -75 -1 -90 -33 -18 -38 -58 -55 -97 -41 -16 5 -34 23 -43 41 -15 33 -15 33 -92 33 -64 0 -78 -3 -78 -15 0 -26 -47 -65 -78 -65 -34 0 -78 41 -69 64 4 9 47 70 97 136 l91 120 839 0 839 0 91 -120z m-1570 -360 c32 0 65 9 104 28 l56 29 56 -29 c75 -37 133 -37 208 0 l56 29 56 -29 c39 -19 72 -28 104 -28 32 0 65 9 104 28 l56 29 56 -29 c39 -19 72 -28 104 -28 32 0 65 9 104 28 l56 29 56 -29 c39 -19 72 -28 104 -28 32 0 65 9 104 28 l56 29 0 -269 0 -268 -800 0 -800 0 0 268 0 269 56 -29 c39 -19 72 -28 104 -28z m1440 -760 l0 -120 -800 0 -800 0 0 120 0 120 800 0 800 0 0 -120z"/></g></svg>
                        <span> Shops </span>
                    </a>
                </li>

                <li>
                    <a href="#sidebarExpense" data-bs-toggle="collapse">
                        <i class="fe-dollar-sign"></i>
                        <span> Expense </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarExpense">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{url('/expense_category_list')}}">Category</a>
                            </li>
                            <li>
                                <a href="{{url('/expense_list')}}">Expense</a>
                            </li>                                        
                        </ul>
                    </div>
                </li>
                
                
                
                <li>
                    <a href="{{url('/rent_history')}}">
                        <i data-feather="layers"></i>
                        <span> Rent History </span>
                    </a>
                </li>
                
                <li>
                    <a href="{{url('/invoice_list')}}">
                        <i data-feather="file-text"></i>
                        <span> Invoices </span>
                    </a>
                </li>
                
                <li>
                    <a href="{{url('/user_list')}}">
                        <i data-feather="users"></i>
                        <span> Users </span>
                    </a>
                </li>

                <li>
                    <a href="{{url('/setting')}}">
                        <i data-feather="settings"></i>
                        <span> Settings </span>
                    </a>
                </li>
                
                <li>
                    <a href="dashboard.html">
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