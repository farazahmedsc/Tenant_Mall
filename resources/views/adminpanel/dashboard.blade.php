
@extends('layout.main') 

@push('title')
  Dashboard
@endpush

@push('js-link')
    <!-- Third Party js-->
  <script src="{{ url('/') }}/adminpanel/libs/apexcharts/apexcharts.min.js"></script>
  <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>


  <!-- Dashboar 1 init js-->
  {{-- <script src="{{ url('/') }}/adminpanel/js/pages/dashboard-1.init.js"></script> --}}


  <script>
    
    var colors = ["#f1556c"];
    (dataColors = $("#total-revenue").data("colors")) && (colors = dataColors.split(","));
    var options = {
        series: [{{$rent_percent}}],
        chart: {
            height: 242,
            type: "radialBar"
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: "65%"
                }
            }
        },
        colors: colors,
        labels: ["Rent Collected"]
    };
    (chart = new ApexCharts(document.querySelector("#total-revenue"), options)).render();

    var revenues = "{{implode(',',$revenues)}}";
    revenues = "[" + revenues + "]";
    revenues = eval(revenues);
    // console.log("revenues", revenues)

    var expenses = "{{implode(',',$expenses)}}";
    expenses = "[" + expenses + "]";
    expenses = eval(expenses);
    
    var year = new Date().getFullYear();
    var dataColors;
    colors = ["#1abc9c", "#4a81d4"];
    (dataColors = $("#sales-analytics").data("colors")) && (colors = dataColors.split(","));
    var chart;
    options = {
        series: [{
            name: "Revenue",
            type: "column",
            data: revenues //[414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
        }, {
            name: "Expense",
            type: "line",
            data: expenses //[35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
        }],
        chart: {
            height: 378,
            type: "line",
            offsetY: 10
        },
        stroke: {
            width: [2, 3]
        },
        plotOptions: {
            bar: {
                columnWidth: "50%"
            }
        },
        colors: colors,
        dataLabels: {
            enabled: !0,
            enabledOnSeries: [1]
        },
        labels: [ "Jan "+ year, "Feb "+year, "Mar "+year, "Apr "+year, "May "+year, "Jun "+year, "Jul "+year, "Aug "+year, "Sep "+year, "Oct "+year, "Nov "+year, "Dec "+year],

        xaxis: {
            type: "datetime"
        },
        legend: {
            offsetY: 7
        },
        grid: {
            padding: {
                bottom: 20
            }
        },
        fill: {
            type: "gradient",
            gradient: {
                shade: "light",
                type: "horizontal",
                shadeIntensity: .25,
                gradientToColors: void 0,
                inverseColors: !0,
                opacityFrom: .75,
                opacityTo: .75,
                stops: [0, 0, 0]
            }
        },
        yaxis: [{
            title: {
                text: "Net Revenue"
            }
        }, {
            opposite: !0,
            title: {
                text: "Amount of Expenses"
            }
        }]
    };
    (chart = new ApexCharts(document.querySelector("#sales-analytics"), options)).render(), $("#dash-daterange").flatpickr({
        altInput: !0,
        mode: "range",
        altFormat: "F j, y",
        defaultDate: "today"
    });
  </script>
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
                            <div class="col-4">
                                <div class="avatar-md bg-blue rounded">
                                    <i class="fe-layers avatar-title font-22 text-white"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-end">
                                    <h3 class="text-dark my-1"><span data-plugin="counterup">{{$alloted_shop}}</span></h3>
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
                            <div class="col-4">
                                <div class="avatar-md bg-success rounded">
                                    <i class="fe-dollar-sign avatar-title font-22 text-white"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-end">
                                    <h3 class="text-dark my-1">$<span data-plugin="counterup">{{number_format($total_rent,2)}}</span></h3>
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
                            <div class="col-4">
                                <div class="avatar-md bg-danger rounded">
                                    <i class="fe-bar-chart-2 avatar-title font-22 text-white"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-end">
                                    <h3 class="text-dark my-1">$<span data-plugin="counterup">{{number_format($total_expense,2)}}</span></h3>
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
                            <div class="col-4">
                                <div class="avatar-md bg-warning rounded">
                                    <i class="fe-user avatar-title font-22 text-white"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-end">
                                    <h3 class="text-dark my-1"><span data-plugin="counterup">{{$total_user}}</span></h3>
                                    <p class="text-muted mb-0 text-truncate">Active Users</p>
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
                        {{-- <div class="dropdown float-end">
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
                        </div> --}}

                        <h4 class="header-title mb-0">Rent Statistics</h4>

                        <div class="widget-chart text-center" dir="ltr">
                            
                            <div id="total-revenue" class="mt-0"  data-colors="#f1556c"></div>

                            <h5 class="text-muted mt-0">Total Rent This Month</h5>
                            <h2>${{number_format($month_rent,2)}}</h2>
                            <br><br>

                            

                            <div class="row mt-3">
                                <div class="col-6">
                                    <p class="text-muted font-15 mb-1 text-truncate">Collected</p>
                                    <h4><i class="fe-more-vertical text-success me-1"></i>${{number_format($rent_collected,2)}}</h4>
                                </div>
                                <div class="col-6">
                                    <p class="text-muted font-15 mb-1 text-truncate">Remaining</p>
                                    <h4><i class="fe-more-vertical text-danger me-1"></i>${{number_format($rent_remaining,2)}}</h4>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col-->

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body pb-2">
                        {{-- <div class="float-end d-none d-md-inline-block">
                            <div class="btn-group mb-2">
                                <button type="button" class="btn btn-xs btn-light">Today</button>
                                <button type="button" class="btn btn-xs btn-light">Weekly</button>
                                <button type="button" class="btn btn-xs btn-secondary">Monthly</button>
                            </div>
                        </div> --}}

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
                        {{-- <div class="dropdown float-end">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            </div>
                        </div> --}}
                        <h4 class="header-title mb-3">Notifications</h4>

                        <div class="table-responsive">
                            <table class="table table-striped table-sm table-nowrap table-centered mb-0">
                                <thead>
                                    <tr>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($unpaid_payments as $unpaid)
                                        
                                   
                                    <tr>
                                        <td>
                                            <h5 class="font-15 my-1 fw-normal">Payment not receieved for month <span class="text-warning">{{date('F Y', strtotime($unpaid->generation_date))}}</span><br> from <span class="text-primary">{{$unpaid->first_name}} {{$unpaid->last_name}}</span></h5>
                                        </td>
                                        
                                        {{-- <td class="table-action">
                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        </td> --}}
                                    </tr>
                                    @endforeach
                                    
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
                        {{-- <div class="dropdown float-end">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            </div>
                        </div> --}}
                        <h4 class="header-title mb-4">Recent Payments</h4>

                        @foreach ($recent_payments as $recent)
                        
                            <div class="d-flex align-items-start mt-3">
                                <img class="me-3 rounded-circle" src="{{ url('/') }}/uploads/tenant/{{$recent->photo}}" width="40" alt="Generic placeholder image">
                                <div class="w-100">
                                    <span class="badge font-14 badge-soft-success float-end">${{$recent->pay_amount}}</span>
                                    <h5 class="mt-0 mb-1">{{$recent->first_name}} {{$recent->last_name}}</h5>
                                    <span class="font-13">{{$recent->a_name}}</span>
                                </div>
                            </div>
                        @endforeach
                      
                            
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
    




      