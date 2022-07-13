@extends('layout.main')

@push('title')
Invoice List
@endpush

@push('js-link')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    $('.delete-confirm').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This record and it`s details will be permanantly deleted!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });

    $("input[name='search']").keyup(function(e){
        if(e.keyCode == 13)
        {
            // $(this).trigger("enterKey");
            $("#searchForm").submit();
        }
    });

    function payRent(r_id, total_amount){
        $("input[name=r_id]").val(r_id);
        $("input[name=total_amount]").val(total_amount);
        swal({
            title: 'Are you sure you want to Pay Rent?',
            // text: 'This record and it`s details will be permanantly deleted!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                $("#pay_rent_submit").click();//window.location.href = url;
            }
        });
        
    }
</script>
@endpush

@section('main-section')
    

        <!-- Start Content-->
        <div class="container-fluid">
            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            
                        </div>
                        <h4 class="page-title">Invoice List</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-between mb-2">
                                <div class="col-auto">
                                    <form action="" id="searchForm" class="search-bar position-relative mb-sm-0 mb-2">
                                        <input type="search" name="search" class="form-control" placeholder="Search..." value="{{$search}}">
                                        <span class="mdi mdi-magnify"></span>
                                    </form>                      
                                </div>
                                <div class="col-md-6">
                                    {{-- <div class="text-md-end">
                                        <button type="button" class="btn btn-primary waves-effect waves-light mb-2 me-2" data-bs-toggle="modal" data-bs-target="#centermodal">Generate Invoice</button>
                                    </div> --}}
                                </div><!-- end col-->
                            </div>
    
                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap table-borderless table-hover mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            
                                            <th class="min-w-50px">#</th>
                                        <th class="min-w-175px">Client Name / Phone</th>													
                                        <th class="min-w-100px">Shop</th>
                                        <th class="min-w-75px">Amount</th>
                                        <th class="min-w-100px">Issue Date</th>
                            
                                        <th class="min-w-100px">Status</th>
                                        <th style="width: 82px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rents as $rent)
                                            <tr>
                                               
                                                <td><a href="#" class="text-gray-800 text-hover-primary mb-1">INV-{{$rent->invoice_no}}</a></td>
                                            <td>
                                            <div class="d-flex flex-column">
                                                            <a href="javascript:;" class="text-gray-800 text-hover-primary mb-1">{{$rent->first_name}} {{$rent->last_name}}</a>
                                                            <span>{{$rent->phone_number}}</span>
                                                        </div>
                                            </td>
                                            <!--end::Name=-->
                                            <!--begin::Company=-->
                                            <!--end::Company=-->
                                            <!--begin::Payment method=-->
                                            <td><div class="badge bg-primary mb-1">{{$rent->a_name}}</div></td>
                                            <!--end::Payment method=-->
                                            <!--begin::Date=-->
                                            <td><span class="fw-bolder">${{$rent->total_amount}}</span></td>
                                            <td>{{$rent->generation_date}}</td>
                                            
                                            <td>
                                                @if($rent->status == 'unpaid')
                                                    <div class="badge bg-danger">Un-Paid</div>
                                                @elseif($rent->status == 'paid')
                                                    <div class="badge bg-success">Paid</div>
                                                @endif
                                            </td>
                                            
                                            <td>
                                            @if($rent->status == 'unpaid') <button type="button" class="btn btn-primary btn-sm" onclick="payRent('{{$rent->r_id}}', '{{$rent->total_amount}}')">Pay Rent</button> @endif
                                            <a href="{{url('/invoice')}}/{{$rent->r_id}}"><button type="button" class="btn btn-success btn-sm" onclick="" >Generate Invoice</button></a> 

                                                    {{-- <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a> --}}
                                                </td>
                                            <!--end::Product=-->
                                            </tr>
                                        @endforeach
                                        
                                        
                                        
                                    </tbody>
                                </table>
                                <div class="row">
                                    {{ $rents->links('vendor.pagination.custom') }}
                                </div>
                            </div>

                            
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
            
        </div> <!-- container -->

        <form action="{{ url('/pay_rent2') }}" method="post" class="d-none">
            @csrf
            <input type="text" name=r_id>
            <input type="text" name="total_amount">

            <input type="submit" id="pay_rent_submit" value="submit">
        </form>

        <div class="modal fade" id="centermodal" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Form-->
                    <form class="form" action="{{url('/pay_rent')}}" method="POST" id="kt_modal_add_customer_form" data-kt-redirect="apps/customers/list.html">
                       @csrf
                        <!--begin::Modal header-->
                        <div class="modal-header">
                                <h4 class="modal-title" id="myCenterModalLabel">Invoice for Area/Shop <span id="shopNumber"></span></h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body py-10 px-lg-17">
                            <!--begin::Scroll-->
                            <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                                <!--begin::Input group-->
                                <div class="fv-row mb-3">
                            <label class="required fs-6 fw-bold">Client Name</label>
                              <input type="text" class="form-control form-control-solid" name="clientName" readonly />
                              <input type="hidden" name="rent_id">
                            {{-- <h4 id="clientName"></h4> --}}
                            {{-- <select name="client_id" class="form-control form-select form-select-solid" required>
                                <option value="">Select Client</option>
                                                                                    <option value="1">Jhon</option>
                                                                                    <option value="2">Sara</option>
                                                                                    <option value="3">Alex</option>
                                                                                    <option value="4">Sabrina</option>
                                                                                </select> --}}
                        </div>
                        
                        <div class="fv-row mb-3">
                            <label class="required fs-6 fw-bold">Month</label>
                            {{-- form-select form-select-solid --}}
                            <select name="month" class="form-control" onchange="onchangeMonth()">
                                <option value="">Select Month</option>
                                
                            </select>
                            {{-- <input type="date" class="form-control form-control-solid" name="name" value="2021-12-12" disabled readonly/> --}}
                        </div>
                        
                        
                                <div class="fv-row mb-3">
                                        <label class="required fs-6 fw-bold">Amount to pay</label>
                                        <input type="text" class="form-control form-control-solid" name="total_amount"  readonly />
                                </div>
    
                                <div class="fv-row mb-3">
                                    <label class="required fs-6 fw-bold">Amount Paid</label>
                                    <input type="hidden" class="form-control form-control-solid" name="pay_amount"   />
                                </div>
                                
                                
                         
                            </div>
                            <!--end::Scroll-->
                        </div>
                        <!--end::Modal body-->
                        <!--begin::Modal footer-->
                        <div class="modal-footer flex-center">
                            <!--begin::Button-->
                            <button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-white me-3">Discard</button>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                                <span class="indicator-label">Pay</span>
                                
                            </button>
                            <!--end::Button-->
                        </div>
                        <!--end::Modal footer-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>

@endsection
             