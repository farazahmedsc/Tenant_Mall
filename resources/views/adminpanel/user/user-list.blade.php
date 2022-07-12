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
                                <input type="text" name="search" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </form>                               
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end">
                                <a href="{{ route('user_create')}}" class="btn btn-primary waves-effect waves-light mb-2 me-2"><i class="mdi mdi-basket me-1"></i> Add User</a>
                            </div>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap table-borderless table-hover mb-0">
                            <thead class="table-light">
                                <tr>      
                                    <th>Photo</th>                             
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>User Name</th>
                                    <th>User Type</th>
                                    <th>Added On</th>
                                    <th>Status</th>
                                    <th style="width: 82px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td><img src="{{url('/')}}/uploads/user/{{(is_null($user->photo))? 'avatar.jpg' : $user->photo}}" alt="User Photo" class="img-table"></td>
                                        <td>{{$user->first_name}} {{$user->last_name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone_number}}</td>
                                        <td>{{$user->username}}</td>
                                        <td>{{$user->type}}</td>
                                        <td>{{date('F d,Y', strtotime($user->created_at))}}</td>    
                                        <td>
                                            <div class="badge badge-soft-{{($user->is_active == 1)? "success" : "danger"}}">{{($user->is_active == 1)? "Active" : "Inactive"}}</div>
                                        </td>
                                        <td>
                                            <a href="{{route('user_edit', ['id' => $user->id ])}}" class="action-icon"> <i class="mdi mdi-square-edit-outline text-primary"></i></a>
                                            <a href="{{route('user_delete', ['id' => $user->id ])}}" class="action-icon delete-confirm"> <i class="mdi mdi-delete text-danger"></i></a>
                                        </td> 
                                    </tr>
                                @endforeach
                                
                                
                                
                                
                                
                            </tbody>
                        </table>
                        <div class="row">
                            {{ $users->links('vendor.pagination.custom') }}
                        </div>
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