
@extends('layout.main') 

@push('title')
  Dashboard
@endpush

@push('js-link')
    <!-- Third Party js-->
  <script src="{{ url('/') }}/adminpanel/libs/apexcharts/apexcharts.min.js"></script>
  <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>


  <!-- Dashboar 1 init js-->
  <script src="{{ url('/') }}/adminpanel/js/pages/dashboard-1.init.js"></script>
@endpush
           
@section('main-section')
    

    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-lg-3 col-xl-3">
                <div class="card bg-pattern">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-blue rounded">
                                    <i class="fe-layers avatar-title font-22 text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark my-1"><span data-plugin="counterup">48</span></h3>
                                    <p class="text-muted mb-0 text-truncate">Alloted Shops</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->

            <div class="col-lg-3 col-xl-3">
                <div class="card bg-pattern">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-success rounded">
                                    <i class="fe-dollar-sign avatar-title font-22 text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark my-1">$<span data-plugin="counterup">20,250</span></h3>
                                    <p class="text-muted mb-0 text-truncate">Total Rent</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->
            <div class="col-lg-3 col-xl-3">
                <div class="card bg-pattern">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-danger rounded">
                                    <i class="fe-bar-chart-2 avatar-title font-22 text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark my-1">$<span data-plugin="counterup">7,750</span></h3>
                                    <p class="text-muted mb-0 text-truncate">Total Expenses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->
            <div class="col-lg-3 col-xl-3">
                <div class="card bg-pattern">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-warning rounded">
                                    <i class="fe-user avatar-title font-22 text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark my-1"><span data-plugin="counterup">4</span></h3>
                                    <p class="text-muted mb-0 text-truncate">Late Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row-->


        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-end">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            </div>
                        </div>

                        <h4 class="header-title mb-0">Rent Statistics</h4>

                        <div class="widget-chart text-center" dir="ltr">
                            
                            <div id="total-revenue" class="mt-0"  data-colors="#f1556c"></div>

                            <h5 class="text-muted mt-0">Total Rent This Month</h5>
                            <h2>$20,250</h2>
                            <br><br>

                            

                            <div class="row mt-3">
                                <div class="col-6">
                                    <p class="text-muted font-15 mb-1 text-truncate">Collected</p>
                                    <h4><i class="fe-more-vertical text-success me-1"></i>$18,250</h4>
                                </div>
                                <div class="col-6">
                                    <p class="text-muted font-15 mb-1 text-truncate">Remaining</p>
                                    <h4><i class="fe-more-vertical text-danger me-1"></i>$2,000</h4>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col-->

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body pb-2">
                        <div class="float-end d-none d-md-inline-block">
                            <div class="btn-group mb-2">
                                <button type="button" class="btn btn-xs btn-light">Today</button>
                                <button type="button" class="btn btn-xs btn-light">Weekly</button>
                                <button type="button" class="btn btn-xs btn-secondary">Monthly</button>
                            </div>
                        </div>

                        <h4 class="header-title mb-3">Expense Analytics</h4>

                        <div dir="ltr">
                            <div id="sales-analytics" class="mt-4" data-colors="#1abc9c,#4a81d4"></div>
                        </div>
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col-->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-end">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            </div>
                        </div>
                        <h4 class="header-title mb-3">Notifications</h4>

                        <div class="table-responsive">
                            <table class="table table-striped table-sm table-nowrap table-centered mb-0">
                                <thead>
                                    <tr>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h5 class="font-15 my-1 fw-normal">Payment not receieved for month <span class="text-warning">december 2022</span><br> from <span class="text-primary">Emma Smith</span></h5>
                                        </td>
                                        
                                        <td class="table-action">
                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="font-15 my-1 fw-normal">Payment not receieved for month <span class="text-warning">december 2022</span><br> from <span class="text-primary">Emma Smith</span></h5>
                                        </td>
                                        
                                        <td class="table-action">
                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="font-15 my-1 fw-normal">Payment not receieved for month <span class="text-warning">december 2022</span><br> from <span class="text-primary">Emma Smith</span></h5>
                                        </td>
                                        
                                        <td class="table-action">
                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="font-15 my-1 fw-normal">Payment not receieved for month <span class="text-warning">december 2022</span><br> from <span class="text-primary">Emma Smith</span></h5>
                                        </td>
                                        
                                        <td class="table-action">
                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="font-15 my-1 fw-normal">Payment not receieved for month <span class="text-warning">december 2022</span><br> from <span class="text-primary">Emma Smith</span></h5>
                                        </td>
                                        
                                        <td class="table-action">
                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
            <!-- end col-->

            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-end">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            </div>
                        </div>
                        <h4 class="header-title mb-4">Recent Payments</h4>

                        <div class="d-flex align-items-start mt-3">
                            <img class="me-3 rounded-circle" src="{{ url('/') }}/adminpanel/images/users/user-1.jpg" width="40" alt="Generic placeholder image">
                            <div class="w-100">
                                <span class="badge font-14 badge-soft-success float-end">$1050</span>
                                <h5 class="mt-0 mb-1">Emma Smith</h5>
                                <span class="font-13">Shop-C14</span>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mt-3">
                            <img class="me-3 rounded-circle" src="{{ url('/') }}/adminpanel/images/users/user-2.jpg" width="40" alt="Generic placeholder image">
                            <div class="w-100">
                                <span class="badge font-14 badge-soft-success float-end">$750</span>
                                <h5 class="mt-0 mb-1">Bryan J. Luellen</h5>
                                <span class="font-13">Shop-C15</span>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mt-3">
                            <img class="me-3 rounded-circle" src="{{ url('/') }}/adminpanel/images/users/user-3.jpg" width="40" alt="Generic placeholder image">
                            <div class="w-100">
                                <span class="badge font-14 badge-soft-success float-end">$550</span>
                                <h5 class="mt-0 mb-1">J. Doe</h5>
                                <span class="font-13">Shop-C16</span>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mt-3">
                            <img class="me-3 rounded-circle" src="{{ url('/') }}/adminpanel/images/users/user-4.jpg" width="40" alt="Generic placeholder image">
                            <div class="w-100">
                                <span class="badge font-14 badge-soft-success float-end">$750</span>
                                <h5 class="mt-0 mb-1">Alex Parker</h5>
                                <span class="font-13">Shop-C17</span>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mt-3">
                            <img class="me-3 rounded-circle" src="{{ url('/') }}/adminpanel/images/users/user-5.jpg" width="40" alt="Generic placeholder image">
                            <div class="w-100">
                                <span class="badge font-14 badge-soft-success float-end">$450</span>
                                <h5 class="mt-0 mb-1">Robert Cabariyan</h5>
                                <span class="font-13">Shop-C18</span>
                            </div>
                        </div>
                            
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card-->
            </div>
            <!-- end col -->  
            
            

        </div>
        <!-- end row-->
        
    </div> <!-- container -->

@endsection
    




      