@extends('layout.main')

@push('title')
Users
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
                    <ol class="breadcrumb m-0">
                        
                    </ol>
                </div>
                <h4 class="page-title">Users List</h4>
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
                                <a href="users-add.html" class="btn btn-primary waves-effect waves-light mb-2 me-2"><i class="mdi mdi-basket me-1"></i> Add User</a>
                            </div>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap table-borderless table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 20px;">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th>Full Name</th>
                   <th>Email</th>
                   <th>Phone</th>
                   <th>User Name</th>
                   <th>User Type</th>
                   <th>Status</th>
                                    <th style="width: 82px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                      Jhon Doe
                   </td>
                   <!--end::Customer=-->
                   
                   <!--begin::Billing=-->
                   <td>
                      abdul@gmail.com
                   </td>
                   <!--end::Billing=-->
                   <!--begin::Product=-->
                   <td>612708557</td>
                   <!--end::Product=-->
                   <!--begin::Date=-->
                   <td>user29</td>
                   <!--end::Date=-->
                   <td>
                      <div class="badge bg-warning">Shop Owner</div>
                   </td>
                   <td>
                      <div class="badge badge-soft-success">Active</div>
                   </td>

                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                      Jhon Doe
                   </td>
                   <!--end::Customer=-->
                   
                   <!--begin::Billing=-->
                   <td>
                      abdul@gmail.com
                   </td>
                   <!--end::Billing=-->
                   <!--begin::Product=-->
                   <td>612708557</td>
                   <!--end::Product=-->
                   <!--begin::Date=-->
                   <td>user29</td>
                   <!--end::Date=-->
                   <td>
                      <div class="badge bg-warning">Shop Owner</div>
                   </td>
                   <td>
                      <div class="badge badge-soft-success">Active</div>
                   </td>

                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>
                      Jhon Doe
                   </td>
                   <!--end::Customer=-->
                   
                   <!--begin::Billing=-->
                   <td>
                      abdul@gmail.com
                   </td>
                   <!--end::Billing=-->
                   <!--begin::Product=-->
                   <td>612708557</td>
                   <!--end::Product=-->
                   <!--begin::Date=-->
                   <td>user29</td>
                   <!--end::Date=-->
                   <td>
                      <div class="badge bg-warning">Shop Owner</div>
                   </td>
                   <td>
                      <div class="badge badge-soft-success">Active</div>
                   </td>

                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                
                                
                                
                                
                                
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