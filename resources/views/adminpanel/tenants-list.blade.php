@extends('layout.main')

@push('title')
Tenants
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
                <h4 class="page-title">Tenants List</h4>
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
                            <form class="search-bar position-relative mb-sm-0 mb-2">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end">
                                <a href="{{ route('tenant.create') }}"
                                    class="btn btn-primary waves-effect waves-light mb-2 me-2"><i
                                        class="mdi mdi-basket me-1"></i> Add Tenants</a>
                            </div>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap table-borderless table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    {{-- <th style="width: 20px;">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                            </div>
                                                        </th> --}}
                                    <th>Full Name / Phone</th>
                                    <th>Business name</th>
                                    <th>Monthly Rent</th>
                                    <th>Maintenance</th>
                                    <th>Total Rent</th>
                                    <th>Shop Alloted</th>
                                    <th>Added On</th>
                                    <th>Status</th>
                                    <th style="width: 82px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tenants as $tenant)
                                <tr>
                                    {{-- <td>
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                            </div>
                                                        </td> --}}




                                    <td>
                                    <a href="#" class="text-gray-800 text-hover-primary mb-1">{{$tenant->first_name}} {{$tenant->last_name}}</a><br>
                                        <span class="fw-bolder text-dark">{{$tenant->phone_number}} </span></td>
                                    <td>{{$tenant->business_name}}</td>
                                    <td>{{$tenant->rent}}</td>
                                    <td>{{$tenant->maintenance}}</td>
                                    <td>100$</td>
                                    <td>{{$tenant->area_alloted}}</td>
                                    <!--begin::Product=-->

                                    <!--end::Product=-->
                                    <!--begin::Date=-->
                                    <td>{{date("M j, Y", strtotime($tenant->acquiring_date))}}</td>
                                    <!--end::Date=-->
                                    <!--begin::Status=-->
                                    <td>
                                        @if ($tenant->is_active)
                                            <div class="badge badge-soft-success">Active</div>
                                        @else
                                            <div class="badge badge-soft-danger">Inactive</div>
                                        @endif
                                        
                                    </td>

                                    <td>
                                        <a href="{{ route('tenant.edit', ['id' => $tenant->id]) }}" class="action-icon"> <i
                                                class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="{{ route('tenant.delete', ['id' => $tenant->id]) }}" onclick="return confirm('Are you sure, you want to delete?')" class="action-icon"> <i
                                                class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>

                                @endforeach



                            </tbody>
                        </table>
                    </div>

                    <ul class="pagination pagination-rounded justify-content-end my-2">
                        <li class="page-item">
                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                <span aria-hidden="true">»</span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </li>
                    </ul>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

</div> <!-- container -->

@endsection