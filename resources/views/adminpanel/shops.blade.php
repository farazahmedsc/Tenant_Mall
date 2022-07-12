@extends('layout.main')

@push('title')
Shops
@endpush

@section('main-section')

<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <a href="{{ route('tenant_create') }}" class="btn btn-primary waves-effect waves-light mb-2 me-2"><i
                            class="mdi mdi-basket me-1"></i> Allot Shop</a>
                </div>
                <h4 class="page-title">Shops</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-md-12 col-xl-12">
            <h2 class="fw-bolder fs-3x text-center my-2 border-gray-600 border-bottom py-3">Mall Front Shops 
                {{-- <span class="badge bg-warning fw-bolder text-dark font-12 p-1">3 shops</span></h2> --}}
        </div>

        @foreach ($frontshops as $frontshop)
            
        
            <div class="col-md-4 col-xl-4">
                <!--begin::Card-->
                <a href="#" class="card border border-2 border-gray-300 border-hover">
                    <!--begin::Card header-->
                    <div class="card-header bg-white border-0 pt-9">
                        <!--begin::Card Title-->
                        <div class="card-title m-0">
                            <div class="float-end">
                                <span class="badge badge-soft-secondary me-auto font-12 p-1 mt-2">#{{$frontshop->a_id}}</span>
                            </div> <!-- end dropdown -->
                            <!-- Title-->
                            <div class="rounded-circle avatar-md">
                                <img src="{{url('/')}}/uploads/tenant/{{(is_null($frontshop->photo))? 'avatar.jpg' : $frontshop->photo}}" alt="Tenant" class="rounded-circle avatar-md" />
                            </div>
                            <!--begin::Avatar-->


                            <!--end::Avatar-->
                        </div>

                    </div>
                    <!--end:: Card header-->
                    <!--begin:: Card body-->
                    <div class="card-body text-center p-9">
                        <!--begin::Name-->
                        <div class="fs-3 fw-bolder text-dark">{{$frontshop->a_name}}</div>
                        <!--end::Name-->
                        <!--begin::Description-->
                        <p class="text-gray-600 fw-bold font-14 mt-1 mb-7">{{$frontshop->first_name}} {{$frontshop->last_name}}<br><span
                                class="text-dark">{{$frontshop->phone_number}}</span> </p>
                        <!--end::Description-->
                        <!--begin::Info-->
                        <div class="d-flex justify-content-around mb-1">
                            <!--begin::Due-->
                            <div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">{{date('F d, Y', strtotime($frontshop->acquiring_date))}}</div>
                                <div class="fw-bold text-dark">Alloted Date</div>
                            </div>
                            <!--end::Due-->
                            <!--begin::Budget-->
                            <div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                <div class="fs-6 text-gray-800 fw-bolder">${{$frontshop->rent}}</div>
                                <div class="fw-bold text-dark">Monthly Rent</div>
                            </div>
                            <!--end::Budget-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Progress-->
                        <div class="progress mb-1" style="height: 7px;">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                aria-valuemax="100" style="width: 100%;">
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
        @endforeach
       


    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-md-12 col-xl-12">
            <h2 class="fw-bolder fs-3x text-center my-2 border-gray-600 border-bottom py-3">Mall Center Shops
                 {{-- <span class="badge bg-warning fw-bolder text-dark font-12 p-1">5 shops</span></h2> --}}
        </div>


        @foreach ($centershops as $centershop)
        
        @php
            if($centershop->a_type_detail != 'Center Shop'):
                continue;
            endif
        @endphp
        
        <div class="col-md-4 col-xl-4">
            <!--begin::Card-->
            <a href="#" class="card border border-2 border-gray-300 border-hover">
                <!--begin::Card header-->
                <div class="card-header bg-white border-0 pt-9">
                    <!--begin::Card Title-->
                    <div class="card-title m-0">
                        <div class="float-end">
                            <span class="badge badge-soft-secondary me-auto font-12 p-1 mt-2">#{{$centershop->a_id}}</span>
                        </div> <!-- end dropdown -->
                        <!-- Title-->
                        <div class="rounded-circle avatar-md">
                            <img src="{{url('/')}}/uploads/tenant/{{(is_null($centershop->photo))? 'avatar.jpg' : $centershop->photo}}" alt="Tenant" class="rounded-circle avatar-md" />
                        </div>
                        <!--begin::Avatar-->


                        <!--end::Avatar-->
                    </div>

                </div>
                <!--end:: Card header-->
                <!--begin:: Card body-->
                <div class="card-body text-center p-9">
                    <!--begin::Name-->
                    <div class="fs-3 fw-bolder text-dark">{{$centershop->a_name}}</div>
                    <!--end::Name-->
                    <!--begin::Description-->
                    <p class="text-gray-600 fw-bold font-14 mt-1 mb-7">{{$centershop->first_name}} {{$centershop->last_name}}<br><span
                            class="text-dark">{{$centershop->phone_number}}</span> </p>
                    <!--end::Description-->
                    <!--begin::Info-->
                    <div class="d-flex justify-content-around mb-1">
                        <!--begin::Due-->
                        <div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                            <div class="fs-6 text-gray-800 fw-bolder">{{date('F d, Y', strtotime($centershop->acquiring_date))}}</div>
                            <div class="fw-bold text-dark">Alloted Date</div>
                        </div>
                        <!--end::Due-->
                        <!--begin::Budget-->
                        <div class="border border-gray-400 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                            <div class="fs-6 text-gray-800 fw-bolder">${{$centershop->rent}}</div>
                            <div class="fw-bold text-dark">Monthly Rent</div>
                        </div>
                        <!--end::Budget-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Progress-->
                    <div class="progress mb-1" style="height: 7px;">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100" style="width: 100%;">
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
    @endforeach



    </div>
    <!-- end row -->

    <div class="row d-none">
        <div class="col-12">
            <div class="text-center mb-3">
                <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-spin mdi-loading me-1"></i> Load
                    more </a>
            </div>
        </div> <!-- end col-->
    </div>
    <!-- end row -->

</div> <!-- container -->

@endsection