@extends('layout.main')

@push('title')
Tenants
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
                            <form action="" id="searchForm" class="search-bar position-relative mb-sm-0 mb-2">
                                <input type="search" name="search" class="form-control" placeholder="Search..." value="{{$search}}">
                                <span class="mdi mdi-magnify"></span>
                            </form>   
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end">
                                <a href="{{ route('tenant_create') }}"
                                    class="btn btn-primary waves-effect waves-light mb-2 me-2"><i
                                        class="mdi mdi-basket me-1"></i> Add Tenants</a>
                            </div>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap table-borderless table-hover mb-0">
                            <thead class="table-light">
                                <tr>    
                                    {{-- <th>Photo</th>--}}
                                    <th>Full Name / Phone</th>
                                    <th>Business name</th>
                                    <th>Monthly Rent</th>
                                    <th>Maintenance</th>
                                    <th>Shop Alloted</th>
                                    <th>Acquiring Date</th>
                                    <th>Status</th>
                                    <th style="width: 82px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                @foreach ($tenants as $tenant)
                                <tr>
                                    {{-- <td><img src="{{url('/')}}/uploads/tenant/{{(is_null($tenant->photo))? 'avatar.jpg' : $tenant->photo}}" alt="Tenant Photo" class="img-table"></td> --}}
                                    <td>
                                    <a href="{{ route('tenant_edit', ['id' => $tenant->id]) }}" class="text-gray-800 text-hover-primary mb-1">{{$tenant->first_name}} {{$tenant->last_name}}</a><br>
                                        <span class="fw-bolder text-dark">{{$tenant->phone_number}} </span> <br>
                                        <span class="fw-bolder text-dark">{{$tenant->email}} </span>
                                    </td>
                                    <td>{{$tenant->business_name}}</td>
                                    <td>{{$tenant->rent}}</td>
                                    <td>{{$tenant->maintenance}}</td>
                                    <td>{{$tenant->name}}</td>                                    
                                    <td>{{date("M j, Y", strtotime($tenant->acquiring_date))}}</td>                                    
                                    <td>
                                        @if ($tenant->is_active)
                                            <div class="badge badge-soft-success">Active</div>
                                        @else
                                            <div class="badge badge-soft-danger">Inactive</div>
                                        @endif
                                        
                                    </td>

                                    <td>
                                        <a href="{{ route('tenant_edit', ['id' => $tenant->id]) }}" class="action-icon"> <i
                                                class="mdi mdi-square-edit-outline text-primary"></i></a>
                                        <a href="{{ route('tenant_delete', ['id' => $tenant->id]) }}" class="action-icon delete-confirm"> <i
                                                class="mdi mdi-delete text-danger"></i></a>
                                    </td>
                                </tr>

                                @endforeach



                            </tbody>
                        </table>
                        <div class="row">
                            {{ $tenants->links('vendor.pagination.custom') }}
                        </div>
                    </div>

                    
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

</div> <!-- container -->

@endsection